@extends('layouts.appadmin')
@section('content')

<h2 class="ad-titre"> <i>Création de catégories</i> </h2>

<div class="container">
    <div class="col-md-8">
        <form class="form-horizontal" method="post" action="{{ url ('/cat-create') }}" name="add_category" id="add_category"
            novalidate="novalidate">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
            <div class="form-group">
                <label for="name">Category Levels</label>
               <select class="form-control" name="parent_id" id="">
                  <option value="0">Categorie Principale</option>
                  @foreach($levels as $val)
                      <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
                <label for="name">Category Description</label>

                <textarea class="form-control" rows="5" id="comment" id="description" name="description"></textarea>
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
