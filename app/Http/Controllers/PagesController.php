<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Notifications\ContactForm as NotificationsContactForm;
use App\Posts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function clients()
    {
        return view('pages.clients');
    }
    public function team()
    {






        $rss_url = 'https://medium.com/feed/coffee-driven-dev';
        $api_endpoint = 'https://api.rss2json.com/v1/api.json?rss_url=';
        $data = json_decode(file_get_contents($api_endpoint . urlencode($rss_url)), true);

        // if ($data['status'] == 'ok') {

        //     return $data['items'];
        // }


        return view('pages.team');
    }
    public function careers()
    {
        return view('pages.careers');
    }
    public function wolfPack()
    {
        return view('pages.wolf-pack');
    }
    public function contact()
    {
        return view('pages.contact');
        $name = "Name";
        $phoneno = "9876543210";
        $email = "praveen@nyxwolves.com";
        $company = "nyxwolves.com";
        $services = "Web Design";
        $budget = "Budget";
        $message = " Hiiiiiiiiiiiii ";
        $user = User::find(1);
        $user->notify(new NotificationsContactForm($name, $phoneno, $email, $company, $services, $budget, $message));
        return "success";
    }
    public function blog()
    {
        $posts = Posts::where('status', 'active')->orderBy('id', 'desc')->paginate(3);
        return view('pages.blog')->with('posts', $posts);
    }
    public function singleBlogPost($id)
    {
        if ($post = Posts::where('id', $id)->where('status', 'active')->first()) {
            return view('pages.blog-detail')->with('post', $post);
        } else {
            abort(404);
        }
    }

    public function Terms()
    {
        return view('pages.legal.terms');
    }
    public function Privacy()
    {
        return view('pages.legal.privacy');
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
    public function jootfoods()
    {
        return view('pages.works.jootfoods');
    }
    public function northbay()
    {
        return view('pages.works.northbay');
    }
    public function varavasthu()
    {
        return view('pages.works.varavasthu');
    }
    public function westernvalley()
    {
        return view('pages.works.westernvalley');
    }
    public function bozmie()
    {
        return view('pages.works.bozmie');
    }
    public function tento()
    {
        return view('pages.works.tento');
    }
    public function pen()
    {
        return view('pages.works.pen');
    }
    public function chaturIdeas()
    {
        return view('pages.works.chaturIdeas');
    }
    public function banglorebasket()
    {
        return view('pages.works.banglorebasket');
    }



    public function contactForm(Request $request)
    {
        // return $request;
        $services = $request->services;
        $servicesmail = "";
        $servicecount = 1;
        foreach ($services as $service) {
            if ($servicecount == 1) {
                $servicesmail = $service;
                $servicecount++;
            } else {
                $servicesmail = $servicesmail . ' , ' . $service;
            }
        }
        $budgets = explode(",", $request->budget);
        $budgetstore = "";
        $count = 1;
        foreach ($budgets as $budget) {
            if ($count == 1) {
                $budgetstore = " $ " . $budget . " - ";
                $count++;
            } else {
                $budgetstore = $budgetstore . "" . " $ " . $budget;
            }
        }
        $name = $request->name;
        $phoneno = $request->phone;
        $email = $request->email;
        $company = $request->company;
        $services = $servicesmail;
        $budget = $request->budget;
        $message = $request->message;
        $user = User::find(1);
        $user->notify(new NotificationsContactForm($name, $phoneno, $email, $company, $services, $budgetstore, $message));
    }
}
