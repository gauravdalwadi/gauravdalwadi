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
        // $profile = \Dymantic\InstagramFeed\Profile::where('username', 'codesbygdinsta')->first();



        // $feed = \Dymantic\InstagramFeed\Profile::where('username', 'codesbygdinsta')->first()->feed();
        // dd($feed);
        return view('landing');
    }
}
