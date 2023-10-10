<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone');
            $table->string('candidate_status');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('bank_account_name');
            $table->string('bank_account_number');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('foto_close_up');
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_farmer')->default(false);
            $table->boolean('is_driver')->default(false);
            $table->boolean('is_pic_fabric')->default(false);
            $table->string('girik')->nullable();
            $table->string('farmer_address')->nullable();
            $table->string('farmer_garden_address')->nullable();
            $table->string('sim_b1')->nullable();
            $table->string('stnk')->nullable();
            $table->string('driver_address')->nullable();
            $table->string('pic_fabric_address')->nullable();
            $table->string('siup')->nullable();
            $table->string('npwp_fabric')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn([
            'first_name',
            'last_name',
            'email',
            'password',
            'phone',
            'candidate_status',
            'bank_name',
            'bank_branch',
            'bank_account_name',
            'bank_account_number',
            'ktp',
            'npwp',
            'foto_close_up',
            'is_admin',
            'is_farmer',
            'is_driver',
            'is_pic_fabric',
            'girik',
            'farmer_address',
            'farmer_garden_address',
            'sim_b1',
            'stnk',
            'driver_address',
            'pic_fabric_address',
            'siup',
            'npwp_fabric',
        ]);
    });
    }
};
