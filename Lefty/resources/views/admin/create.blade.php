@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-7">

<h1> Entrer le nouveau produit</h1>

<form action="/products" method="POST" enctype="multipart/form-data">
@csrf

<div class="form-group">
  <label for="titleFr" >Description courte, français</label>
    <input class="form-control" type="text" id ="titleFr" name ="titleFr">
</div>

<div class="form-group">
  <label for="titleEng" >Description courte, anglais</label>
    <input class="form-control" type="text" id ="titleEng" name ="titleEng">
</div>

<div class="form-group">
  <label for="descriptionFr" >Description français</label>
    <input class="form-control" type="text" id ="descriptionFr" name ="descriptionFr">
</div>

<div class="form-group">
  <label for="descriptionEng" >Description anglais</label>
    <input class="form-control" type="text" id ="descriptionEng" name ="descriptionEng">
</div>

<div class="form-group">
  <label for="brand" >Brand</label>
    <input class="form-control" type="text" id ="brand" name ="brand">
</div>

<div class="form-group">
  <label for="quantity">Quantity</label>
    <input class="form-control" id="quantity" type="number" name="quantity">
</div>

<div class="form-group">
  <label for="regularPrice">Prix</label>
    <input class="form-control" type="number" id ="regularPrice" name ="regularPrice">
</div>

<div class="form-group">
  <label for="discountPrice" >Prix avec le rabais</label>
    <input class="form-control" type="number" id ="discountPrice" name ="discountPrice">
</div>


<div class="form-group">
  <label for="category_id" >Catégories ID</label>
    <select class="form-control" id ="category_id" name ="category_id">
    <option value="1">Papeterie</option>
    <option value="2">Outils</option>
    <option value="3">Instruments Musicaux</option>
    <option value="4">Sport</option>
    <option value="5">Accessoires pour Ordinateurs</option>
    <option value="6">Cuisine</option>
    </select>
</div>


<div class="form-group">
  <label for="categoryFr" >Catégories</label>
    <select class="form-control" id ="categoryFr" name ="categoryFr">
    <option value="Papeterie">Papeterie</option>
    <option value="Outils">Outils</option>
    <option value="Instruments Musicaux">Instruments Musicaux</option>
    <option value="Sport">Sport</option>
    <option value="Accessoires pour Ordinateurs">Accessoires pour Ordinateurs</option>
    <option value="Cuisine">Cuisine</option>
    </select>
</div>

<div class="form-group">
  <label for="categoryEn" >Catégories Anglais</label>
    <select class="form-control" id ="categoryEn" name ="categoryEn">
    <option value="Stationery">Stationery</option>
    <option value="Tools">Tools</option>
    <option value="Musical Instruments">Musical Instruments</option>
    <option value="Sports">Sports</option>
    <option value="Computer Accessories">Computer Accessories</option>
    <option value="Kitchen">Kitchen</option>
    </select>
</div>


<div class="form-group">
<label for="imgUgl" >Photo</label>
    <input class="form-control" type="file" name="imgUrl" id="imgUrl">

</div>

<div class="form-group">
<label for="imgUgl" >Photo2</label>
    <input class="form-control" type="file" name="imgUrl2" id="imgUrl2">
    <input class="form-control" type="submit" value="Enregistrer le produit">
</div>

</form>
</div>
</div>
</div>

@endsection
