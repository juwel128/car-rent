<div>
<style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Montserrat', sans-serif
}

body {
    background-color: #7EC855;
    line-height: 1rem;
    font-size: 14px;
    /* padding: 10px */
}

.container1 {
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
    background-color: #eee
}

.navbar-brand {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 800
}

nav {
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    background-color: white
}

.order .card {
    position: relative;
    background: #fff;
    box-shadow: 0 0 15px rgba(0, 0, 0, .1)
}

.ribbon {
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: absolute
}

.ribbon::before,
.ribbon::after {
    position: absolute;
    content: '';
    display: block;
    border: 5px solid red
}

.ribbon span {
    position: absolute;
    display: block;
    width: 225px;
    padding: 15px 0;
    background-color: red;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    color: #fff;
    font: 700 18px/1 'Lato', sans-serif;
    text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
    text-transform: uppercase;
    text-align: center
}

.ribbon-top-right {
    top: -12px;
    right: -12px
}

.ribbon-top-right::before,
.ribbon-top-right::after {
    border-top-color: transparent;
    border-right-color: transparent
}

.ribbon-top-right::before {
    top: 0;
    left: 0
}

.ribbon-top-right::after {
    bottom: 0;
    right: 0
}

.ribbon-top-right span {
    left: -25px;
    top: 30px;
    transform: rotate(45deg)
}

small {
    font-size: 12px
}

.cart {
    line-height: 1
}
/* 
.icon {
    background-color: #eee;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%
} */

.pic {
    width: 70px;
    height: 90px;
    border-radius: 5px
}

td {
    vertical-align: middle
}

.red {
    color: #fd1c1c;
    font-weight: 600
}

.b-bottom {
    border-bottom: 2px dotted black;
    padding-bottom: 20px
}

p {
    margin: 0px
}

table input {
    width: 40px;
    border: 1px solid #eee
}

input:focus {
    border: 1px solid #eee;
    outline: none
}

.round {
    background-color: #eee;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center
}

.payment-summary .unregistered {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #eee;
    text-transform: uppercase;
    font-size: 14px
}

.payment-summary input {
    width: 100%;
    margin-right: 20px
}

.payment-summary .sale {
    width: 100%;
    background-color: #e9b3b3;
    text-transform: uppercase;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5PX 0
}

.red {
    color: #fd1c1c
}

.del {
    width: 35px;
    height: 35px;
    object-fit: cover
}

.delivery .card {
    padding: 10px 5px
}

.option {
    position: relative;
    top: 50%;
    display: block;
    cursor: pointer;
    color: #888
}

.option input {
    display: none
}

.checkmark {
    position: absolute;
    top: 40%;
    left: -25px;
    height: 20px;
    width: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 50%
}

.option input:checked~.checkmark:after {
    display: block
}

.option .checkmark:after {
    content: "\2713";
    width: 10px;
    height: 10px;
    display: block;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 200ms ease-in-out 0s
}

.option:hover input[type="radio"]~.checkmark {
    background-color: #f4f4f4
}

.option input[type="radio"]:checked~.checkmark {
    background: #ac1f32;
    color: #fff;
    transition: 300ms ease-in-out 0s
}

.option input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1);
    color: #fff
}


/*/////////////////////////navbar-default///////////////*/

.navbar-default {
    -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    -moz-box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    background-color: #ffffff;
    margin-bottom: 0;
    border: none;
}

.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    color: #0cd4d2;
    background-color: transparent;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:after {
   border-top:solid 2px #0cd4d2;
   
}
.navbar-default .dropdown-menu {
    padding: 0;
    font-size: 14px;
    background-color: #ffffff;
    color: #878c94;
    border: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
    -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
    -ms-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
    -webkit-transition: all 0.1s ease-in;
    -moz-transition: all 0.1s ease-in;
    -ms-transition: all 0.1s ease-in;
    -o-transition: all 0.1s ease-in;
    transition: all 0.1s ease-in;
}

.dropdown-menu > li > a {
    display: block;
    padding: 6px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #878c94;
    white-space: nowrap;
}
.dropdown-menu > li > a:hover{
     color: #0cd4d2;
}


/***********************
     megaDropMenu
////////////////////////////*/

.navbar-default .container{
    position:relative;
}
.navbar-default .navbar-collapse li.dropdown.megaDropMenu {
    position: static;
}

.navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu{
    width: 100%;
}
.navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu li ul li:first-child{
    padding: 20px 0px 5px 15px;
    font-size: 16px;
    text-transform: uppercase;
    /* text-align: center; */
    color: #0cd4d2;
}
.navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu li ul li a{
    display:block;color:#878c94;font-size: 14px;text-decoration:none;padding:8px 15px;
}
.navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu li ul li a:hover{
     color: #00BCD4;
    text-decoration: none;
   background-color: rgba(0, 0, 0, 0.02);
}

.navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu img{
    display: block;
    max-width: 100%;
    padding: 20px;
}
    </style>
          <!-- Start Header -->
         
          <header>
    <div class="head-search">
        <div class="container">
            <div class="row">
                    <div class="hidden-xs col-sm-3 col-md-2 col-lg-2 head-contact">
                        <div class="icon-call"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="contact-txt">
                            <span>contact us at</span><br>01408979487
                        </div>
                    </div>
                    <div class="col-xs-7 col-sm-5 col-md-6 col-lg-6 pr0">
                        <form action="" id="" class="search-products">
                            <div class="input-group">
                                <input class="input-big" type="text" wire:model.debounce.500ms="search" name="x" placeholder="What are you looking for?">
                                <!-- <span class="input-group-btn">
                                    <button class="btn btn-search" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span> -->
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2">
                        <div class="shop-icons">
                            <div class="row">
                                <div class="col-md-3 mt-2">
                                        <a href="{{ route('cart') }}" class="text-white" style="font-size:15px;">Cart</a>
                                </div>
                                <div class="col-md-3 mt-2">
                                        <a href="{{ route('checkout') }}" class="text-white" style="font-size:15px;">Checkout</a>
                                </div>
                                <div class="col-xs-6 col-sm-6 cart dropdown text-right">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <div class="bag">
                                                <div class="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                                                <div class="num">{{ count($cart_count) }}</div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-cart" role="menu">
                                        @foreach($cart_count as $cart)
                                            <li>
                                                <span class="item">
                                                    <span class="item-left">
                                                        <img src="{{ asset('storage/photo/'.$cart->Product->image) }}" alt="">
                                                        <span class="item-info">
                                                            <span>{{ $cart->Product->name }}</span>
                                                            <span>&#2547; {{ $cart->Product->price }}</span>
                                                        </span>
                                                    </span>
                                                    <span class="item-right">
                                                        <button class="btn btn-xs btn-danger pull-right" wire:click="DeleteFromCart({{$cart->id}})"><i class="fa fa-times"></i></button>
                                                    </span>
                                                </span>
                                            </li>
                                            @endforeach
                                        </ul>
                                  
                                </div>

                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</header>
    <!-- End Header -->
<br>
<br>
<br>
<div class="container container1 mt-4 p-0">
    <div class="row px-md-4 px-2 pt-4">
        <div class="col-lg-8">
            <p class="pb-2 fw-bold">Order</p>
           
            <div class="card">
                <div class="ribbon ribbon-top-right"><span>SALE TIME!</span></div>
                <div>
                    <div class="table-responsive px-md-4 px-2 pt-3">
                        <table class="table table-borderless">
                            <tbody>
                            @php 
         $sum=0;
      @endphp
                                @foreach($cart_count as $cart)
                                <tr class="border-bottom">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="{{ asset('storage/photo/'.$cart->Product->image) }}" alt=""> </div>
                                            <div class="ps-3 d-flex flex-column justify-content">
                                                <p class="fw-bold">{{$cart->Product->name}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <p class="pe-3"><span class="red">&#2547; {{$cart->Product->price}}</span></p>
                                            @php 
             $sum+=$cart->quantity*$cart->price
            @endphp
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="{{$cart->quantity}}" readonly></span>
                                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 payment-summary">
        <form wire:ignore.self wire:submit.prevent="ConfirmOrder">
            @csrf
            <p class="fw-bold pt-lg-0 pt-4 pb-2">Order Summary</p>
            <div class="card px-md-3 px-2 pt-4">
              
                <div class="d-flex justify-content-between b-bottom"> 
                    <input wire:model.lazy="phone" class="form-control" placeholder="Phone" required/>
                    @error('phone') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="d-flex justify-content-between b-bottom"> 
                    <input wire:model.lazy="address" class="form-control" placeholder="Address" required/>
                    @error('address') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                </div>
                <div class="d-flex justify-content-between b-bottom"> 
                    <textarea class="form-control" wire:model.lazy="description" placeholder="Note"></textarea>
                </div>
                <div class="d-flex flex-column b-bottom">
                    <div class="d-flex justify-content-between"> <small class="text-muted">Total Amount</small>
                        <p>&#2547; {{$sum}}</p>
                    </div>
                </div>
                <div class="my-3">
                    <button class="btn btn-primary btn-block">Conform Order</button>
                </div>
            </div>
           </form>
        </div>
    </div>
</div>
<br>
<br>
<section id="shiping">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="shipping-box">
                        <div class="box-icon"><i class="fas fa-truck"></i></div>
                        <div class="box-title">
                            <h3>Free Shipping</h3>
                            <p>above $5 only</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shipping-box">
                        <div class="box-icon"><i class="far fa-address-book"></i></div>
                        <div class="box-title">
                            <h3>Certified Organic</h3>
                            <p>100% guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shipping-box">
                        <div class="box-icon"><i class="far fa-money-bill-alt"></i></div>
                        <div class="box-title">
                            <h3>Huge Savings</h3>
                            <p>at lowest price</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center>
                    <a href="{{ route('register') }}">Farmer Create</a>
                    </center>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e05090259d.js" crossorigin="anonymous"></script>