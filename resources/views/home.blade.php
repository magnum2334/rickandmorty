@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($datacharacters['results'] as $dat)
        <div class="col-md-4">
            <div class="card m-2" bis_skin_checked="1" style="background:rgb(32, 35, 41)">
                <img class="card-img-top" src="{{ $dat['image'] }}" alt="Card image cap">
                <div class="card-body" bis_skin_checked="1">
                    <div class="row">
                        <div class="col-sm-8">
                            <h4 class="card-title"><strong class="name" style="font-family: 'Lobster Two', cursive; color:#fff;">{{ $dat['name'] }}</strong></h4>
                            <p class="card-text">
                                <p><strong style="color:rgb(146, 146, 146)">Last known location</strong></p>
                                <p><strong style="color:#fff">{{ $dat['location']['name'] }}</strong></p>
                                <p><strong style="color:rgb(146, 146, 146)">Specie</strong></p>
                                <p><strong  style="color:#fff">{{ $dat['species'] }}</strong></p>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-center" ><strong  style="color:rgb(146, 146, 146)">Status</strong></p>
                            <p class="text-center" ><strong style="color:#fff"> {{ $dat['status'] }}</strong></p>
                            <p class="text-center" ><strong  style="color:rgb(146, 146, 146)">Origin</strong></p>
                            <p class="text-center" ><strong style="color:#fff"> {{ $dat['origin']['name'] }}</strong></p>
                            <p class="text-center" ><strong style="color:#fff"> {{ $dat['type'] }}</strong></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
