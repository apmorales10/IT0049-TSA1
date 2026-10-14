<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Anna Cruz',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Mark Santos',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Jane Reyes',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Paolo Garcia',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Liza Mendoza',
                'role' => 'Staff',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}