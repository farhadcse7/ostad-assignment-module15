<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookie_name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // cookie creation
        $cookie = Cookie::make($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return response()->json($data, 200)->cookie($cookie);
    }
}
