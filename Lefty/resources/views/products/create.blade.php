@extends('layouts.app')

@section('content')


<h1> Entrer le nouveau produit</h1>

<form action="/products" method="POST" enctype="multipart/form-data">
@csrf
<label for="titleFr" >Description courte, français</label>
<input type="text" id ="titleFr" name ="titleFr">
<br><label for="titleEng" >Description courte, anglais</label>
<input type="text" id ="titleEng" name ="titleEng">
<br><label for="descriptionFr" >Description français</label>
<input type="text" id ="descriptionFr" name ="descriptionFr">
<br><label for="descriptionEng" >Description anglais</label>
<input type="text" id ="descriptionEng" name ="descriptionEng">
<br><label for="brand" >Brand</label>
<input type="text" id ="brand" name ="brand">
<br><label for="quantity">Quantity</label>
<input id="quantity" type="number" name="quantity">
<br><label for="regularPrice">Prix</label>
<input type="number" id ="regularPrice" name ="regularPrice">
<br><label for="discountPrice" >Prix avec le rabais</label>
<input type="number" id ="discountPrice" name ="discountPrice">

<br><label for="category_id" >Catégories ID</label>
<select id ="category_id" name ="category_id">
<option value="1">Papeterie</option>
<option value="2">Outils</option>
<option value="3">Instruments Musicaux</option>
<option value="4">Sport</option>
<option value="5">Accessoires pour Ordinateurs</option>
<option value="6">Cuisine</option>
</select>

<br><label for="categoryFr" >Catégories</label>
<select id ="categoryFr" name ="categoryFr">
<option value="Papeterie">Papeterie</option>
<option value="Outils">Outils</option>
<option value="Instruments Musicaux">Instruments Musicaux</option>
<option value="Sport">Sport</option>
<option value="Accessoires pour Ordinateurs">Accessoires pour Ordinateurs</option>
<option value="Cuisine">Cuisine</option>
</select>
<br><label for="categoryEng" >Catégories</label><br>
<select id ="categoryEng" name ="categoryEng">
<option value="Stationery">Stationery</option>
<option value="Tools">Tools</option>
<option value="Musical Instruments">Musical Instruments</option>
<option value="Sports">Sports</option>
<option value="Computer Accessories">Computer Accessories</option>
<option value="Kitchen">Kitchen</option>
</select><br>



<br><input type="file" name="imgUrl" id="imgUrl">

<br><input type="file" name="imgUrl2" id="imgUrl2"><br>
<input type="submit" value="Enregistrer le produit">
</form>

@endsection
