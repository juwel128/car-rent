

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
        <div class=" mt-4">

            <div class="row">
                <div class="col-md-12">
                @if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show text-center">
    <strong>Success!</strong> {{ Session::get('message') }}
    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
</div>
@endif
                </div>
                <div class="col-md-8">
                <div class="card mb-4">
                   <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up success-text">Product Table</h2>
                            <table class="table">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Code</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Unit</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Active Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                              $i=1;
                            @endphp
                        @foreach($productss as $product)
                            <tr class="@if($i%2 != 0) table-success @else text-warning @endif">
                                <th scope="row">{{$i++}}</th>
                                <td>{{$product->code}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->unit}}</td>
                                <td>
                                    <img src="{{ asset('storage/photo/'.$product->image)}}" style="width:40px;height:40px;"/>
                                </td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    @if($product->is_active==1)
                                       Active
                                    @else
                                       Inactive
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-info btn-sm" wire:click="EditProduct({{$product->id}})"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm" wire:click="DeleteProduct({{$product->id}})"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{$productss->links('pagination::bootstrap-4')}}

                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                  
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4">
                <div class="card-body">
                    
                    <!-- Grid row -->
                    <form wire:ignore wire:submit.prevent="SaveProduct">
                            @csrf
                    <div class="row">
                  
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up success-text">Add Product</h2>
                        </div>
                        <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" wire:model.lazy="code" placeholder="Code" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control" wire:model.lazy="category_id" required>
                                       <option>--Select Category--</option>
                                       @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control" wire:model.lazy="unit" required>
                                       <option>--Select Unit--</option>
                                       <option value="Pcs">Pcs</option>
                                       <option value="Kg">Kg</option>
                                       <option value="Ltr">Ltr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" wire:model.lazy="name" placeholder="Product Name" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" wire:model.lazy="image"/>
                                    @error('image') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" wire:model.lazy="price" placeholder="Price" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control" wire:model.lazy="is_active" required>
                                       <option value="">Status</option>
                                       <option value="1">Active</option>
                                       <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" wire:model.lazy="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary btn-block">Save Product</button>
                    </div>
                   </form>
                    <!-- Grid row -->
                   
                </div>
            </div>
                </div>
            </div>

        </div>
        <!--MDB Tables-->
      
    </main>
  
