@extends('app')

@section('content')

    <div class=" w-auto m-auto grid grid-cols-3 gap-3 bg-gray-100">
        <div class="col-span-1  p-2 pt-3">

           <x-contacts/>

        </div>
        <div class="col-span-2  bg-white md:mr-5 md:my-2  pt-3 p-2">
            <span class="p-2 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio beatae culpa aspernatur tempora facilis
                consequuntur enim sit eveniet veritatis, exercitationem fugit alias aliquam repellendus mollitia error
                dolorem quasi, nostrum molestiae.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia totam placeat excepturi
                atque incidunt fugiat obcaecati saepe a harum modi quo ipsa ea optio velit iure, ratione ad enim at!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ratione corporis quaerat at veritatis
                deleniti
                odit beatae dolor asperiores explicabo in totam vitae sunt rem porro incidunt impedit similique
                soluta.</span>
            <div>
                <x-table />
            </div>

        </div>
    </div>

@endsection
