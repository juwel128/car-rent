<div class="container">
    <div class="row">
        <divv class="col-md-12">
               <!-- Start Table -->
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
      @if($rent->CarProfileCheck)
    <tr>
      <th scope="row">1</th>
      <td>{{$rent->CarProfileCheck->name}}</td>
      <td>{{$rent->District->name}}</td>
      <td>{{$rent->District1->name}}</td>
      <td>{{$rent->pick_up_point}}</td>
      <td>{{$rent->destination_up_point}}</td>
      <td>{{$rent->date}}</td>
      <td>{{$rent->mobile}}</td>
      <td>
          @if($rent->rent)
          {{$rent->rent}}Tk
          @else
          <input type="number" wire:model.lazy="rent" placeholder="Rent"/>
          @error('rent') <span class="error" style="color:red;">{{ $message }}</span> @enderror
          @endif
        </td>
      <td>{{$rent->status}}</td>
      <td>
          <button class="btn btn-info" @if($rent->status!="Hold") disabled  @endif wire:click="IsAgree({{$rent->id}})">Request</button>
      </td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
                   <!-- End Table -->
        </divv>
    </div>
</div>
