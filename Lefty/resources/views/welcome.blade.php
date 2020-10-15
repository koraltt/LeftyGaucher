@extends('layouts.app')
@section('content')
<!-- jumbotron ------------------------------------->

<div class="jumbotron jumbotron-fluid" id="jumbo">
  <div class="container">
    <h1 class="display-4"><img src="images/site/logoWhite.png"></h1>
    <p class="lead">Bienvenu. Ici on trouve des produits exclusivement pour les gauchers.</p>
  </div>
</div>

<!-- jumbotron end -->
<!-- Cards with Categories -------->
<div class="card-deck">



  <div class="frontCategory">
    <a href="/category/1"><img src="images/site/stationery.jpg" class="card-img-top" alt="..."></a>
    <div class="card-body">
    <h5 class="card-title">PAPETERIE</h5>          
    </div>
  </div>
  <div class="frontCategory">
  <a href="/category/3"><img src="images/site/musicInst.jpg" class="card-img-top" alt="..."></a>
    <div class="card-body">
    <h5 class="card-title">INSTRUMENTS MUSICAUX</h5>          
    </div>
  </div>
  <div class="frontCategory">
  <a href="/category/2"><img src="images/site/tools.jpg" class="card-img-top" alt="..."></a>
    <div class="card-body">
    <h5 class="card-title">OUTILS</h5>          
    </div>
  </div>
  <div class="frontCategory">
  <a href="/category/6"><img src="images/site/kitchen.jpg" class="card-img-top" alt="..."></a>
    <div class="card-body">
    <h5 class="card-title">CUISINE</h5>          
    </div>
  </div>
  <div class="frontCategory">
  <a href="/category/5"><img src="images/site/computerAcc.jpg" class="card-img-top" alt="..."></a>
    <div class="card-body">
    <h5 class="card-title">ACCESSOIRES POUR ORDINATEURS</h5>          
    </div>
  </div>



</div>

@endsection
