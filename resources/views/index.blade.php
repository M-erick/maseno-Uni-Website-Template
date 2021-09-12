@extends('app')

@prepend('ccs-styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endprepend
@section('content')
    <div class="
     flex flex-wrap ">
        <div class="  w-2/3 ">

           <x-slides/>


            <div>
                <!-- unsolved placement-->

                <div class=" pt-5 p-3 bg-white border">
                    <span class="  md:border-b  md:border-gray-300  "><strong>KEEP SAFE</strong> Wear your mask
                        properly,Wash hands
                        with water & soap or Sanitize and Keep Social Distance</span>

                </div>


                <h3 class="ml-3 text-center underline text-green-300 font-semibold py-2">NEWS</h3>

                <div>
                    <!-- component -->
                    <section class="container px-5 py-3 mx-auto">
                        <div class="grid gap-2 mb-3 md:grid-cols-1 lg:grid-cols-2">
                            <!-- Card 1 -->
                            <div class="card dark:bg-gray-800">

                                <div id="body" class="flex flex-col ">
                                    <div class="flex mt-2">
                                        <img alt="mountain" class=" img-style  "
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
                            <div class="card dark:bg-gray-800">

                                <div id="body" class="flex flex-col ">
                                    <div class="flex mt-2">
                                        <img alt="mountain" class=" img-style "
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
                            <div class="card dark:bg-gray-800">
                                <!--Darkmode activation-->

                                <div id="body" class="flex flex-col ">
                                    <div class="flex mt-2">

                                        <!-- include blog image-->

                                        <img alt="mountain" class=" img-style "
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
                            <div class="card dark:bg-gray-800">
                                <!--Darkmode activation-->

                                <div id="body" class="flex flex-col ">
                                    <div class="mt-2">
                                        <img alt="mountain" class=" img-style "
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
                    <div class=" mb-2">
                        <span><a href="" class="underline p-4  hover:text-green-300  font-semibold ">Read More on
                                Past News</a></span>

                    </div>
                </div>
                <div class="text-justify ">

                    <h3 class=" border-gray-300 p-2 font-semibold text-justify">QUICK LINKS</h3>
                    <div class=" grid grid-cols-3">
                        <div class="col-span-2 m-3">

                            <div
                                class=" p-2 bg-white border-2 border-gray-200 rounded-md shadow-sm dark:bg-gray-800 text-gray-600">

                                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit
                                </h4>
                                <div id="body" class=" grid grid-cols-2 gap-2">


                                    <div>
                                        <!--Align the div's in grid form -->
                                        <h3 class="font-semibold text-green-200">PROJECTS</h3>
                                        <a href="">SPADE</a><br>
                                        <a href="">climate smart fish </a><br>
                                        <a href="">creating postgraduate </a><br>
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
                            <figure>
                                <div class=" p-2 border m-2 border-gray-400   w-full  h-32 ">
                                    <img src="#" alt="maseno gate " class=" overflow-hidden">
                                </div>
                            </figure>

                        </div>
                    </div>

                </div>



            </div>

        </div>
        <!--Right side -->
        <div class=" w-1/3">
            <div
                class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800  m-4 ">

                <div id="body" class="flex flex-col ">
                    <h4 class="text-xl font-semibold mb-2  border-b border-gray-200">Notice Board
                    </h4>


                    <div class="flex mt-5">
                        <span>Student notice on Attending lectures,Signing of nominal rolls and fee payment</span>

                    </div>
                    <div
                        class="flex  flex-col mt-5 border-t border-gray-200 text-xl  mb-2 text-green-400 underline text-justify">
                        <a href=""> <span class="___class_+?80___">Student teaching timetable
                            </span>
                        </a>
                        <a href=""><span class="___class_+?81___">year 1 ,2,3,4</span></a>
                    </div>
                    <div class="flex  flex-col mt-5 border-t border-gray-200 mb-2 text-green-400 underline text-justify">
                        <span>Approved Semester</span>

                        <span>2020/2021</span>
                    </div>
                    <div class="flex  flex-col mt-5 border-t border-gray-200 mb-2 text-green-400 underline text-justify">
                        <span>Approved Semester</span>

                        <span>2020/2021</span>
                    </div>
                    <div class="flex  flex-col mt-5 border-t border-gray-200">
                        <a href="">
                            <h4 class="text-xl font-semibold mb-2 hover:text-green-400">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit
                            </h4>
                        </a>
                        <p class="___class_+?86___">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam,
                            optio quas placeat est blanditiis, totam incidunt facere accusantium tempore dolore,
                            sunt cum rerum. Molestiae obcaecati dolores iusto molestias nulla quia!</p>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center  mt-3 p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 m-4 ">
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

        </div>

    </div>


@endsection
