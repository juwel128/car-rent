<div id="wrap">

    <div id="columns" class="columns_4">
        @foreach($cars as $car)
      <figure>
        <img src="{{ asset('storage/photo/'.$car->image) }}" style="height:200px;">
        <figcaption>{{$car->name}}</figcaption>
        <!-- <span class="price">$44</span> -->
        <a class="button" href="{{ route('rent-car',['id'=>$car->id]) }}">Rent</a>
      </figure>
        @endforeach
    </div>
