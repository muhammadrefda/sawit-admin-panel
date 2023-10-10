<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@mail.com',
            'password' => bcrypt('password'),
            'phone' => '081234567890',
            'candidate_status' => 'pending',
            'bank_name' => 'BCA',
            'bank_branch' => 'Jakarta',
            'bank_account_name' => 'John Doe',
            'bank_account_number' => '1234567890',
            'ktp' => 'uploads/ktp_1600000000.jpg',
            'npwp' => 'uploads/npwp_1600000000.jpg',
            'foto_close_up' => 'uploads/foto_close_up_1600000000.jpg',
            'is_admin' => false,
            'is_farmer' => true,
            'is_driver' => false,
            'is_pic_fabric' => false,
            'girik' => 'uploads/girik_1600000000.jpg',
            'farmer_address' => 'Jl. Raya Bogor KM 30',
            'farmer_garden_address' => 'Jl. Raya Bogor KM 30',
            'sim_b1' => 'uploads/sim_b1_1600000000.jpg',
            'stnk' => 'uploads/stnk_1600000000.jpg',
            'driver_address' => 'Jl. Raya Bogor KM 30',
            'pic_fabric_address' => 'Jl. Raya Bogor KM 30',
            'siup' => 'uploads/siup_1600000000.jpg',
            'npwp_fabric' => 'uploads/npwp_fabric_1600000000.jpg',
        ]);
    }
}
