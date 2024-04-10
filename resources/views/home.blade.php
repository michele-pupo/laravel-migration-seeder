@extends('layouts/app')

@section('content')
<div class="container py-5 d-flex flex-column justify-content-center">
    <h1 class="text-center fw-bold py-4">Tutti i treni in partenza oggi</h1>
    
    @foreach($trainsToday as $trainToday)
    <div class="row row-cols-1">
        <div class="card">
            <div class="card-body">
                <h2 class="train-agency py-1">Azienda: <span class="text-danger text-uppercase">{{$trainToday->agency}}</span></h2>
                <h3 class="train-departure-station py-1">Stazione di partenza: <span class="text-danger text-uppercase">{{$trainToday->departure_station}}</span></h3>
                <h3 class="train-arrival-station py-1">Stazione di arrivo: <span class="text-danger text-uppercase">{{$trainToday->arrival_station}}</span></h3>
                <h4 class="train-departure-time py-1">Giorno ed ora di partenza: <span class="text-danger text-uppercase">{{$trainToday->departure_time}}</span></h4>
                <h4 class="train-arrival-time py-1">Giorno ed ora di arrivo: <span class="text-danger text-uppercase">{{$trainToday->arrival_time}}</span></h4>
                <h5 class="train-code py-1">Codice treno: <span class="text-danger text-uppercase">{{$trainToday->train_code}}</span></h5>
                <h6 class="train-number-carriages py-1">Numero carrozze: <span class="text-danger text-uppercase">{{$trainToday->n_carriages}}</span></h6>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection