<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Admin extends Controller
{
    public function authenticate(Request $request){
        
        $request->validate(
            [
                'username' => 'in:admin',
                'password' => 'in:admin',
            ]
            );

        return redirect('/dashboard');
        
    }
}
