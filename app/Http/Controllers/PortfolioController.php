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
          // return view('landing');
        // $profile = \Dymantic\InstagramFeed\Profile::where('username', 'codesbygdinsta')->first();



        // $feed = \Dymantic\InstagramFeed\Profile::where('username', 'codesbygdinsta')->first()->feed();
        // dd($feed);

        $profile = \Dymantic\InstagramFeed\Profile::for('codesbygdinsta');
        $feed = $profile?->feed();
        return view('landing', ['instagram_feed' => $feed]);
    }
    public function getInstagramFeed(){
        $profile = \Dymantic\InstagramFeed\Profile::for('codesbygdinsta');
        $feed = $profile?->feed();
    }
}
