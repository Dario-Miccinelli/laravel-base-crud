@extends('layouts.app')

@section('page-title', "COMICS - Page")


@section('components.currseries')
<a href="/"><button class="btn-blue btn-position bigger">CURRENT SERIES</button></a>


@endsection


@section('mainpage-main')
<div id="main">
<section class="main-series">
@foreach ($comics as $elem)
<div>

    <img src="{{$elem['thumb']}}">
    <p>{{$elem['series']}}</p>

</div>
@endforeach
</section>

</div>

<div class=" blue3">


    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" class="p-2">

</div>


@endsection

