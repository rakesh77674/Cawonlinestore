@extends('layouts.master')
@section('content')
<section id = "Newsletter">
 <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="{{url('/newsletter')}}" method="post">
                        @csrf
                        <div class="row">
    
                          <div class="col-lg-5">
                            <fieldset>
                            <label for = "email" style = "font-style: oblique;font-weight: 700;">Enter you Email: </label>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="" style = "padding: 4px;border-radius: 7px;width: 105%;">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                       
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button" style = "margin-top: 34px;"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                        
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection

