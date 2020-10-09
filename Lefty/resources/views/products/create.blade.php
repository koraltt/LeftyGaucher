@extends('layouts.app')

@section('content')


<h1> Entrer le nouveau produit</h1>

<form action="/products" method="POST"></form>
@csrf
<label for="frenchShort" >Description courte, français</label>
<input type="text" id ="frenchShort" name ="frenchShort">
<label for="engShort" >Description courte, anglais</label>
<input type="text" id ="engShort" name ="engShort">
<label for="frenchLong" >Description longue, français</label>
<input type="text" id ="frenchLong" name ="frenchLong">
<label for="engLong" >Description longue, anglais</label>
<input type="text" id ="engLong" name ="engLong">
<label for="brand" >Brand</label>
<input type="text" id ="brand" name ="brand">
<label for="price" >Prix</label>
<input type="text" id ="price" name ="price">
<label for="discountPrice" >Prix avec le rabais</label>
<input type="discountPrice" id ="discountPrice" name ="discountPrice">

<label for="categoryFr" >Catégories</label>
<select id ="categoryFr" name ="categoryFr">
<option value="Papeterie">Papeterie</option>
<option value="Outils">Outils</option>
<option value="Instruments Musicaux">Instruments Musicaux</option>
<option value="Sport">Sport</option>
<option value="Accessoires pour Ordinateurs">Accessoires pour Ordinateurs</option>
<option value="Cuisine">Cuisine</option>
</select>
<label for="categoryEn" >Catégories</label>
<select id ="categoryEn" name ="categoryEn">
<option value="Stationery">Stationery</option>
<option value="Tools">Tools</option>
<option value="Musical Instruments">Musical Instruments</option>
<option value="Sports">Sports</option>
<option value="Computer Accessories">Computer Accessories</option>
<option value="Kitchen">Kitchen</option>
</select>


<label for="imgName" >Nom de fichier</label>
<input type="text" id ="imgName" name ="imgName">
<label for="imgName2" >Nom de fichier</label>
<input type="text" id ="imgName2" name ="imgName2">
<input type="submit" value="Enregistrer le produit">
</form>

@endsection