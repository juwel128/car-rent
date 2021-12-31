

    <main>
    <style>
    .hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solid #ba68c8;
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solid #ba68c8;
}
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}        
.table.table-bordered th {
    text-align: center;
}
</style>
        <!--MDB Tables-->
        <div class="container mt-4">

            <div class="row">
                <div class="col-md-12">
                @if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show text-center">
    <strong>Success!</strong> {{ Session::get('message') }}
    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
</div>
@endif
                </div>
                <div class="col-md-12">
                <div class="card mb-4">
                   <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up success-text">Order Table</h2>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Description</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Commission</th>
                                <th>Commission Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                              $i=1;
                            @endphp
                        @foreach($products as $product)
                        @foreach($product->OrderDetail as $order)
                            <tr class="@if($i%2 != 0) table-success @else text-warning @endif">
                                <th scope="row">{{$i++}}</th>
                                <td>{{$order->Order->phone}}</td>
                                <td>{{$order->Order->address}}</td>
                                <td>{{$order->Order->description}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>৳ {{$order->total}}</td>
                                <td>৳ {{($order->total*5)/100}}</td>
                                <td>
                                {{$order->commission}}
                                </td>
                            </tr>
                        @endforeach
                        @endforeach

                        </tbody>
                    </table>

                    </div>
                </div>
                </div>
            </div>

        </div>
        <!--MDB Tables-->
      
    </main>
  
