<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class NewsletterController extends Controller
{
    public function index()
    {
        return view("loggedin.subscribe");
    }

    public function store(Request $request)
    {
        $request->validate([
            "email" => 'required|email|unique:subscribers,email'
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        return redirect(url("/loggedin/dashboard"))->with('success',"You have successfully subscribed to Financial Advice!");
    }
}
