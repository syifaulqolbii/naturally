@if(session()->has('message'))
    <div x-data="{show : true}" x-init="setTimeout(() => show = false, 2500)" x-show="show" class="fixed top-0 transform -translate-x-1/2 left-1/2 bg-green-500 text-white px-48 py-3 rounded-lg">
        {{ session()->get('message') }}
    </div>
@endif
