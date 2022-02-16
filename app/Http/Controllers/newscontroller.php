<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;

class newscontroller extends Controller
{
  public function newsletter(){
      return view('newsletter');
  }
  public function news(){
    request()-> validate([
      'email'=> 'required|max:255',
    ]);
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us20'
    ]);
    
      $response = $mailchimp->lists->addListMember("102c5ffa95", [
        "email_address" => request('email'),
        "status" => "subscribed",
    ]);  
    return redirect('/')->with('success','you are now sign up for our newsletter');
  }
  
}
