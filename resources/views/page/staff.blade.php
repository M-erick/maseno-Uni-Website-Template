@extends('app')

@section('content')
    <div class="container ">



        <div class=" w-auto m-auto  grid grid-cols-4 gap-2 bg-gray-100">
            <div class="col-span-1  p-2 pt-3">
                <div class="mb-3">

                    <div class="shadow-2xl border">
                        <h2 class="text-justify font-semibold bg-gray-200 p-2 text-xl border  border-gray-400">Staff
                            Information</h2>

                        <h2
                            class="uppercase p-2 text-justify  text-white text-sm  shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-400">
                            <a href="#">staff portal</a>
                        </h2>
                        <h2
                            class="uppercase p-2 text-justify  text-white  text-sm  shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-300">
                            <a href="#">Performance Appraisal tool</a>
                        </h2>
                        <h2
                            class="uppercase p-2 text-justify  text-white text-sm   shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-300">
                            <a href="#">values and principles Form</a>
                        </h2>

                        <h2
                            class="uppercase p-2 text-justify  text-white text-sm   shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-300">
                            <a href="#">Apply for leave</a>
                        </h2>

                        <h2
                            class="uppercase p-2 text-justify  text-white text-sm   shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-300">
                            <a href="#">Staff Mail</a>
                        </h2>
                        <h2
                            class="uppercase p-2 text-justify  text-white   text-sm shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-300">
                            <a href="#">Edit your profile</a>
                        </h2>
                        <h2
                            class="uppercase p-2 text-justify  text-white  text-sm  shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-400">
                            <a href="#">online application admin</a>
                        </h2>
                        <h2
                            class="uppercase p-2 text-justify  text-white  text-sm  shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-400">
                            <a href="#">qms website</a>
                        </h2>

                        <h2
                            class="uppercase p-2 text-justify  text-white  text-sm  shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-400">
                            <a href="#">icts help desk</a>
                        </h2>

                        <h2
                            class="uppercase p-2 text-justify  text-white  text-sm  shadow-inner bg-yellow-700 hover:bg-yellow-800   border border-gray-400">
                            <a href="#">ICT service request form</a>
                        </h2>


                        <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
                    </div>



                </div>

                <div class="shadow-2xl border  bg-gray-200 border-gray-400">
                    <h3 class="text-justify text-lg   p-2  ">Calendar Event submission Form</h3>

                    <hr class="border-gray-300">
                    {{-- <h3 class="text-justify   p-2 text-xl border-b  border-gray-500 ">Submit Form</h3> --}}
                    <p class="text-green-500 p-2 underline">Online Calendar of Events</p>



                    <hr class="m-2 border-white p-2">
                </div>

            </div>
            <div class="col-span-2  bg-white md:mr-5 md:my-2  pt-3 p-2">
                <div class="bg-gray-200 text-gray-700 mt-2 ml-2 mr-2">
                    <span><strong>You are here:</strong>Staff</span>

                </div>
                <div>
                    <h2 class="p-2 text-xl text-green-500 text-justify mt-2 font-bold">Welcome to Maseno University Staff
                        Page</h2>
                    <figure>
                        <div class=" p-2 border m-2 ">
                            <img src="#" alt="maseno gate " class="w-full h-32   overflow-hidden">
                        </div>
                    </figure>
                </div>


            </div>
            <div class="col-span-1  p-2 pt-3">


                <div class="shadow-xl border   border-gray-400">
                    <img src="#" alt="maseno gate " class="p-2 border ">


                    <span class="text-green-500  text-justify underline"> Notice to all Staff on rescheduling
                        of internal Quality Audit</span>

                    <hr class="m-2">
                    <div class="p-2">

                        {{-- style:list-style-type:square styling has an error --}}
                        <ul>
                            <li><a href=" #" class="text-green-500   p-2 underline">Maseno University Statutes</a>
                            </li>


                            <li> <a href="" class="text-green-500  p-2  underline">Maseno University Statutes</a>

                            </li>
                        </ul>
                    </div>
                    <img src="#" alt="maseno gate " class="w-full h-32   p-2 overflow-hidden">

                </div>



            </div>

        </div>
    </div>
@endsection
