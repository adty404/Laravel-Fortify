<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdatePasswordController extends Controller
{
    public function edit(){

        return view('profile.update-password');
    }
}
