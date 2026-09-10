<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        // Static array representing temporary staff/user database
        $data['users'] = [
            ['username' => 'admin_mbs', 'full_name' => 'Ma. Bernadette Santos', 'role' => 'Administrator'],
            ['username' => 'cashier1_zmv', 'full_name' => 'Zuedah Visperas', 'role' => 'Cashier'],
            ['username' => 'cashier2_cdt', 'full_name' => 'Chellean Tolentino', 'role' => 'Cashier'],
            ['username' => 'manager_vst', 'full_name' => 'Vera Trinidad', 'role' => 'Manager'],
            ['username' => 'support_em', 'full_name' => 'Eiah Medeceno', 'role' => 'Support'],
        ];

        return view('users/index', $data);
    }
}