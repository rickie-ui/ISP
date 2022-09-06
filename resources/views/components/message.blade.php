@if(session()->has('message'))

    <div x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show" class="position-fixed top-0  bg-info  text-white px-10 py-2 w-40" style="z-index: 10000000;left:30%;">
    <p class="text-center">
        {{session('message')}}
    </p>
</div>
@endif