<html>
    <head>
    @include('css')
    <head>
    <body>
    <header class="header-area header-sticky">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <nav class="main-nav">
                           <!-- ***** Logo Start ***** -->
                           <a href="#" class="logo">
                               <img src="assets/images/logo.png" style = "height: 61px;">
                           </a>
                           <!-- ***** Logo End ***** -->
                           <!-- ***** Menu Start ***** -->
                           <ul class="nav">
                               <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                               <li class="submenu">
                                   <a href="javascript:;">Pages</a>
                                   <ul>
                                       <li><a href="{{url('about')}}">About Us</a></li>
                                       <li><a href="{{url('indexproducts')}}">Products</a></li>
                                       <li><a href="{{url('contactus')}}">Contact Us</a></li>
                                   </ul>
                               </li>
                               <li class="submenu">
                                <a href="javascript:;">Category</a>
                                <ul>
                                    <li><a href="#men">Games</a></li>
                                    <li><a href="#women">Cd</a></li>
                                    <li><a href="#kids">Books</a></li>
                                </ul>
                            </li>
                               
                               <li>
                               
                                @if (Route::has('login'))
                               <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                   @auth
                                   <li>
                                       <x-app-layout>
       
                                        </x-app-layout>
                                        </li>
                                   @else
                                      <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
   
                                       @if (Route::has('register'))
                                         <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                       @endif
                                   @endauth
                                   </div>
                               @endif
                               </li>
                    
                                   </ul>        
                           
                           <!-- ***** Menu End ***** -->
                       </nav>
                       <div class = "container">
                       @yield('content')
                       </div>
                   </div>
               </div>
           </div>
       </header>
       </body>
       </html>