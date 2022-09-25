<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstagramAuthController extends Controller
{
    public function show() {
        $profile = \Dymantic\InstagramFeed\Profile::where('username', 'codesbygdinsta')->first();

        return view('instagram-auth-page', ['instagram_auth_url' => $profile->getInstagramAuthUrl()]);
    }

    public function complete() {
        $was_successful = request('result') === 'success';

        return view('instagram-auth-response-page', ['was_successful' => $was_successful]);
    }

}
