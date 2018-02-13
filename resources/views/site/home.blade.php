@extends('templates.site-template')

{{-- Title --}}
@section('title')
  Home
@endsection

{{-- Body --}}
@section('body')
  <div class="container my-5">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="img/plaquetas/plaqamarela.png" alt="">
      </div>
      <div class="col-md-6">
        <h1 class="extrabold" style="font-size: 44px">Plaqueta Personalizadas</h1>
        <p>Fábricamos plaquetas óticas totalmente personalizadas.</p>
      </div>
    </div>
  </div>


  {{-- items York --}}
  <div class="container my-5">
    <div class="row">

      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <h5> <span class="fa fa-users"></span> Quem somos?</h5>
          </div>
          <div class="card-body">
            <p>YorkTelecom é uma empresa de revenda de equipamentos telecom e fabricação. Situada em Cotia- SP.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <h5><span class="fa fa-briefcase"></span> Vendemos</h5>
          </div>
          <div class="card-body">
            <p>Nós vendemos diversos produtos, desde a fabricação plaqueta optica até a revenda rede interna.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
              <h5><span class="fa fa-circle-notch"></span> Fabricamos</h5>
          </div>
          <div class="card-body">
            <p>Fábricamos equipamentos de telecom, cuidamos do seu produto desde a arte até o resultado final <a href="#">Saiba mais.</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
              <h5><span class="fa fa-circle-notch"></span> Atendimento</h5>
          </div>
          <div class="card-body">
            <p>Fábricamos equipamentos de telecom, cuidamos do seu produto desde a arte até o resultado final <a href="#">Saiba mais.</a></p>
          </div>
        </div>
      </div>
    </div> {{-- FIM DA ROW --}}
  </div> {{--FIM DO CONTAINER--}}


  {{-- ultimos produtos --}}
  <div class="container my-5">
    <div class="row">
      <h5>Últimos produtos adicionados</h5>
      @foreach ($produtos as $produto)
        <div class="col-md-4">
          teste
        </div>
      @endforeach
    </div>
  </div>


  <div class="">
    <div class="container">
      <form class="" action="index.html" method="post">
        {{ csrf_field() }}
        <div class="input-group my-5">
          <h3 class="mr-2">Receba promoções no seu e-mail.</h3>
          <input type="text" style="width:200px" class="form-control" placeholder="exemplo@exemplo.com">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Inscrever-se</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
