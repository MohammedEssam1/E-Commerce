<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" type="">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Fashion Shop</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }} ">
</head>

<body>


    <div class="relative z-10" role="dialog" aria-modal="true">
        <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->

        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">

            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                <div
                    class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                    <div
                        class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <button onclick="window.location.href = '/';" type="button"
                            class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                            <div
                                class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                                <img src="{{ asset("images/products/$product->image") }}"
                                    alt="Two each of gray, white, and black shirts arranged on table."
                                    class="object-cover object-center">
                            </div>
                            <div class="sm:col-span-8 lg:col-span-7">
                                <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{ $product->name }}</h2>

                                <section aria-labelledby="information-heading" class="mt-2">
                                    <h3 id="information-heading" class="sr-only">Product information</h3>

                                    <p class="text-2xl text-gray-900">${{ $product->price }}</p>

                                    <!-- Reviews -->
                                    <div class="mt-2">
                                        <h4 class="sr-only">Reviews</h4>
                                        <div class="flex items-center">
                                            <div class="flex items-center">
                                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <p class="sr-only">3.9 out of 5 stars</p>
                                            <a href="#"
                                                class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                                reviews</a>
                                        </div>
                                    </div>
                                </section>

                                <section aria-labelledby="information-heading" class="mt-4">
                                    <p class="text-lg font-semibold text-gray-900">Description</p>
                                    <p class=" text-gray-600">{{ $product->description }}</p>
                                </section>

                                <section aria-labelledby="options-heading" class="mt-4">
                                    <h3 id="options-heading" class="sr-only">Product options</h3>

                                    <form action="{{ route('cart.store', $product->id) }}" method="POST">
                                        @csrf
                                        <div class="">
                                            <h4 class="mb-2 text-sm font-medium text-gray-900">Quantity</h4>
                                            <input type="number" name="quantity"
                                                class="block w-2/12 rounded-md border-0 py-1.5 pl-3 pr-2 text-gray-900 ring-1  ring-inset ring-gray-300 focus:ring-2 placeholder:text-gray-400  focus:ring-inset focus:ring-black sm:text-sm sm:leading-6"
                                                value="1">
                                        </div>
                                        <button type="submit"
                                            class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                                            to Cart</button>
                                    </form>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger mt-3" role="alert">
                                               {{$error}}
                                            </div>
                                        @endforeach
                                    @endif
                                    @if (session()->has('message'))
                                        <div class="py-2 mt-3 alert alert-success alert-dismissible fade show"
                                            role="alert">
                                            {{ session('message') }}
                                            <button type="button" class="btn-close" data-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQery -->
    <script src="user/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="user/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="user/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="user/js/custom.js"></script>
</body>

</html>
