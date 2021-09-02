<div>
    <!-- include image below-->
    <div>
        <img src="https://picsum.photos/seed/picsum/200" alt="Maseno image"
            class=" w-full h-10   object-cover mx-auto    bg-center bg-no-repeat bg-cover bg-fixed">
    </div>
    <div>

        <!--background color to be mediumseagreen-->
        <nav class="bg-green-500 shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex  justify-between items-center space-x-7">
                    <!--Website Logo Maseno Logo -->
                    <div>
                        <a href="" class="flex items-center py-4 px-2">
                            <img src="#" alt="Logo" class="h-8 w-8 mr-2">

                        </a>
                    </div>
                  

                    <div class="px-4 cursor-pointer md:hidden" id="burger">
                        <a href="">Menu</a>
                        {{-- <svg class="w-6">
                                <!--Place svg menu tag-->
                            </svg> --}}

                    </div>

                    <div class="  text-sm mt-6 hidden md:block " id="menu">

                        <!-- add routes components-->
                        <x-routes />
                    </div>
                </div>

            </div>
        </nav>

    </div>
    <script>
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        burger.addEventListener('click', () => {
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');

            } else {
                menu.classList.add('hidden');
            }
        })
    </script>
