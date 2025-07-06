<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name_role' => 'Admin',
                'description' => 'Administrator memiliki akses penuh ke semua fitur.',
            ],
            [
                'name_role' => 'Petugas',
                'description' => 'Petugas dapat membuat, mengedit, dan menghapus konten.',
            ],
            [
                'name_role' => 'Anggota',
                'description' => 'Pengguna biasa memiliki akses terbatas.',
            ],
        ]);
    }
}
