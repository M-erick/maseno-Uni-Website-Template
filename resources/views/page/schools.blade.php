@extends('app')

@section('content')
    <div class="container ">



        <div class=" w-auto m-auto  grid grid-cols-4 gap-2 bg-gray-100">
            <div class="col-span-1  p-2 pt-3">


                <div class="shadow-2xl border  bg-gray-200 border-gray-400">
                    <h3 class="text-justify text-lg   p-2  ">Calendar Event submission Form</h3>

                    {{-- <h3 class="text-justify   p-2 text-xl border-b  border-gray-500 ">Submit Form</h3> --}}

                    <figure>
                        <div class=" p-2 border m-2 ">
                            <img src="#" alt="maseno gate " class="w-full h-32   overflow-hidden">
                        </div>
                    </figure>


                    <hr class="m-2 border-white p-2">



                    <x-contacts />


                </div>

            </div>
            <div class="col-span-2  bg-white md:mr-5 md:my-2  pt-3 p-2">
                <div class="bg-gray-200 text-gray-700 mt-2 ml-2 mr-2">
                    <span><strong>You are here:</strong>School of Computing and Informatics</span>

                </div  >

                    <div class="flex  justify-start  border mt-3 ml-2 mr-2  bg-yellow-700 ">
                        <span class="bg-green-500 ">Vision and mission</span>
                        <span class="bg-gray-900 text-white">Quality Policy Statement</span>

                        <span class="bg-gray-900 text-white">Objectives</span>
                        <span class="bg-gray-900 text-white">Core Values</span>
                    </div>
                    <div  class="border   p-2 mx-2 border-gray-300">
                        <h2 class="p-2 text-xl text-green-500 text-justify mt-2 font-bold">School Of Computing and
                            Informatics</h2>
                        <figure>
                            <div class=" p-2 border m-2 ">
                                <img src="#" alt="maseno gate " class="w-full h-32   overflow-hidden">
                            </div>
                        </figure>
                        <p class="p-2  leading-relaxed">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                             Sunt nihil, doloremque neque eaque illo ea sapiente soluta quod consequatur amet officiis est impedit expedita.
                             Provident temporibus quasi laudantium dolorum mollitia.
                        </p>
                        <p class="p-2  leading-relaxed">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                             Sunt nihil, doloremque neque eaque illo ea sapiente soluta quod consequatur amet officiis est impedit expedita.
                             Provident temporibus quasi laudantium dolorum mollitia.
                        </p>
                        <p class="p-2  leading-relaxed">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                             Sunt nihil, doloremque neque eaque illo ea sapiente soluta quod consequatur amet officiis est impedit expedita.
                             Provident temporibus quasi laudantium dolorum mollitia.
                        </p>
                    </div>



            </div>
            <div class="col-span-1  p-2 pt-3">



                <div class=" mb-3 shadow-2xl border border-gray-400">
                    <h2 class="text-justify font-semibold bg-gray-200 p-2 text-xl border-b  border-gray-400">School Of Computing and Informatics Programmes
                    </h2>

                    <h2 class="link-style font-semibold text-base">
                        <a href="#" >Doctor of philosophy</a>
                    </h2>
                    <h2 class="link-style font-semibold text-base">
                        <a href="#">undergraduate programmes</a>
                    </h2>
                    <h2 class="link-style font-semibold text-base">
                        <a href="#">diploma programmes</a>
                    </h2>

                    <h2 class="link-style font-semibold text-base">
                        <a href="#">Certificate programmes</a>
                    </h2>



                </div>


            </div>

        </div>
    </div>
@endsection
