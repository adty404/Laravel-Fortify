<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(){

        return view('profile.update-profile');
    }
}
