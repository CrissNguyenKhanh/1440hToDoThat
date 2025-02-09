@extends('frontend.homepage.layout')
@section('content')
  <div class="product-container">

    <div class="uk-container uk-container-center">
      @include('frontend.component.breadcumb', [
         'model' => $productCatalogue,
         'breadCrumb' => $breadCrumb,
     ])
     <div class="panel-body">
      @include('frontend.component.product-detail',['product'=>$product ,'productCatalogue' =>$productCatalogue ])
    </div>
  </div>
</div>
@endsection
