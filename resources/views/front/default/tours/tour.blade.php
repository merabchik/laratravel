
@extends('front/default/layouts/app')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="container-fluid">
    <br /><br />
    <div class="row">
        <div class="col-8">
            <div class="card" style="width: 100%;padding:5px;">
                {{$tour["description"]}}
            </div>
        </div>
        <div class="col-4">           
            <div class="card" style="width: 100%;">
                <img src="{{ $tour["thumbnail_image"] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $tour["title"] }}</p>
                </div>
            </div>
            <a class="btn btn-primary" href="<?=url("tour/booking/{{$tour["tour_id"]}}");?>" role="button"><i class="fas fa-bookmark    "></i></a>         
        </div>    
    </div>
    <div class="row">
        <div class="col-8">
            @section('similarTours')
                @foreach ($similarTours as $item)
                <div class="col-4">
                    <div class="card text-white bg-secondary">
                        <img class="card-img-top img-thumbnail" style="width: 250px;" src="{{ $item["thumbnail_image"] }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item["title"] }}</h4>
                            <p class="card-text"></p>
                            <a class="btn btn-primary" href="<?=url("/tour/{$item["id"]}");?>" role="button"><i class="fas fa-bookmark"></i> Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endsection
        </div>
    </div>
@endsection