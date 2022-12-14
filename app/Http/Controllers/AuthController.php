<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $validator = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

        $credencials = $request->only('email','password');

        
    }
}
