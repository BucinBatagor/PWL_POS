<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => '2024-03-10 08:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Jane Doe',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => '2024-03-10 09:00:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Michael Smith',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => '2024-03-10 10:00:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Emma Johnson',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => '2024-03-10 11:00:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'David Williams',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => '2024-03-10 12:00:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 1,
                'pembeli' => 'Sarah Brown',
                'penjualan_kode' => 'PJN006',
                'penjualan_tanggal' => '2024-03-10 13:00:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'James Wilson',
                'penjualan_kode' => 'PJN007',
                'penjualan_tanggal' => '2024-03-10 14:00:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 1,
                'pembeli' => 'Olivia Taylor',
                'penjualan_kode' => 'PJN008',
                'penjualan_tanggal' => '2024-03-10 15:00:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Noah Anderson',
                'penjualan_kode' => 'PJN009',
                'penjualan_tanggal' => '2024-03-10 16:00:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Sophia Martinez',
                'penjualan_kode' => 'PJN010',
                'penjualan_tanggal' => '2024-03-10 17:00:00',
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}