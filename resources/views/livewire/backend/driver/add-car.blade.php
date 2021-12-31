

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
<div class="alert alert-primary alert-dismissible fade show text-center">
     {{ Session::get('message') }}
    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
</div>
@endif
                </div>
                <div class="col-md-12">
                <div class="card mb-4">
                <div class="card-body">
                    
                    <!-- Grid row -->
                    <form wire:ignore wire:submit.prevent="SaveImage">
                            @csrf
                    <div class="row">
                  
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up test-info">Register Your Car</h2>
                        </div>
                        <!-- Grid column -->
                        <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" wire:model.lazy="type" required>
                                       <option value="">--Select Car Type--</option>
                                       <option value="Private Car">Private Car</option>
                                       <option value="Motor Cycle">Motor Cycle</option>
                                       <option value="CNG">CNG</option>
                                    </select>
                                    @error('type') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" wire:model.lazy="name" placeholder="Car Name" required/>
                                    @error('name') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" wire:model.lazy="car_no" placeholder="Car No." required/>
                                    @error('car_no') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="number" wire:model.lazy="seat" placeholder="Total Number Of Seat" required/>
                                    @error('seat') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" wire:model.lazy="mobile" placeholder="Mobile No." required/>
                                    @error('mobile') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-control" wire:model.lazy="image"/>
                                    @error('image') <span class="error" style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-info float-right">Save</button>
                            </div>
                    </div>
                   </form>
                    <!-- Grid row -->
                   
                </div>
            </div>  
                </div>
                <div class="col-md-12">
                <div class="card mb-4">
                   <div class="card-body">
                    <!-- Grid row -->
                 
                    <!-- Grid row -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Car No.</th>
                                <th>Seat</th>
                                <th>Mobile</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                              $i=1;
                            @endphp
                            @foreach($cars as $car)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$car->type}}</td>
                                <td>{{$car->name}}</td>
                                <td>{{$car->car_no}}</td>
                                <td>{{$car->seat}}</td>
                                <td>{{$car->mobile}}</td>
                                <td>
                                    <img class="rounded" src="{{ asset('storage/photo/'.$car->image) }}" style="width: 80px; height: 70px;"/>
                                </td>
                                <td>{{$car->status}}</td>
                                <td>
                                    <button class="btn btn-dark btn-sm" wire:click="ChangeStatus({{$car->id}})">Change Status</button>
                                    <button class="btn btn-warning btn-sm" wire:click="EditCar({{$car->id}})">Update</button>
                                    <button class="btn btn-danger btn-sm" wire:click="DeleteCar({{$car->id}})">Delete</button>
                                </td>
                            </tr>
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
  
