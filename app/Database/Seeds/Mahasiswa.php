<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2057051011',
                'nama'    => 'Putri Santika Mayangsari',
                'alamat'    => 'Bogor',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051011',
                'nama'    => 'Nur Mita',
                'alamat'    => 'Bandar Lampung',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2067051011',
                'nama'    => 'Nur Wati',
                'alamat'    => 'Lampung Selatan',
                'created_at'    => Time::now(),
            ],
        ];

        // Simple Queries
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
