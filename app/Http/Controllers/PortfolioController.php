<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $feed = $this->getInstagramFeed(10);
        return view('landing', ['instagram_feed' => $feed]);
    }

    public static function getInstagramFeed($feedCount){
        // $profile = \Dymantic\InstagramFeed\Profile::where('username', 'codesbygdinsta')->first();
        // $feed = \Dymantic\InstagramFeed\Profile::where('username', 'codesbygdinsta')->first()->feed();

        $profile = \Dymantic\InstagramFeed\Profile::for('codesbygdinsta');
        $feed = $profile?->feed($feedCount);
        return $feed;
    }
}
