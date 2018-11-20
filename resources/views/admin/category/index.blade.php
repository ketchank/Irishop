@extends('layouts.appadmin')
@section('content')

<h2 class="ad-titre"> <i>Liste des Catégories Enregistrées.</i> </h2>
@if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{!! session('flash_message_error') !!}</strong>
    </div>
@endif
@if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{!! session('flash_message_success') !!}</strong>
    </div>
@endif
<div class="container-fluid">
    <table id="cat_table" class=" table-hover row-border">
    <thead>
        <tr>
            <th width="10px">Category ID</th>
            <th width="10px">Category Name</th>
            <th width="10px">Category Level</th>
            <th>Category Description</th>
            <th>Category Url</th>
            <th>Actions</th>
           
        </tr>
    </thead>
    <tbody>

        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->url}}</td>
            <td>
                <a href="{{ url('/cat-edit'.$category->id)}}" class="btn btn-primary btn-sm">Modifier</a>            
                <a id="delCat" href="{{ url('/cat-delete'.$category->id)}}" class="btn btn-danger btn-sm">Supprimer</a>            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection