@extends('layouts.app')

@section('page-title', "DC-COMICS Home")


@section('components.currseries')
<a href="/comics">
    <button class="btn-blue btn-position bigger">LOAD CURRENT SERIES</button>
</a>


@endsection


@section('mainpage-main')
<div id="main" class="w-100">
<section class="main-series m-auto w-100">



</section>
<div class="button">



</div>
</div>

<div class=" blue3">


    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" class="p-2">

</div>


@endsection
