@extends('app')

@section('content')
    <div class="container ">



        <div class=" w-auto m-auto  grid grid-cols-3 gap-3 bg-gray-100">
            <div class="col-span-1  p-2 pt-3">
                <div class="mb-3">

                    <x-contacts />

                </div>
                <x-application-form />

            </div>
            <div class="col-span-2  bg-white md:mr-5 md:my-2  pt-3 p-2">
                <div class="bg-gray-200 text-gray-700 mt-2 ml-2 mr-2">
                    <span><strong>You are here:</strong>Admission</span>

                </div>
                <div class="m-auto">
                    <h3 class="text-green-500 mt-6 p-2 underline">Application procedure</h3>
                    <ol class="p-2 leading-relaxed" type="1">
                        <li>Download & print Application Form OR</li>
                        <li>OBTAIN application form from the office of the reqister,Academic affairs</li>
                        <li class="text-green-500 uppercase"> apply online coming soon</li>
                    </ol>

                </div>
                <hr>
                <div >
                    <span class="  p-2 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio
                        beatae
                        culpa aspernatur tempora facilis
                        consequuntur enim sit eveniet veritatis, exercitationem fugit alias aliquam repellendus mollitia
                        error
                        dolorem quasi, nostrum molestiae.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia totam placeat excepturi
                        atque incidunt fugiat obcaecati saepe a harum modi quo ipsa ea optio velit iure, ratione ad enim at!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ratione corporis quaerat at veritatis
                        deleniti
                        odit beatae dolor asperiores explicabo in totam vitae sunt rem porro incidunt impedit similique
                        soluta.</span>
                </div>

            </div>
        </div>
    </div>
@endsection
