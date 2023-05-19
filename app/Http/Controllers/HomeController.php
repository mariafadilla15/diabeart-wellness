<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'admin') {
                return redirect()->route('dashboard');
            } else {
                return view('home');
            }

        } else {
            return view('home');
        }
    }

    public function about(){
        return view('about');
    }

    public function ulasan(){
        return view('ulasan');
    }
}
