<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{

    protected $variable;

    public function __construct(){

        $this->variable = 123;

    }
    

    public function about(){

        // information from database
        $users = User::where('email','like','%gmail.com%')
            ->where('name','Jack')
            ->get();


        // updating
        // fetch
        $user = User::find(4);
        $user->delete();
        

        // update
        
        
        return view('about')->with(['users' => $users]);

    }

    public function contactForm()
    {
        dd('contact form');
    }
}
