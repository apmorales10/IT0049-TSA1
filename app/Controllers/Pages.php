<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->where('task_date', date('Y-m-d'))
            ->orderBy('created_at', 'ASC')
            ->findAll();

        return view('home', $data);
    }

    public function about()
    {
        return view('about');
    }
}
