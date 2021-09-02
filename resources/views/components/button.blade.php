@prepend('ccs-styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endprepend
<div class="p-10">
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<div class="dropdown inline-block relative">
    <button class="bg-gray-300  text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
        <span class="mr-1"> Dropdown</span>
        <!--include an svg image with a dropdown arrow-->
        <svg class="h-4 w-4"></svg>



    </button>
    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">

        <li><a href="#" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-nowrap ">One</a>
            <li><a href="#" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-nowrap ">Two</a></li>
            <li><a href=""class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-nowrap ">Three is the magic number</a></li>

        </li>
    </ul>

</div>
</div>

