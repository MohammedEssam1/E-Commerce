

 <nav class="w-11/12 mx-auto flex items-center justify-between p-6 lg:px-8" aria-label="Global">
     <div class="flex lg:flex-1">
         <a href="#" class="-m-1.5 p-1.5">
             <span class="sr-only">Your Company</span>
             <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                 alt="">
         </a>
     </div>
     <div class="flex lg:hidden">
         <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
             <span class="sr-only">Open main menu</span>
             <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                 aria-hidden="true">
                 <path stroke-linecap="round" stroke-linejoin="round"
                     d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
             </svg>
         </button>
     </div>
     <div class="hidden lg:flex lg:gap-x-12">
         <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
         <a href="#products" class="text-sm font-semibold leading-6 text-gray-900">Products</a>
         <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
         <a href="#subscribe" class="text-sm font-semibold leading-6 text-gray-900">subscribe</a>
     </div>
     <div class="hidden lg:flex lg:flex-1 lg:justify-end">
         <a class="me-8 pt-2" href="{{route('cart.index')}}">
             <i class="fa-solid fa-cart-shopping"></i>
         </a>
             @auth
             <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="profileDropdown">
                        <a href="{{route('profile.edit')}}" class="dropdown-item preview-item">
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Profile</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>

                     <form method="POST" action="{{ route('logout') }}">
                     @csrf
                        <a  href="{{route('logout')}}" onclick="event.preventDefault();
                                this.closest('form').submit();" class="dropdown-item preview-item">
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Log out</p>
                            </div>
                        </a>
                    </form>
                    </div>
                </li>
            </ul>
             @else
         <a  href="{{ route('login') }}" class="pt-2 text-lg font-semibold leading-6 text-gray-900">Log in <span
                 aria-hidden="true">&rarr;</span></a>
             @endauth
     </div>
 </nav>
