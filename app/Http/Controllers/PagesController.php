<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {
        return view('pages.home');
    }
    public function aboutPage()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function works()
    {
        return view('pages.works');
    }
    public function wolfPack()
    {
        return view('pages.wolf-pack');
    }
    public function contact()
    {
        return view('pages.contact');
    }



    public function brandIdentity()
    {
        return view('pages.services.brand-identity');
    }
    public function webDesignDevelopment()
    {
        return view('pages.services.web-design-development');
    }
    public function digitalMarketing()
    {
        return view('pages.services.digital-marketing');
    }
    public function aiDigitalPlatform()
    {
        return view('pages.services.ai-digital-platforms');
    }


     public function homelyfreshfoods()
    {
        return view('pages.works.homelyfreshfoods');
    }
}
