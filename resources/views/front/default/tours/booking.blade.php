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
                <form action="mail.php" method="post">
                    <div class="card border-primary rounded-0">
                        <div class="card-body p-3">
                            <!--Body-->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control" name="full_name" placeholder="@lang('booking.full_name')" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                            </div>                                                
                                            <input type="text" class="form-control" name="phone" placeholder="@lang('booking.phone')" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                            <input type="email" class="form-control" name="email" placeholder="@lang('booking.email')" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                            </div>
                                            <input type="email" autocomplete="off" class="form-control" name="confirm_email" placeholder="@lang('booking.confirm_email')" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-location-arrow text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control" name="your_location" placeholder="@lang('booking.your_location')" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-calendar-alt text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" name="date_checkin" placeholder="@lang('booking.date_checkin')" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-calendar-alt text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control datepicker" name="date_checkout" placeholder="@lang('booking.date_checkout')" required>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                    <i class="fas fa-bookmark"></i> @lang('booking.book_now')
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4">           
            <div class="card" style="width: 100%;">
                <img src="{{ $tour["thumbnail_image"] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $tour["title"] }}</p>
                </div>
            </div>        
        </div>    
    </div>
    @section('booking')
    <div class="row">
        <div class="col-8">

        </div>
    </div>
    @endsection
@endsection