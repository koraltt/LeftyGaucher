@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-7">
    <h2>Modifier le produit</h2>
      



    <form action = "/products/modify/<?php echo $products[0]->id; ?>" method = "post" enctype="multipart/form-data">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
        @csrf

        <div class="form-group">
          <label for="titleFr" >Description courte, français</label>
          <input type="text"  class="form-control"  id ="titleFr" name ="titleFr" value = "<?php echo$products[0]->titleFr; ?>">
        </div>

        <div class="form-group">
          <label for="titleEng" >Description courte, anglais</label>
          <input type="text"  class="form-control" id ="titleEng" name ="titleEng" value = "<?php echo$products[0]->titleEng; ?>">
        </div>

        <div class="form-group">
          <label for="descriptionFr" >Description français</label>
          <input type="text"  class="form-control" id ="descriptionFr" name ="descriptionFr" value = "<?php echo$products[0]->descriptionFr; ?>">
        </div>

        <div class="form-group">
          <label for="descriptionEng" >Description anglais</label>
          <input type="text"  class="form-control" id ="descriptionEng" name ="descriptionEng" value = "<?php echo$products[0]->descriptionEng; ?>">
        </div>

        <div class="form-group">
          <label for="brand" >Brand</label>
          <input type="text"  class="form-control" id ="brand" name ="brand" value = "<?php echo$products[0]->brand; ?>">
        </div>

        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input id="quantity"  class="form-control" type="number" name="quantity" value = "<?php echo$products[0]->quantity; ?>">
        </div>

        <div class="form-group">
          <label for="regularPrice">Prix</label>
          <input type="number"  class="form-control" id ="regularPrice" name ="regularPrice" value = "<?php echo$products[0]->regularPrice; ?>">
        </div>

        <div class="form-group">
          <label for="discountPrice" >Prix avec le rabais</label>
          <input type="number"  class="form-control" id ="discountPrice" name ="discountPrice" value = "<?php echo$products[0]->discountPrice; ?>">

        </div>

        <div class="form-group">
          <label for="category_id" >Catégories ID</label>
          <select id ="category_id"  class="form-control" name ="category_id">
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
          <select id ="categoryFr"  class="form-control" name ="categoryFr">
              <option value="Papeterie">Papeterie</option>
              <option value="Outils">Outils</option>
              <option value="Instruments Musicaux">Instruments Musicaux</option>
              <option value="Sport">Sport</option>
              <option value="Accessoires pour Ordinateurs">Accessoires pour Ordinateurs</option>
              <option value="Cuisine">Cuisine</option>
          </select>
          </div>

        <div class="form-group"><label for="categoryEn" >Catégories</label><br>
          <select id ="categoryEn"  class="form-control" name ="categoryEn">
            <option value="Stationery">Stationery</option>
            <option value="Tools">Tools</option>
            <option value="Musical Instruments">Musical Instruments</option>
            <option value="Sports">Sports</option>
            <option value="Computer Accessories">Computer Accessories</option>
            <option value="Kitchen">Kitchen</option>
          </select><br>
        </div>


        <div class="form-group">
          <label for="imgUgl" >Photo</label>
            <input type="text" name="imgUrl"  class="form-control" id="imgUrl" value = "<?php echo$products[0]->imgUrl; ?>">
        </div>
        <div class="form-group">
          <label for="imgUgl2" >Deuxième photo</label>
            <input type="text" name="imgUrl2"  class="form-control" id="imgUrl2" value = "<?php echo$products[0]->imgUrl2; ?>"> 
         </div>
          <button type="submit" class="btn btn-info ">ENREGISTRER LES MODIFICATIONS</button>

      </form>       
        
      </div>


      <div class="col-3">
     
      
        <span><img src="/images/<?php echo$products[0]->imgUrl; ?>"  alt="..."></span>
        
      </div>
     
  </div>
  <br>
  <div class="col-1">
                <form action = "/products/modify/<?php echo $products[0]->id; ?>" method = "post" >
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

          
          
          @csrf
         
          <button type="submit" class="btn btn-danger ">SUPPRESION</button>
          </form> 

            </div>

</div>




@endsection