<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //Sử dụng session để check login 
        echo 'khởi động';
    }
    public function index()
    {
        return '<h2>Dashboard wellcome</h2>';
    }
}
