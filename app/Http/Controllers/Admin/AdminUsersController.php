<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdminUsersController extends BaseAdminController
{
 public function usersList()
 {
    // return view('test');
    $users = User::role('Client')->get();
    return view('admin-dashboard.users-list-page',['users'=>$users]);
 }    
}









