<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function landing()
    {
        $title = "techNewsdex";
        $subtitle = "HotNews";
        return view('page.landing', compact('title', 'subtitle'));
    }

    public function about()
    {
        return view('page.about');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function news()
    {
        return view('page.news');
    }

    public function reportUs()
    {
        return view('page.report-us');
    }

    public function profile()
    {
        $firstname = "Rotanak";
        $lastname = "Rithy";
        $fullname = "Rotanak Rithy";
        $mayjor = "Computer Scinence";
        $subject = "Web framework";
        return view('page.profile', compact('firstname', 'lastname', 'fullname', 'mayjor', 'subject'));
    }
}
