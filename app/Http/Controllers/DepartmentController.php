<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {   
        
        $departments = []; // atau data dari database
        return view('admin.departments.index', compact('departments'));
    }
}