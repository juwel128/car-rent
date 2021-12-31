<div>
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
                                        <a href="{{ route('cart') }}" class="text-white" style="font-size:18px;">Cart</a>
                                </div>
                                <div class="col-md-3 mt-2">
                                        <a href="{{ route('checkout') }}" class="text-white" style="font-size:18px;">Checkout</a>
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
<div class="shopping-cart">
<style>
    *{
  box-sizing: border-box;
}

html,
body{
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: #7EC855;
  font-family: 'Roboto' , sans-serifl
}

.shopping-cart{
  width: 750px;
  height: auto;
  margin: 5em auto;
  background: #FFF;
  box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
  border-radius: 0.5em;
  
  display: flex;
  flex-direction: column;
}

/* item styling */
.title{
  height: 3.75em;
  border-bottom: 1px solid #E1E8EE;
  padding: 1.25em 1.75em;
  color: #5E6977;
  font-size: 1.125em;
  font-weight: 400;
}
.item{
  padding: 1.25em 1.75em;
  height: 7.5em;
  display: flex;
}
.item:nth-child(3) {
  border-top: 1px solid #E1E8EE;
  border-bottom: 1px solid #E1E8EE;
}

.buttons{
  position: relative;
  padding-top: 1.75em;
  margin-right: 3.5em;
}
.delete-btn,
.like-btn{
  display: inline-block;
  cursor: pointer;
}
.delete-btn{
  width: 18px;
  height: 17px;
  background: url("https://designmodo.com/demo/shopping-cart/delete-icn.svg") no-repeat center;
}
.like-btn{
  position: absolute;
  top: 9px;
  left: 15px;
  background: url("https://designmodo.com/demo/shopping-cart/twitter-heart.png");
  width: 60px;
  height: 60px;
  background-size: 2900%;
  background-repeat: no-repeat;
}

.is-active{
  animation-name: animate;
  animation-duration: .8s;
  animation-iteration-count: 1;
  animation-timing-function: steps(28);
  animation-fill-mode: forwards;
}
@keyframes animate{
  0% {background-position: left;}
  50% {background-position: right;}
  100% {background-position: right;}
}

.image{
  margin-right: 50px;
}
.description{
  padding-top: 10px;
  margin-right: 60px;
  width: 115px;
}
.description span{
  display: block;
  font-size: 1em;
  color: #43484D;
  font-weight: 400;
}
.description span:first-child{
  margin-bottom: 5px;
}
.description span:last-child{
  font-weight: 300;
  margin-top: 8px;
  color: #86939E;
}

.quantity{
  padding-top: 20px;
  margin-right: 60px;
}
.quantity input{
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 32px;
  font-size: 1em;
  color: #43484D;
  font-weight: 300;
}
button[class*=btn] {
  width: 30px;
  height: 30px;
  background-color: #E1E8EE;
  border-radius: 6px;
  border: none;
  cursor: pointer;
}
.minus-btn img{
  margin-bottom: 3px;
}
.plus-btn img{
  margin-top: 2px;
}

button:focus,
input:focus{
  outline: 0;
}

.total-price{
  width: 83px;
  padding-top: 27px;
  text-align: center;
  font-size: 1em;
  color: #43484D;
  font-weight: 300;
}


/* media queries */
@media (max-width: 800px) {
  .shopping-cart{
    width: 100%;
    height: auto;
    overflow: hidden;
  }
  .item {
    height: auto;
    flex-wrap: wrap;
    justify-content: center;
  }
  .image img{
    width: 50%;
  }
  .image,
  .quantity,
  .description{
    width: 100%;
    text-align: center;
    margin: 6px 0;
  }
  .buttons{
    margin-right: 20px;
  }
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
      <!-- Title -->
      <div class="title">
        Shopping Bag
      </div>
      @php 
         $sum=0;
      @endphp
      @foreach($cart_count as $cart)
      <!-- Product #1 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn" wire:click="Delete({{$cart->id}})"></span>
          <!-- <span class="like-btn"></span> -->
        </div>

        <div class="image">
        <img src="{{ asset('storage/photo/'.$cart->Product->image) }}" style='height:60px;width:120px;' alt="" />
        </div>

        <div class="description">
         {{$cart->Product->name}}<span class="text-info">({{$cart->Product->unit}})</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" wire:click="IncreaseQuantity({{$cart->id}})">
            <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="{{$cart->quantity}}">
          <button class="minus-btn" type="button" name="button" wire:click="DeccreaseQuantity({{$cart->id}})">
            <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price">
            @php 
             $sum+=$cart->quantity*$cart->price
            @endphp
        &#2547;{{$cart->quantity*$cart->price}}
        </div>
      </div>
      @endforeach
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-3 bg-info my-2"><h5>Total</h5></div>
          <div class="col-md-3 bg-info my-2"><h5>&#2547;{{$sum}}</h5></div>
          <div class="col-md-3"></div>
      </div>
      <div>
      <a href="{{ route('checkout') }}">
      <button class="button"><span>Checkout </span></button>
      </a>
      </div>
    </div>

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