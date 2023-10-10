<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    public function index()
    {
        return view('candidates.index');
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'phone' => 'required|string|max:14',
            'bank_name' => 'required|string|max:100',
            'bank_branch' => 'required|string|max:100',
            'bank_account_name' => 'required|string|max:100',
            'bank_account_number' => 'required|string|max:100',
            'ktp' => 'required|file|mimes:jpeg,png|max:2048', // Assuming KTP is an image file
            'npwp' => 'required|file|mimes:jpeg,png|max:2048', // Assuming NPWP is an image file
            'foto_close_up' => 'required|file|mimes:jpeg,png|max:2048', // Assuming Foto Close Up is an image file
        ], [
            'first_name.required' => 'Nama Depan harus diisi bossss',
            'first_name.max' => 'Nama Depan maksimal 255 karakter',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email harus valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password minimal 8 karakter',
                'password_confirmation.required' => 'Konfirmasi Password harus diisi',
                'password_confirmation.same' => 'Konfirmasi Password harus sama dengan Password',
                'phone.required' => 'Nomor HP harus diisi',
                'phone.max' => 'Nomor HP maksimal 14 karakter',
                'bank_name.required' => 'Nama Bank harus diisi',
                'bank_name.max' => 'Nama Bank maksimal 100 karakter',
                'bank_branch.required' => 'Cabang Bank harus diisi',
                'bank_branch.max' => 'Cabang Bank maksimal 100 karakter',
                'bank_account_name.required' => 'Nama Pemilik Rekening harus diisi',
                'bank_account_name.max' => 'Nama Pemilik Rekening maksimal 100 karakter',
                'bank_account_number.required' => 'Nomor Rekening harus diisi',
                'bank_account_number.max' => 'Nomor Rekening maksimal 100 karakter',
                'ktp.required' => 'KTP harus diisi',
                'ktp.mimes' => 'KTP harus berupa file jpeg atau png',
                'ktp.max' => 'KTP maksimal 2MB',
                'npwp.required' => 'NPWP harus diisi',
                'npwp.mimes' => 'NPWP harus berupa file jpeg atau png',
                'npwp.max' => 'NPWP maksimal 2MB',
                'foto_close_up.required' => 'Foto Close Up harus diisi',
                'foto_close_up.mimes' => 'Foto Close Up harus berupa file jpeg atau png',
                'foto_close_up.max' => 'Foto Close Up maksimal 2MB',
                'girik.mimes' => 'Girik harus berupa file jpeg, png, atau pdf',
                'girik.max' => 'Girik maksimal 2MB',
                'sim_b1.mimes' => 'SIM B1 harus berupa file jpeg atau png',
                'sim_b1.max' => 'SIM B1 maksimal 2MB',
                'stnk.mimes' => 'STNK harus berupa file jpeg atau png',
                'stnk.max' => 'STNK maksimal 2MB',
                'siup.mimes' => 'SIUP harus berupa file jpeg, png, atau pdf',
                'siup.max' => 'SIUP maksimal 2MB',
                'npwp_fabric.mimes' => 'NPWP Fabric harus berupa file jpeg atau png',
                'npwp_fabric.max' => 'NPWP Fabric maksimal 2MB',
            ]
        );

           $user = User::create([
               'first_name' => $request->first_name,
               'last_name' => $request->last_name,
               'email' => $request->email,
               'password' => $request->password,
               'phone' => $request->phone,
               'bank_name' => $request->bank_name,
               'bank_branch' => $request->bank_branch,
               'bank_account_name' => $request->bank_account_name,
               'bank_account_number' => $request->bank_account_number,
               'ktp' => $request->ktp,
               'npwp' => $request->npwp,
               'foto_close_up' => $request->foto_close_up,
               'is_admin' => false,
               'is_farmer' => $request->is_farmer ?? false,
               'is_driver' => $request->is_driver ?? false,
               'is_pic_fabric' => $request->is_pic_fabric ?? false,
               'girik' => $request->girik,
               'farmer_address' => $request->farmer_address,
               'farmer_garden_address' => $request->farmer_garden_address,
               'sim_b1' => $request->sim_b1,
               'stnk' => $request->stnk,
               'driver_address' => $request->driver_address,
               'pic_fabric_address' => $request->pic_fabric_address,
               'siup' => $request->siup,
               'npwp_fabric' => $request->npwp_fabric,
               'candidate_status' => 'pending',
           ]);

           $user->ktp = $request->ktp;
           if ($request->file('ktp')){
                $ktpFile = $request->file('ktp');
                $ktpExtension = $ktpFile->getClientOriginalExtension();
                $ktpFilename = time() . '.' . $ktpExtension;
                $ktpUrl = Storage::disk('public')->putFileAs('ktp', $ktpFile, $ktpFilename);
                $user->ktp = $ktpUrl;
           }

              $user->npwp = $request->npwp;
              if ($request->file('npwp')){
                 $npwpFile = $request->file('npwp');
                 $npwpExtension = $npwpFile->getClientOriginalExtension();
                 $npwpFilename = time() . '.' . $npwpExtension;
                 $npwpUrl = Storage::disk('public')->putFileAs('npwp', $npwpFile, $npwpFilename);
                 $user->npwp = $npwpUrl;
                }

                $user->foto_close_up = $request->foto_close_up;
              if ($request->file('foto_close_up')){
                 $foto_close_upFile = $request->file('foto_close_up');
                 $foto_close_upExtension = $foto_close_upFile->getClientOriginalExtension();
                 $foto_close_upFilename = time() . '.' . $foto_close_upExtension;
                 $foto_close_upUrl = Storage::disk('public')->putFileAs('foto_close_up', $foto_close_upFile, $foto_close_upFilename);
                 $user->foto_close_up = $foto_close_upUrl;
                }

                $user->girik = $request->girik;
                if ($request->file('girik')){
                     $girikFile = $request->file('girik');
                     $girikExtension = $girikFile->getClientOriginalExtension();
                     $girikFilename = time() . '.' . $girikExtension;
                     $girikUrl = Storage::disk('public')->putFileAs('girik', $girikFile, $girikFilename);
                     $user->girik = $girikUrl;
                    }

                $user->sim_b1 = $request->sim_b1;
                if ($request->file('sim_b1')){
                     $sim_b1File = $request->file('sim_b1');
                     $sim_b1Extension = $sim_b1File->getClientOriginalExtension();
                     $sim_b1Filename = time() . '.' . $sim_b1Extension;
                     $sim_b1Url = Storage::disk('public')->putFileAs('sim_b1', $sim_b1File, $sim_b1Filename);
                     $user->sim_b1 = $sim_b1Url;
                    }

                $user->stnk = $request->stnk;

                if ($request->file('stnk')) {
                    $stnkFile = $request->file('stnk');
                    $stnkExtension = $stnkFile->getClientOriginalExtension();
                    $stnkFilename = time() . '.' . $stnkExtension;
                    $stnkUrl = Storage::disk('public')->putFileAs('stnk', $stnkFile, $stnkFilename);
                    $user->stnk = $stnkUrl;
                }

                $user->siup = $request->siup;
                if ($request->file('siup')){
                     $siupFile = $request->file('siup');
                     $siupExtension = $siupFile->getClientOriginalExtension();
                     $siupFilename = time() . '.' . $siupExtension;
                     $siupUrl = Storage::disk('public')->putFileAs('siup', $siupFile, $siupFilename);
                     $user->siup = $siupUrl;
                    }

                $user->npwp_fabric = $request->npwp_fabric;
                if ($request->file('npwp_fabric')){
                     $npwp_fabricFile = $request->file('npwp_fabric');
                     $npwp_fabricExtension = $npwp_fabricFile->getClientOriginalExtension();
                     $npwp_fabricFilename = time() . '.' . $npwp_fabricExtension;
                     $npwp_fabricUrl = Storage::disk('public')->putFileAs('npwp_fabric', $npwp_fabricFile, $npwp_fabricFilename);
                     $user->npwp_fabric = $npwp_fabricUrl;
                    }



           $user->save();


           return redirect()->route('candidates.index')->with('success', 'Candidate created successfully.');


//        $candidate = new User();
//        $candidate->first_name = $request->first_name;
//        $candidate->last_name = $request->last_name;
//        $candidate->email = $request->email;
//        $candidate->password = $request->password;
//        $candidate->phone = $request->phone;
//        $candidate->bank_name = $request->bank_name;
//        $candidate->bank_branch = $request->bank_branch;
//        $candidate->bank_account_name = $request->bank_account_name;
//        $candidate->bank_account_number = $request->bank_account_number;
//
//        $candidate->ktp = $request->ktp;
//        if ($request->hasFile('ktp')) {
//            $file = $request->file('ktp');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('uploads/ktp/', $filename);
//            $candidate->ktp = $filename;
//        }
//
//        $candidate->npwp = $request->npwp;
//        if ($request->hasFile('npwp')) {
//            $file = $request->file('npwp');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('uploads/npwp/', $filename);
//            $candidate->npwp = $filename;
//        }
//
//        $candidate->foto_close_up = $request->foto_close_up;
//        if ($request->hasFile('foto_close_up')) {
//            $file = $request->file('foto_close_up');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('uploads/foto_close_up/', $filename);
//            $candidate->foto_close_up = $filename;
//        }
//
//        $candidate->is_admin = false;
//        $candidate->is_farmer = $request->is_farmer ?? false;
//        $candidate->is_driver = $request->is_driver ?? false;
//        $candidate->is_pic_fabric = $request->is_pic_fabric ?? false;
//
//        $candidate->girik = $request->girik;
//        if ($request->hasFile('girik')) {
//            $file = $request->file('girik');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('uploads/girik/', $filename);
//            $candidate->girik = $filename;
//        } else {
//            $candidate->girik = '';
//            return $request;
//        }
//
//        $candidate->farmer_address = $request->farmer_address;
//        $candidate->farmer_garden_address = $request->farmer_garden_address;
//
//        $candidate->sim_b1 = $request->sim_b1;
//        if ($request->hasFile('sim_b1')) {
//            $file = $request->file('sim_b1');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('uploads/sim_b1/', $filename);
//            $candidate->sim_b1 = $filename;
//        } else {
//            $candidate->sim_b1 = '';
//            return $request;
//        }
//
//        $candidate->stnk = $request->stnk;
//        if ($request->file('stnk'))
//        {
//            $stnkFile = $request->file('stnk');
//            $stnkExtension = $stnkFile->getClientOriginalExtension();
//            $stnkFilename = time() . '.' . $stnkExtension;
//            $stnkUrl = Storage::disk('public')->putFileAs('stnk', $stnkFile, $stnkFilename);
//            $candidate->stnk = $stnkUrl;
//        } else {
//            $candidate->stnk = '';
//            return $request;
//        }
//
//        $candidate->driver_address = $request->driver_address;
//
//        $candidate->pic_fabric_address = $request->pic_fabric_address;
//
//        $candidate->siup = $request->siup;
//        if ($request->hasFile('siup')) {
//            $file = $request->file('siup');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('uploads/siup/', $filename);
//            $candidate->siup = $filename;
//        } else {
//            $candidate->siup = '';
//            return $request;
//        }
//
//        $candidate->npwp_fabric = $request->npwp_fabric;
//        if ($request->hasFile('npwp_fabric')) {
//            $file = $request->file('npwp_fabric');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('uploads/npwp_fabric/', $filename);
//            $candidate->npwp_fabric = $filename;
//        } else {
//            $candidate->npwp_fabric = '';
//            return $request;
//        }
//
//        $candidate->candidate_status = 'pending';
//
//        //todo: add role and permission
//
//        $candidate->save();
//
//        return redirect()->route('candidates.index')->with('success', 'Candidate created successfully.');

    }
}
