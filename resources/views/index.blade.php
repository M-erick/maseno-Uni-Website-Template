@extends('app')
@section('content')
    <div class="bg-gray-200 flex flex-wrap ">
        <div class="  w-2/3 mr-auto">


                <div>
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <title>Tailwind CSS Carousel</title>
                        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

                        <style>
                            .carousel-open:checked+.carousel-item {
                                position: static;
                                opacity: 100;
                            }

                            .carousel-item {
                                -webkit-transition: opacity 0.6s ease-out;
                                transition: opacity 0.6s ease-out;
                            }

                            #carousel-1:checked~.control-1,
                            #carousel-2:checked~.control-2,
                            #carousel-3:checked~.control-3 {
                                display: block;
                            }

                            .carousel-indicators {
                                list-style: none;
                                margin: 0;
                                padding: 0;
                                position: absolute;
                                bottom: 2%;
                                left: 0;
                                right: 0;
                                text-align: center;
                                z-index: 10;
                            }

                            #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
                            #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
                            #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
                                color: #2b6cb0;
                                /*Set to match the Tailwind colour you want the active one to be */
                            }

                        </style>

                    </head>

                    <body class="bg-white font-sans leading-normal tracking-normal ">


                        <div class="carousel relative shadow-2xl  mt-5" >
                            <div class="carousel-inner relative overflow-hidden w-full ">
                                <!--Slide 1-->
                                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                                    hidden="" checked="checked">
                                <div class="carousel-item absolute opacity-0 " style="height:50vh;">
                                    <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">Slide 1
                                    </div>
                                </div>
                                <label for="carousel-3"
                                    class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                                <label for="carousel-2"
                                    class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                                <!--Slide 2-->
                                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                                    hidden="">
                                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                                    <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">Slide 2
                                    </div>
                                </div>
                                <label for="carousel-1"
                                    class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                                <label for="carousel-3"
                                    class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                                <!--Slide 3-->
                                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                                    hidden="">
                                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                                    <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Slide 3
                                    </div>
                                </div>
                                <label for="carousel-2"
                                    class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                                <label for="carousel-1"
                                    class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                                <!-- Add additional indicators for each slide-->
                                <ol class="carousel-indicators">
                                    <li class="inline-block mr-3">
                                        <label for="carousel-1"
                                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-2"
                                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-3"
                                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                                    </li>
                                </ol>

                            </div>
                        </div>


                    </html>
                </div>
                <div>
                    <!-- unsolved placement-->

                    <div class=" pt-5 p-3 bg-white">
                        <span class="  border-b  border-gray-300  "><strong>KEEP SAFE</strong> Wear your mask
                            properly,Wash hands
                            with water & soap or Sanitize and Keep Social Distance</span>

                    </div>


                    <h3 class="ml-3 text-center underline text-green-300 font-semibold">NEWS</h3>

                    <div >
                        <!-- component -->
                        <section class="container px-6 py-4 mx-auto">
                            <div class="grid gap-2 mb-3 md:grid-cols-1 lg:grid-cols-2">
                                <!-- Card 1 -->
                                <div
                                    class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">

                                    <div id="body" class="flex flex-col ">
                                        <div class="flex mt-2">
                                            <img alt="mountain"
                                                class=" img-style "
                                                src="https://picsum.photos/seed/picsum/200" />
                                        </div>
                                        <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit</h4>
                                        <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <a href="" class="underline hover:text-green-300 text-center">Read more</a>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div
                                    class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">

                                    <div id="body" class="flex flex-col ">
                                        <div class="flex mt-2">
                                            <img alt="mountain"
                                                class=" img-style "
                                                src="https://picsum.photos/seed/picsum/200" />
                                        </div>
                                        <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit</h4>
                                        <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <a href="" class="underline hover:text-green-300 text-center">Read more</a>
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div
                                    class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">

                                    <div id="body" class="flex flex-col ">
                                        <div class="flex mt-2">

                                            <!-- include blog image-->

                                            <img alt="mountain"
                                                class=" img-style "
                                                src="https://picsum.photos/seed/picsum/200" />
                                        </div>
                                        <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit</h4>
                                        <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <a href="" class="underline hover:text-green-300 text-center">Read more</a>
                                    </div>
                                </div>
                                <!-- Card 4 -->
                                <div
                                    class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">

                                    <div id="body" class="flex flex-col ">
                                        <div class="mt-2">
                                            <img alt="mountain"
                                                class=" img-style "
                                                src="https://picsum.photos/seed/picsum/200" />
                                        </div>
                                        <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit</h4>
                                        <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                        <a href="" class="underline hover:text-green-300 text-center">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div>
                        <!--End of cards-->

                        <div>
                            <span><a href="" class="underline p-4  hover:text-green-300 text-center font-semibold ">Read More on
                                    Past News</a></span>

                        </div>

                    </div>

                    <div class="text-justify ">

                        <h3 class="border-t border-gray-400 p-2 font-semibold text-justify">QUICK LINKS</h3>
                        <div class=" grid grid-cols-3">
                            <div class="col-span-2 m-3">

                                <div
                                    class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 text-gray-600">

                                    <div id="body" class="flex flex-col ">
                                        <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit
                                        </h4>

                                        <div>
                                            <!--Align the div's in grid form -->
                                            <h3 class="font-semibold text-green-200">PROJECTS</h3>
                                            <a href="">SPADE</a>
                                            <a href="">climate smart fish culture systems</a>
                                            <a href="">creating postgraduate collaborations</a>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-green-200">RESOURCES</h3>
                                            <a href="">institutional repository</a>
                                            <a href="">programmes</a>
                                            <a href="">maseno on virtual</a>

                                            <a href="">university journals</a>
                                            <a href="">quality assurance directorate</a>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-green-200">students</h3>
                                            <a href="">graduation</a>
                                            <a href=""></a>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-green-200">staff</h3>
                                            <a href="">staff portal</a>
                                        </div>


                                    </div>


                                </div>
                            </div>




                            <div class="col-span-1">
                                <!--Insert image here-->
                                <img src="" alt="">
                                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laborum
                                    accusantium. Id, molestiae voluptate in, quia aspernatur
                                    repellendus mollitia incidunt quod suscipit quisquam ab porro deserunt qui tenetur,
                                    voluptatibus repellat!</p>

                            </div>
                        </div>

                    </div>



                </div>

        </div>
        <!--Right side -->
        <div class=" w-1/3">
            <div class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800  m-4">

                <div id="body" class="flex flex-col ">
                   <h4  class="text-xl font-semibold mb-2  border-b border-gray-200">Notice Board
                    </h4>


                    <div class="flex mt-5">
                        <span>Student notice on Attending lectures,Signing of nominal rolls and fee payment</span>

                    </div>
                    <div class="flex  flex-col mt-5 border-t border-gray-200 text-xl  mb-2 text-green-400 underline text-justify">
                        <a href="" >  <span class="">Student teaching timetable
                        </span>
                       </a>
                        <a href=""><span class="">year 1 ,2,3,4</span></a>
                    </div>
                    <div class="flex  flex-col mt-5 border-t border-gray-200 mb-2 text-green-400 underline text-justify">
                          <span >Approved Semester</span>

                        <span>2020/2021</span>
                    </div>
                    <div class="flex  flex-col mt-5 border-t border-gray-200 mb-2 text-green-400 underline text-justify">
                        <span >Approved Semester</span>

                      <span>2020/2021</span>
                  </div>
                    <div class="flex  flex-col mt-5 border-t border-gray-200">
                        <a href="" >  <h4  class="text-xl font-semibold mb-2 hover:text-green-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </h4>
                       </a>
                        <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam,
                            optio quas placeat est blanditiis, totam incidunt facere accusantium tempore dolore,
                            sunt cum rerum. Molestiae obcaecati dolores iusto molestias nulla quia!</p>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center  mt-3 p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 m-4">
                <div id="body" class="flex flex-col ">
                    <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </h4>
                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="flex mt-5">
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam,
                            optio quas placeat est blanditiis, totam incidunt facere accusantium tempore dolore, sunt cum
                            rerum. Molestiae obcaecati dolores iusto molestias nulla quia!</span>

                    </div>
                </div>
            </div>
            <div
                class="flex items-center  mt-3 p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 m-4">
                <div id="body" class="flex flex-col">
                    <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </h4>
                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="flex mt-5">
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam,
                            optio quas placeat est blanditiis, totam incidunt facere accusantium tempore dolore, sunt cum
                            rerum. Molestiae obcaecati dolores iusto molestias nulla quia!</span>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
