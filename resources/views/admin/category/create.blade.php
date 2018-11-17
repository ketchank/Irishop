@extends('layouts.appadmin')
@section('content')

<h2 class="ad-titre"> <i>Création de catégories</i> </h2>

<div class="container">
<div class="col-md-8">
<form class="form-horizontal" method="POST" action="{{url('/cat-create')}}" name="" id="" novalidate="novalidate" >
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="">
  </div>
  <div class="form-group">
    <label for="name">Category Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="">
  </div>
  <div class="form-group">
    <label for="name">Category url</label>
    <input type="text" class="form-control" id="url" name="url" placeholder="">
  </div>
  
  <button type="submit" class="btn button button4">Ajouter Catégorie</button>
</form>
</div>
</div>






@endsection