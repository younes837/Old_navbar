<li class="nav-item dropdown dropdown-cart me-25">
    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
      <i class="ficon" data-feather="shopping-cart"></i>
      <span class="badge rounded-pill bg-primary badge-up cart-item-count">
        @if(isset($lenght))
        {{$lenght}}
        @else
        0
        @endif
        
        </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
      <li class="dropdown-menu-header">
        <div class="dropdown-header d-flex">
          <h4 class="notification-title mb-0 me-auto">My Cart</h4>
          <div class="badge rounded-pill badge-light-primary">4 Items</div>
        </div>
      </li>
      <li class="scrollable-container media-list">
        <div class="list-item align-items-center">
          <img class="d-block rounded me-1" src="{{ asset('images/pages/eCommerce/1.png') }}" alt="donuts"
            width="62">
          <div class="list-item-body flex-grow-1">
            <i class="ficon cart-item-remove" data-feather="x"></i>
            <div class="media-heading">
              <h6 class="cart-item-title"><a class="text-body" href="{{ url('app/ecommerce/details') }}">
                  Apple
                  watch 5</a></h6><small class="cart-item-by">By Apple</small>
            </div>
            <div class="cart-item-qty">
              <div class="input-group">
                <input class="touchspin-cart" type="number" value="1">
              </div>
            </div>
            <h5 class="cart-item-price">$374.90</h5>
          </div>
        </div>
        <div class="list-item align-items-center">
          <img class="d-block rounded me-1" src="{{ asset('images/pages/eCommerce/7.png') }}" alt="donuts"
            width="62">
          <div class="list-item-body flex-grow-1">
            <i class="ficon cart-item-remove" data-feather="x"></i>
            <div class="media-heading">
              <h6 class="cart-item-title"><a class="text-body" href="{{ url('app/ecommerce/details') }}">
                  Google
                  Home Mini</a></h6><small class="cart-item-by">By Google</small>
            </div>
            <div class="cart-item-qty">
              <div class="input-group">
                <input class="touchspin-cart" type="number" value="3">
              </div>
            </div>
            <h5 class="cart-item-price">$129.40</h5>
          </div>
        </div>
        <div class="list-item align-items-center">
          <img class="d-block rounded me-1" src="{{ asset('images/pages/eCommerce/2.png') }}" alt="donuts"
            width="62">
          <div class="list-item-body flex-grow-1">
            <i class="ficon cart-item-remove" data-feather="x"></i>
            <div class="media-heading">
              <h6 class="cart-item-title"><a class="text-body" href="{{ url('app/ecommerce/details') }}">
                  iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>
            </div>
            <div class="cart-item-qty">
              <div class="input-group">
                <input class="touchspin-cart" type="number" value="2">
              </div>
            </div>
            <h5 class="cart-item-price">$699.00</h5>
          </div>
        </div>
        <div class="list-item align-items-center">
          <img class="d-block rounded me-1" src="{{ asset('images/pages/eCommerce/3.png') }}" alt="donuts"
            width="62">
          <div class="list-item-body flex-grow-1">
            <i class="ficon cart-item-remove" data-feather="x"></i>
            <div class="media-heading">
              <h6 class="cart-item-title"><a class="text-body" href="{{ url('app/ecommerce/details') }}">
                  iMac
                  Pro</a></h6><small class="cart-item-by">By Apple</small>
            </div>
            <div class="cart-item-qty">
              <div class="input-group">
                <input class="touchspin-cart" type="number" value="1">
              </div>
            </div>
            <h5 class="cart-item-price">$4,999.00</h5>
          </div>
        </div>
        <div class="list-item align-items-center">
          <img class="d-block rounded me-1" src="{{ asset('images/pages/eCommerce/5.png') }}" alt="donuts"
            width="62">
          <div class="list-item-body flex-grow-1">
            <i class="ficon cart-item-remove" data-feather="x"></i>
            <div class="media-heading">
              <h6 class="cart-item-title"><a class="text-body" href="{{ url('app/ecommerce/details') }}">
                  MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>
            </div>
            <div class="cart-item-qty">
              <div class="input-group">
                <input class="touchspin-cart" type="number" value="1">
              </div>
            </div>
            <h5 class="cart-item-price">$2,999.00</h5>
          </div>
        </div>
      </li>
      <li class="dropdown-menu-footer">
        <div class="d-flex justify-content-between mb-1">
          <h6 class="fw-bolder mb-0">Total:</h6>
          <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
        </div>
        <a class="btn btn-primary w-100" href="{{ url('app/ecommerce/checkout') }}">Checkout</a>
      </li>
    </ul>
  </li>

