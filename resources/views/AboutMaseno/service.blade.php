@extends('app')

@section('content')
   <div class="grid grid-cols-3 gap-3 bg-gray-100">
       <div class="col-span-1 border border-gray-500 rounded-xl p-2 m-4">
        <h4 class="border-b border-gray-200 text-center ">Contacts </h4>
        <div class="text-center">
        <span > Director, Public Relations</span><br>
        <span >Maseno University</span><br>
        <span >Private Bag</span><br>
        <span >Maseno, Kenya</span><br>
        <span >Tel: 057 351040</span><br>
        <span >Fax: +254 - 57 - 351221</span><br>
        <a href="" >E-mail: directorpr@maseno.ac.ke</a><br>
    </div>


       </div>
       <div class="col-span-2 border border-gray-500  p-2 m-4">
           <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio beatae culpa aspernatur tempora facilis
                consequuntur enim sit eveniet veritatis, exercitationem fugit alias aliquam repellendus mollitia error dolorem quasi, nostrum molestiae.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia totam placeat excepturi
            atque incidunt fugiat obcaecati saepe a harum modi quo ipsa ea optio velit iure, ratione ad enim at!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ratione corporis quaerat at veritatis deleniti
        odit beatae dolor asperiores explicabo in totam vitae sunt rem porro incidunt impedit similique soluta.</span>
        <div>
           <x-table/>
        </div>

       </div>
   </div>
@endsection
