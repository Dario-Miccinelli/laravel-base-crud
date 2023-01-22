@extends('layouts.app')

@section('page-title', "Edit Comics")



@section('mainpage-main')
<section class="bg-dark">

<form method="POST" action="{{route('comics.update', $comic->id)}}" class="bg-dark text-white text-center pt-5 pb-5 w-50 m-auto">


    @csrf
    @method('PUT')


    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input value="{{$comic->title}}" name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label ">Description</label>
        <textarea  name="description" id="" class="form-control">
            {{$comic->description}}
        </textarea>
      </div>

      <div class="mb-3">
        <label  class="form-label">Img</label>
        <input  value="{{$comic->thumb}}" name="thumb" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Price</label>
        <input value="{{$comic->price}}" name="price" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Series</label>
        <input value="{{$comic->series}}" name="series" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Type</label>
        <input value="{{$comic->type}}" name="type" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Sale date</label>
        <input value="{{$comic->sale_date}}" name="sale_date" type="text" class="form-control" id="title">
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</section>
@endsection

