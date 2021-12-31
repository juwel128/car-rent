<div>
    <style>
        body{
  width: 100%;
  height: 100%;
  margin: 0;
  font-family: 'Roboto' , sans-serifl
}
    </style>
    <section id="Best-selling">
        <div class="container">
            <div class="row">
                <div class="row">
                
                   <!-- Start Card -->
                            <!-- Topic Cards -->
                            
    <div id="cards_landscape_wrap-2">
        <div class="">
            <div class="row">
            <form wire:ignore wire:submit.prevent="SaveRent">
                            @csrf
                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="row p-3">
                                   <div class="col-md-4">
                                       <select class="form-control" wire:model.lazy="car_id" required>
                                           <option value="">--Select Car--</option>
                                           @foreach($cars as $car)
                                             <option value="{{$car->id}}">{{$car->name}}(Seat-{{$car->seat}})</option>
                                           @endforeach
                                       </select>
                                   </div>

                                   <div class="col-md-4">
                                       <select class="form-control" wire:model.lazy="pickup_district_id" required>
                                           <option value="">--Select Pickup District--</option>
                                           @foreach($districts as $district)
                                             <option value="{{$district->id}}">{{$district->name}}</option>
                                           @endforeach
                                       </select>
                                   </div>

                                   <div class="col-md-4">
                                       <select class="form-control" wire:model.lazy="destination_district_id" required>
                                           <option value="">--Select Destination District--</option>
                                           @foreach($districts as $district)
                                             <option value="{{$district->id}}">{{$district->name}}</option>
                                           @endforeach
                                       </select>
                                   </div>

                                   <div class="col-md-6 pt-2">
                                       <input wire:model.lazy="pick_up_point" class="form-control" placeholder="pickup Point" required/>
                                   </div>
                                   <div class="col-md-6 pt-2">
                                       <input wire:model.lazy="destination_up_point" class="form-control" placeholder="Destination Point" required/>
                                   </div>

                                   <div class="col-md-6 pt-2">
                                       <input type="date" wire:model.lazy="date" class="form-control" required/>
                                   </div>

                                   <div class="col-md-6 pt-2">
                                       <input wire:model.lazy="mobile" class="form-control" placeholder="Mobile" required/>
                                   </div>
<div class="col-md-12">
    <button class="btn btn-primary float-right">Rent Car</button>
</div>
                                </div>
</form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

                   <!-- End Card -->
                   <!-- Start Table -->
                   @if(count($rents)>0)
                   <table class="table table-dark mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Car</th>
      <th scope="col">Pickup District</th>
      <th scope="col">Destination District</th>
      <th scope="col">Pickup Point</th>
      <th scope="col">Destination Point</th>
      <th scope="col">Date</th>
      <th scope="col">Mobile</th>
      <th scope="col">Rent</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($rents as $rent)
    <tr>
      <th scope="row">1</th>
      <td>{{$rent->CarProfile->name}}</td>
      <td>{{$rent->District->name}}</td>
      <td>{{$rent->District1->name}}</td>
      <td>
          {{$rent->pick_up_point}}
          <input type="text" wire:model.lazy="pick_up_point_change"/>
        </td>
      <td>
          {{$rent->destination_up_point}}
          <input type="text" wire:model.lazy="destination_up_point_change"/>

        </td>
      <td>{{$rent->date}}</td>
      <td>
          {{$rent->mobile}}
          <input type="text" wire:model.lazy="mobile_change"/>
        </td>
      <td>
          @if($rent->rent)
          {{$rent->rent}}Tk
          @endif
        </td>
      <td>{{$rent->status}}</td>
      <td>
          @if($rent->status=="Is Agree?")
             <button class="btn btn-warning" wire:click="Agree({{$rent->id}})">Agree</button>
             <button class="btn btn-danger" wire:click="Disagree({{$rent->id}})">Disagre</button>
          @endif
          <button class="btn btn-info" wire:click="ChangePhone({{$rent->id}})"> Update</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                   <!-- End Table -->
                   @endif
                </div>
            </div>
        </div>
    </section>

    
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e05090259d.js" crossorigin="anonymous"></script>