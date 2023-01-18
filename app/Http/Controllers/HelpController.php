<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HelpController extends Controller
{
    public function help(){
        $user = Auth::user()->name;
        return view ("help", ["title" => "Help"])->with('user', $user);
    }
}
