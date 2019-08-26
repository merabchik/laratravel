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
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                </div>
                                                <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
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
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                </div>
                                                <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
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
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                </div>
                                                <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
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
            <a class="btn btn-primary" href="<?=url("tour/booking/{$tour["tour_id"]}");?>" role="button">
                <i class="fas fa-bookmark"></i> @lang('booking.book_now')
            </a>         
        </div>    
    </div>
    @section('booking')
    <div class="row">
        <div class="col-8">

        </div>
    </div>
    @endsection
@endsection