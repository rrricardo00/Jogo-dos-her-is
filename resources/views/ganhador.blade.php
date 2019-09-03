@extends('layouts.app')

  
  
@section('content')

<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/app2.css') }}">

<div class="container">
    <div class="row justify-content-center">

        <!--Herói ganhador-->
        <div class="col-lg-12 text-center">
                <div class="col-lg-12 text-center">
                    
                        @foreach ($ganhador as $h)
                        <div class="col-md-12">
                            <div class="card-header">VENCEDOR</div>
                            <div class="card mb-4 shadow-sm">
                            <img class="card-img-top figure-img img-fluid rounded image2" src="/storage/{{ $h->arquivo }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="card-text">E o heró vencedor da rodada foi: {{ $h->nomeheroi }}. Parabéns, a luz te escolheu jovem guerreiro</p>
                            </div>
                            </div>
                        </div>
                        @endforeach
                </div>
        </div>
        <!--Herói ganhador-->

        <div class="col-lg-12 text-center form-group">
            <h3><a href="/home" class="btn btn-primary my-2 form-control">Voltar</a></h3>
        </div>
       
    </div>
</div>
<script src="{{ asset('https://code.jquery.com/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js') }}"></script>
<script>
$('.carousel').slick({
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 3,
});
</script>
@endsection

    
