<?php

namespace Database\Seeders;

use App\Models\IletisimInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IletisimInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IletisimInfo::create([
            'map_code' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d323968.12493151915!2d28.65808091619436!3d41.027785653254725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac741a30c6b59%3A0x65db9acd1ac93099!2sProtiles%20BYB%20Karao%C4%9Flu%20A.%C5%9E.!5e0!3m2!1str!2str!4v1729164087007!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'address' => 'Bostancı, Dülbentçi Sk. tözüm apartmanı no:7 daire:1, 34744 Kadıköy/İstanbul',
            'phone_number' => '05377076937',
            'mail' => 'info@bybseramik.com.tr'
        ]);
    }
}
