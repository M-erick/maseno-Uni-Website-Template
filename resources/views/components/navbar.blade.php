<!--unfinished Navbar-->
<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
      <!-- include image below-->
      <div>
        <img src="https://picsum.photos/seed/picsum/200" alt="Maseno image"
            class=" w-full h-10   object-cover mx-auto    bg-center bg-no-repeat bg-cover bg-fixed">
    </div>
    <!-- Include nav bar here-->
    <div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <nav class="bg-green-500 shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex space-x-7">
                    <!--Website Logo-->
                    <div>
                        <a href="" class="flex items-center py-4 px-2">
                            <img src="#" alt="Logo" class="h-8 w-8 mr-2">
                            <span class="font-semibold text-gray-500 text-lg">Navigation</span>
                        </a>
                    </div>
                    <!--NAVBAR color not decided yet
             -->
                    <div class="flex-1 items-center justify-center sm:items-stretch sm:justify-start hidden md:block md:p-2">

                        <!-- add routes components-->
                        <x-routes />
                    </div>
                    <!-- Mobile menu button download image from heroin-->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class="w-6 h-6 text-gray-500" x-show="!showMenu" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" stroke="currentColor">
                                >
                                <path d="M4 h16M4 12h16M4 18h16"></path>

                            </svg>
                        </button>

                    </div>


                </div>

            </div>
            <!--mobile menu-->
            <div class="hidden mobile-menu">
                <ul class="">
                    <li class="active"> <a href="" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
                    <li><a href="#service" class="block text-smpx-2 py-4 hover:bg-green-500 transition duration-300">Service</a></li>
                    <li><a href="#about" class="block text-smpx-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
                    <li><a href="#contact" class="block text-smpx-2 py-4 hover:bg-green-500 transition duration-300">Contacts</a></li>
                </ul>

            </div>


        </nav>

</div>
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");
    btn.addEventListener("click",()=>{
        menu.classList.toggle("hidden");
    });
</script>
