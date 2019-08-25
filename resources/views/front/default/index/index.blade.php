
@extends('front/default/layouts/app')
@section('sidebar')
    @parent
@endsection
@section('content')
<br /><br />
<div class="row">
    @foreach ($tours as $item)
        <div class="col-4">
            <div class="card text-white bg-secondary">
                <img class="card-img-top img-thumbnail" style="width: 250px;" src="{{ $item["thumbnail_image"] }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $item["title"] }}</h4>
                    <p class="card-text">
                    
                    </p>
                    <a class="btn btn-primary" href="<?=url("/tour/{$item["id"]}");?>" role="button"><i class="fas fa-bookmark"></i> Book Now</a>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($cars as $item)
        <div class="col-4">
            <div class="card text-white bg-secondary">
                <img class="card-img-top img-thumbnail" style="width: 250px;" src="{{ $item["thumbnail_image"] }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $item["title"] }}</h4>
                    <p class="card-text">
                    
                    </p>
                    <a class="btn btn-primary" href="/car/{{ $item["id"] }}" role="button"><i class="fas fa-bookmark"></i> Book Now</a>
                </div>
            </div>
        </div>
    @endforeach
</div>    
@endsection