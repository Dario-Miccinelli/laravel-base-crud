@extends('layouts.app')

@section('page-title', "COMICS - Page")


@section('components.currseries')
<a href="/"><button class="btn-blue btn-position bigger">CURRENT SERIES</button></a>


@endsection


@section('mainpage-main')
<div id="main">
<section class="main-series">
@foreach ($comics as $elem)
<div class="">

    <img src="{{$elem['thumb']}}">
    <p class="w-75 pt-2">{{$elem['title']}}</p>

    {{-- form delete --}}
    <div class="d-flex flex-wrap w-50">
    <form action="{{route('comics.destroy', $elem->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-dark  d-flex" type="submit">
        <i class="fa-solid fa-xmark"></i>
    </button>
    </form>

        <a href="{{route('comics.edit', $elem->id)}}">
            <i class="fa-solid fa-pen btn btn-dark"></i>
        </a>

    </div>

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

