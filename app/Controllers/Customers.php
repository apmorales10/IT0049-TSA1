<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@email.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@email.com',
                'phone' => '09182345678',
            ],
            [
                'full_name' => 'Angela Reyes',
                'email' => 'angela.reyes@email.com',
                'phone' => '09193456789',
            ],
            [
                'full_name' => 'Carlo Mendoza',
                'email' => 'carlo.mendoza@email.com',
                'phone' => '09204567890',
            ],
            [
                'full_name' => 'Sofia Garcia',
                'email' => 'sofia.garcia@email.com',
                'phone' => '09215678901',
            ],
        ];

        return view('customers', ['customers' => $customers]);
    }
}