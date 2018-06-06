@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          You are logged in!


          <a href="">Bem-vindo <?php echo Auth::user()->name; ?> </a>
          <br>
          <br>

          @if(Auth::user()->role == 'admin')
          <a href="">Aprovar Denuncias</a>
          <br>

          <a href="">Rever Denuncias</a>
          @endif
          <br>

          @if(Auth::user()->role == 'ps')
          <a href="">Rever Denuncias</a>
          @endif
          <br>

          @if(Auth::user()->role == 'utente')
          <a href="/denuncia">Criar Denuncia</a>
          @endif
          <br>

        </div>



      </div>
    </div>
  </div>
</div>
</div>
@endsection
