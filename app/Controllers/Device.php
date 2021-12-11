<?php

namespace App\Controllers;

use App\Models\Device as ModelsDevice;

class Device extends BaseController
{
    public function index()
    {
        $model = new ModelsDevice();
        $data['sample'] = $model->data();
        return view('device', $data);
    }
}
