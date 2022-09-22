<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request, Redirector $redirect)
    {
        $user = User::where('Nombre', $request->Nombre)->first();
        if($user->Password === md5($request->Password))
        {
            Auth::login($user);
            /* return redirect('post/create'); */

            if($request->Nombre === 'superadmin')
            {
                return redirect('far/create2');
            }
            return redirect('post/create');
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}