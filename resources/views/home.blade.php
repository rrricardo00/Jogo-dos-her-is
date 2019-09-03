@extends('layouts.app')

  
  
@section('content')

<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/app2.css') }}">

<div class="container">
    <div class="row justify-content-center">

        
        <a href="#"><ion-icon class="icone-voltar btn btn-primary my-2" name="arrow-up"></ion-icon></a>

        <div class="col-lg-6 text-center">
            <h2>Quem será o vencedor?</h2>
            <img class="card-img-top figure-img img-fluid rounded imagemdefault" src="/storage/imagemdefault/default.png">
        </div>

        <!--Lista de Heróis-->
        <div class="col-lg-12 text-center">
            <div class="carousel">
                @foreach ($heroi as $h)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <img class="card-img-top figure-img img-fluid rounded image" src="/storage/{{ $h->arquivo }}">
                      <div class="card-body">
                      <p class="card-text">{{ $h->nomeheroi }}</p>
                      <p class="card-text">{{ $h->textoheroi }}</p>
                      <p class="card-text">{{ $h->emailheroi }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <form method="POST" action="/{{ $h->id }}">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                              </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach
              </div>
        </div>
        <!--Lista de Heróis-->
        
        <!--Gerar Ganhador-->
        <div class="col-lg-12 form-group">
              <p><a href="/ganhador" class="btn btn-primary my-2 form-control">Batalhem</a href="/ganhador"></p>
      </div>
        <!--Gerar Ganhador-->

        <section class="jumbotron text-center">
                <div class="container">
                  <h1 class="jumbotron-heading">Insira seu herói aqui</h1>
                  <form method="POST" action="/" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group text-left">
                            <label for="nomeheroi">Nome do herói</label>
                            <input type="text" class="form-control" id="nomeheroi" name="nomeheroi">
                    </div>
                    <div class="form-group text-left">
                      <label for="emailheroi">Endereço de e-mail</label>
                      <input type="email" class="form-control" id="emailheroi" name="emailheroi" placeholder="nome@dominio.com">
                    </div>
                    <div class="form-group text-left">
                      <label for="textoheroi">Texto Herói</label>
                      <textarea class="form-control" id="textoheroi" name="textoheroi" rows="3"></textarea>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="arquivo" name="arquivo">
                      <label class="custom-file-label text-left" for="arquivo">Adicione foto do herói</label>
                    </div>
                    <p>
                      <button type="submit" class="btn btn-primary my-2">Enviar</button>
                      <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
                    </p>
                  </form>
                </div>
              </section>
    </div>
</div>
<script src="{{ asset('https://code.jquery.com/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js') }}"></script>
<script src="{{ asset('https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js') }}"></script>
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
