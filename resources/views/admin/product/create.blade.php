@extends('layouts.appadmin')
@section('content')

<h2 class="ad-titre"> <i>Création des Produits</i> </h2>

@if(Session::has('flash_message_error'))
    <div class="alert alert-danger fade show alert-dismissible" role="alert" id="myAlert" >
     <strong>{!! session('flash_message_error') !!}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
       
    </div>
@endif
@if(Session::has('flash_message_success'))
    <div class="alert alert-success fade show alert-dismissible" role="alert" >
    <strong>{!! session('flash_message_success') !!}</strong>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        
    </div>
@endif

<div class="container">
    <div class="col-md-8">
        <form class="form-horizontal" method="post" enctype = "multipart/form-data" action="{{ url ('/product-add') }}" name="add_product" id="add_product"
            novalidate="novalidate">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Sous la Catégorie</label>
               <select class="form-control" name="category_id" id="category_id">
                  <?php echo $categories_dropdown; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder=""  required>
            </div>

            <div class="form-group">
                <label for="name">Product Code</label>
                <input type="text" class="form-control" id="product_code" name="product_code" placeholder="">
            </div>

            <div class="form-group">
                <label for="name">Product Color</label>
                <input type="text" class="form-control" id="product_color" name="product_color" placeholder="">
            </div>
            
            
            <div class="form-group">
                <label for="name">Product Description</label>
                <textarea class="form-control" rows="8" id="comment" id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="name">Prix</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" placeholder="">
            </div>
            

            <button type="submit" class="btn button button4">Ajouter Produit</button>
        </form>
    </div>
</div>


@endsection