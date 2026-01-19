<?php

namespace App\Models;

class Team
{
    public static function all(): array
    {
        return [
            [
                "name" => "Farrel Maahira Agraprana Nugraha",
                "role" => "Backend Developer",
                "medsoc" => "https://www.instagram.com/farrelmaahira/"
            ],
            [
                "name" => "Naufal Bintang Pradana Himawan",
                "role" => "Backend Developer",
                "medsoc" => "https://www.instagram.com/_naufalbintang_/"
            ],
            [
                "name" => "Nugroho Nur Cahyo",
                "role" => "Frontend Developer",
                "medsoc" => "https://www.instagram.com/nugroho.nc/"
            ],
            [
                "name" => "Sello Lintang Pambayun",
                "role" => "Backend Developer",
                "medsoc" => "https://www.instagram.com/pampayooo/"
            ],
            [
                "name" => "Shidqi Athallah Bahri",
                "role" => "Backend Developer",
                "medsoc" => null
            ],
        ];
    }
}
