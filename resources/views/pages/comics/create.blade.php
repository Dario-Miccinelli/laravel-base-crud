@extends('layouts.app')

@section('page-title', "Create Comics")



@section('mainpage-main')
<section class="bg-dark">

<form method="POST" action="{{route('comics.store')}}" class="bg-dark text-white text-center pt-5 pb-5 w-50 m-auto">


    @csrf


    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label ">Description</label>
        <textarea  name="description" id="" class="form-control"></textarea>
      </div>

      <div class="mb-3">
        <label  class="form-label">Img</label>
        <input name="thumb" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Price</label>
        <input name="price" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Series</label>
        <input name="series" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Type</label>
        <input name="type" type="text" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label  class="form-label">Sale date</label>
        <input name="sale_date" type="text" class="form-control" id="title">
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</section>
@endsection

