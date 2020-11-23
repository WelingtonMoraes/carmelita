        
@include('layout.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

<div class="welcome">
    <img class="oval_g" src="{{ URL::asset('/img/Oval.svg') }}">
    <img class="oval_p" src="{{ URL::asset('/img/Oval2.svg') }}">
</div>

@include('layout.footer')