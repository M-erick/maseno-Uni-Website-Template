<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body >

    <!-- include image below-->
    <div>
        <img src="https://picsum.photos/seed/picsum/200" alt="Maseno image"
        class=" w-full h-20   object-cover mx-auto    bg-center bg-no-repeat bg-cover bg-fixed">
    </div>
    <!-- Include nav bar here-->
        <div>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <nav class="bg-green-600"> <!--NAVBAR color not decided yet
             -->
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between h-16">
                        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                            <!-- Mobile menu button-->
                            <button type="button"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <!-- style the responsiveness of the nabar(added hidden and md:block)-->
                        <div class="flex-1 items-center justify-center sm:items-stretch sm:justify-start hidden md:block">

                           <!-- add routes components-->
                          <x-routes/>
                        </div>

                        <!-- Mobile menu, show/hide based on menu state. -->
                        <div class="sm:hidden" id="mobile-menu">
                            <div class="px-2 pt-2 pb-3 space-y-1">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#"
                                    class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                                    aria-current="page">Dashboard</a>

                                <a href="#"
                                    class="nav-btn">Team</a>

                                <a href="#"
                                    class="nav-btn">Projects</a>

                                <a href="#"
                                    class="nav-btn">Calendar</a>
                            </div>
                        </div>
            </nav>

        </div>
    </div>

        @yield('content')
    </div>



    <div>
        @include('layout.footer')
    </div>
    </div>

</body>

</html>
