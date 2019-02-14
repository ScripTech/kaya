<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Auth;
use Exception;
//use Google\AdsApi\Common\SoapSettingsBuilder;

class SocialAuthGoogleController extends Controller
{
    public function redirect($service)
    {
        return Socialite::driver(''.$service.'')->redirect();
    }

    public function callback($service)
    {
        $user = Socialite::driver( $service )->user();

        //return $user['email'];
        //return print_r($user);
/*
        $user->getId();
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();
*/
        return $user->getAvatar();
/*
        return [
            'email' => $user['email'],
            'name' => $user['name'],
        ];
*/
    }
}
