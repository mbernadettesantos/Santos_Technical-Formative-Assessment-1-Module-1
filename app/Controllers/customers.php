<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        // Static array representing temporary customer database
        $data['customers'] = [
            ['full_name' => 'Ma. Bernadette Santos', 'email' => 'mbs@email.com', 'phone' => '09453354726'],
            ['full_name' => 'Zuedah Visperas', 'email' => 'zmv@email.com', 'phone' => '09123456789'],
            ['full_name' => 'Chellean Tolentino', 'email' => 'cdt@email.com', 'phone' => '09987654321'],
            ['full_name' => 'Vera Trinidad', 'email' => 'vst@email.com', 'phone' => '09128765430'],
            ['full_name' => 'Eiah Medeceno', 'email' => 'em@email.com', 'phone' => '09981237654'],
        ];

        return view('customers/index', $data);
    }
}