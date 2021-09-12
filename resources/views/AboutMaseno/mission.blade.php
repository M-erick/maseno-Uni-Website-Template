@extends('app')
@section('content')
    <div class="m-auto bg-gray-100 container">
        <div class="grid grid-cols-3">
            <div class="col-span-1    md:p-2">
                <x-contacts />

            </div>

            <div class="col-span-2 bg-white md:m-2 ">

                <div class="bg-gray-200 text-gray-700 mt-2 ml-2 mr-2">
                    <span class="text-center
                    "><strong>You are here:</strong>General Information</span>

                </div>

                <div class="flex  justify-start  border mt-3 ml-2 mr-2  bg-yellow-700">
                    <span class="bg-green-500 ">Vision and mission</span>
                    <span class="bg-gray-900 text-white">Quality Policy Statement</span>

                    <span class="bg-gray-900 text-white">Objectives</span>
                    <span class="bg-gray-900 text-white">Core Values</span>
                </div>

                <div class=" flex  mt-0  border ml-2 mr-2">
                    <div class="w-2/3 mr-auto">

                        <img src="#" alt="maseno">
                    </div>


                    <div class=" w-1/3 ">
                        <h4 class="text-green-500 mt-5">Vision</h4>
                        <p class="flex-row text-justify p-2 mr-2">The University of Excellence in discovery and
                            dissemination
                            of knowledge
                        </p>
                        <h4 class="text-green-500">Mission</h4>
                        <p class="flex-row text-justify p-2 mr-2">The University of Excellence in discovery and
                            dissemination
                            of knowledge
                        </p>

                    </div>


                </div>


            </div>
        </div>

    </div>
@endsection
