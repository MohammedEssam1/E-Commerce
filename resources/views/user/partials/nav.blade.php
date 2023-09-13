 <nav class="navbar navbar-expand-lg custom_nav-container ">
     <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class=""> </span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav">
             <li class="nav-item active">
                 <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#product">Products</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="blog_list.html">Blog</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="contact.html">Contact</a>
             </li>
             @auth
                 {{-- <li class="nav-item">
                     <a class="nav-link" href="{{ url('/redirect') }}">Dashboard</a>
                 </li> --}}
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                         aria-haspopup="true" aria-expanded="true"> <span class="nav-label">{{ Auth::user()->name }} <span
                                 class="caret"></span></a>
                     <ul class="dropdown-menu">
                         <li><a href="{{route('profile.edit')}}">Profile</a></li>
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
                             <li><a href="route('logout')"
                                     onclick="event.preventDefault();
                                    this.closest('form').submit();">Log Out</a>
                             </li>
                         </form>

                     </ul>
                 </li>
             @else
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">Register</a>
                 </li>
             @endauth
             <li class="nav-item">
                 <a class="nav-link" href="#">
                     <i class="fa-solid fa-cart-shopping"></i>
                 </a>
             </li>
             <form class="form-inline">
                 <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                     <i class="fa fa-search" aria-hidden="true"></i>
                 </button>
             </form>
         </ul>
     </div>
 </nav>
 </div>
 </header>
 <!-- end header section -->
