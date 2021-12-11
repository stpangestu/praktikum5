<?php

namespace App\Models;

use CodeIgniter\Model;

class Device extends Model
{
    private static $sample = [
        [
            "Id" => 1,
            "device_name" => "LED STRIP",
            "device_brand" => "Bardi",
            "device_quantity" => 1,
            "device_status" => 0
        ],
        [
            "Id" => 2,
            "device_name" => "Smart PLUG",
            "device_brand" => "Bardi",
            "device_quantity" => 5,
            "device_status" => 1
        ],
        [
            "Id" => 3,
            "device_name" => "Smart Light 12W",
            "device_brand" => "Bardi",
            "device_quantity" => 4,
            "device_status" => 1
        ]
    ];
    public function data()
    {
        return self::$sample;
    }
}
