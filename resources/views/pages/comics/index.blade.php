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

    {{-- form delete --}}
    <form action="{{route('comics.destroy', $elem->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-dark w-50" type="submit">
        <i class="fa-solid fa-xmark"></i>
    </button>


    </form>

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

