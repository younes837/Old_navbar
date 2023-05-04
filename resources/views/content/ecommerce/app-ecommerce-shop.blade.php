@extends('layouts/detachedLayoutMaster')

@section('title', 'Shop')

@section('vendor-style')
<!-- Vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/nouislider.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  

@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-sliders.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-ecommerce.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection

@section('content-sidebar')
<!-- Ecommerce Sidebar Starts -->



<div class="sidebar-shop">
  <div class="row">
    <div class="col-sm-12">
      <h6 class="filter-heading d-none d-lg-block">Filters</h6>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <!-- Price Filter starts -->
      <div class="multi-range-price">
        <h6 class="filter-title mt-0">Multi Range</h6>
        <ul class="list-unstyled price-range" id="price-range">
          <li>
            <div class="form-check">
              <input type="radio" id="priceAll" name="price-range" value="all" class="form-check-input" checked  />
              <label class="form-check-label" for="priceAll">All</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange1" name="price-range" value="100" class="form-check-input" />
              <label class="form-check-label" for="priceRange1">&lt;=$100</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange2" name="price-range" value="100-1000" class="form-check-input" />
              <label class="form-check-label" for="priceRange2">$100 - $1000</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange3" name="price-range" value="1000-5000" class="form-check-input" />
              <label class="form-check-label" for="priceARange3">$1000 - $5000</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange4" name="price-range" value="5000" class="form-check-input" />
              <label class="form-check-label" for="priceRange4">&gt;= $5000</label>
            </div>
          </li>
        </ul>
      </div>
      <!-- Price Filter ends -->

      <!-- Price Slider starts -->
      {{-- <div class="price-slider">
        <h6 class="filter-title">Price Range</h6>
        <div class="price-slider">
          <div class="range-slider mt-2" id="price-slider"></div>
        </div>
      </div> --}}
      <!-- Price Range ends -->

      <!-- Categories Starts -->
      <div id="product-categories">
        <h6 class="filter-title">Categories</h6>
        <ul class="list-unstyled categories-list">
          <li>
            <div class="form-check">
              <input type="radio" id="all" value="all" name="categorie" class="form-check-input" checked />
              <label class="form-check-label" for="all">All</label>
            </div>
          </li>
          @foreach($categories as $categorie)
          <li>
            <div class="form-check">
              <input type="radio" id="{{$categorie->id}}" value="{{$categorie->id}}" name="categorie" class="form-check-input"  />
              <label class="form-check-label" for="{{$categorie->id}}">{{$categorie->name}}</label>
            </div>
          </li>
          @endforeach
         
        </ul>
      </div>
      <!-- Categories Ends -->

      <!-- Brands starts -->
      
      
      <!-- Brand ends -->

      <!-- Rating starts -->
      <div id="ratings">
        <h6 class="filter-title">Brands</h6>
        <div class="list-unstyled categories-list">
          <li><input type="radio" id="all" value="all" name="brand" class="form-check-input" checked />
            <label class="form-check-label" for="all">All</label>
          </li>  @foreach($brand as $item)
          <li>
            <div class="form-check">
              <input type="radio" id="{{$item->id}}" value="{{$item->id}}" name="brand" class="form-check-input"  />
              <img src="{{asset($item->image)}}" class="" height="20" width="20" alt="">
              <label class="form-check-label">{{$item->name}}</label>
            </div>
          </li>
          @endforeach
        </div>
        
      </div>
      <!-- Rating ends -->

      <!-- Clear Filters Starts -->
      
      <!-- Clear Filters Ends -->
    </div>
  </div>
</div>
<!-- Ecommerce Sidebar Ends -->
@endsection

@section('content')
<!-- E-commerce Content Section Starts -->
<section id="ecommerce-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="ecommerce-header-items">
        <div class="result-toggler">
          <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
          </button>
          <div class="search-results">{{$length}} results found</div>
        </div>
        <div class="view-options d-flex">
          <div class="btn-group dropdown-sort">
            <button
            type="button"
            class="btn btn-outline-primary dropdown-toggle me-1"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >
            <span class="active-sorting">Featured</span>
          </button>
          
          <div class="dropdown-menu" id="sort">
            <a class="dropdown-item" id="featured"  href="#">Featured</a>
            <a class="dropdown-item" id="lowest"  href="#">Lowest</a>
            <a class="dropdown-item" id="highest" href="#">Highest</a>
          </div>
        </div>
        <div class="btn-group" role="group">
          <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
          <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1"
          ><i data-feather="grid" class="font-medium-3"></i
            ></label>
            <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2"
            ><i data-feather="list" class="font-medium-3"></i
              ></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- E-commerce Content Section Starts -->

  <!-- background Overlay when sidebar is shown  starts-->
  <div class="body-content-overlay"></div>
  <!-- background Overlay when sidebar is shown  ends-->
  
  <!-- E-commerce Search Bar Starts -->
  <section id="ecommerce-searchbar" class="ecommerce-searchbar">
    <div class="row mt-1">
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <input
          type="text"
          class="form-control search-product"
          id="search"
          placeholder="Search Product"
          aria-label="Search..."
          aria-describedby="shop-search"
          />




          
          <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
        </div>
      </div>
    </div>
  </section>
  <!-- E-commerce Search Bar Ends -->
  <section id="ecommerce-products" class="grid-view">
  @include('content/ecommerce/content-shop')
  <!-- E-commerce Products Starts -->
  {{-- <section id="ecommerce-products" class="grid-view">
   @foreach($produits as $produit)
     <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="{{url('app/ecommerce/details')}}">
        <img
          class="img-fluid card-img-top"
          src="{{asset($produit->photo)}}"
          alt="img-placeholder"
      /></a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <ul class="unstyled-list list-inline">
            @for ($i = 0; $i < $produit->rating; $i++)
   
              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            @endfor
            @for ($i = 0; $i < 5 - $produit->rating; $i++)
   
              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
            @endfor

            
          </ul>
        </div>
        <div>
          <h6 class="item-price">${{$produit->price}}</h6>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="{{url('app/ecommerce/details')}}">{{$produit->libelle}}</a>
        <span class="card-text item-company">By <a href="#" class="company-name">{{$produit->brand}}</a></span>
      </h6>
      <p class="card-text item-description">
        {{$produit->description}}
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">${{$produit->price}}</h4>
        </div>
      </div>
      <a href="#" class="btn btn-light btn-wishlist">
        <i data-feather="heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Add to cart</span>
      </a>
    </div>
  </div> 


  @endforeach  --}}
  


 
 
  </div>
</section>
<!-- E-commerce Products Ends -->
<input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_categorie" id="hidden_categorie" value="all" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_brand" id="hidden_brand" value="all" />
  
<script type="text/javascript">


  $(document).ready(function(){

$(document).on('click', '.pagination a', function(event){
 event.preventDefault(); 
 var page = $(this).attr('href').split('page=')[1];
 $('#hidden_page').val(page);
 var query=$('#search').val();
 var price = $('input[name="price-range"]:checked').val();
 console.log(price);
 var sort=$("#hidden_sort_type").val()
 var categorie=$("#hidden_categorie").val()
 var brand=$("#hidden_brand").val()
 fetch_data(page,query,price,sort,categorie,brand);
});
$('input:radio[name="price-range"]').change(function(){
  var price = $('input[name="price-range"]:checked').val();
  $('#items').html("text")
  event.preventDefault();
  var query=$('#search').val();
  var page=$('#hidden_page').val();
  console.log(page);
  console.log(query);
 var price = $('input[name="price-range"]:checked').val();
 console.log(price);
 var sort=$("#hidden_sort_type").val()
 var categorie=$("#hidden_categorie").val()
 var brand=$("#hidden_brand").val()
 fetch_data(page,query,price,sort,categorie,brand);

 
})


$(document).on('keyup', '#search', function(){
 var query = $(this).val();
 var page=$('#hidden_page').val();
 var price = $('input[name="price-range"]:checked').val();
 console.log(page);
  console.log(query);
  console.log(price);
  var sort=$("#hidden_sort_type").val()
  var categorie=$("#hidden_categorie").val()
  console.log(categorie);
  var brand=$("#hidden_brand").val()
 fetch_data(page,query,price,sort,categorie,brand);
      });
$(document).on('click', '#lowest', function(){
  var price = $('input[name="price-range"]:checked').val();
  var query=$('#search').val();
  var page=$('#hidden_page').val();
  var price = $('input[name="price-range"]:checked').val();
  var sort="asc"
  $("#hidden_sort_type").val(sort)
  var categorie=$("#hidden_categorie").val()
  var brand=$("#hidden_brand").val()
 fetch_data(page,query,price,sort,categorie,brand);

});
$(document).on('click', '#highest', function(){
  var price = $('input[name="price-range"]:checked').val();
  var query=$('#search').val();
  var page=$('#hidden_page').val();
  var price = $('input[name="price-range"]:checked').val();
  var sort="desc"
  $("#hidden_sort_type").val(sort)
  var categorie=$("#hidden_categorie").val()
  var brand=$("#hidden_brand").val()
 fetch_data(page,query,price,sort,categorie,brand);
});
$(document).on('click', '#featured', function(){
  var price = $('input[name="price-range"]:checked').val();
  var query=$('#search').val();
  var page=$('#hidden_page').val();
  var price = $('input[name="price-range"]:checked').val();
  var sort=""
  $("#hidden_sort_type").val(sort)
  var categorie=$("#hidden_categorie").val()
  var brand=$("#hidden_brand").val()
 fetch_data(page,query,price,sort,categorie,brand);

});
$('input:radio[name="categorie"]').change(function(){
  var price = $('input[name="price-range"]:checked').val();
  var categorie = $('input[name="categorie"]:checked').val();
  
  console.log(categorie);
  var query=$('#search').val();
  var page=$('#hidden_page').val();
  var price = $('input[name="price-range"]:checked').val();
  var sort=$("#hidden_sort_type").val()
  $("#hidden_sort_type").val(sort)
  $("#hidden_categorie").val(categorie)
  var brand=$("#hidden_brand").val()
 fetch_data(page,query,price,sort,categorie,brand);


});
$('input:radio[name="brand"]').change(function(){
  var price = $('input[name="price-range"]:checked').val();
  var categorie = $('input[name="categorie"]:checked').val();
  var brand = $('input[name="brand"]:checked').val();
  $("#hidden_brand").val(brand)
  console.log(brand);
  var query=$('#search').val();
  var page=$('#hidden_page').val();
  var price = $('input[name="price-range"]:checked').val();
  var sort=$("#hidden_sort_type").val()
  $("#hidden_sort_type").val(sort)
  $("#hidden_categorie").val(categorie)

 fetch_data(page,query,price,sort,categorie,brand);


});




function fetch_data(page,query,price,sort,categorie,brand)
{
 $.ajax({
  url:"/app/ecommerce/shop/search?page="+page+'&query='+query+'&price='+price+'&sort='+sort+'&categorie='+categorie+'&brand='+brand,
  success:function(data)
  {
    // console.log(data);
    $('#ecommerce-products').html(data);
    feather.replace();
   
  }
 });
}

});
  </script>


<!-- E-commerce Pagination Starts -->

<!-- E-commerce Pagination Ends -->
@endsection

@section('vendor-script')
<!-- Vendor js files -->
<script src="{{ asset(mix('vendors/js/extensions/wNumb.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/nouislider.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/pages/app-ecommerce.js')) }}"></script>
@endsection
