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


          <div class="alert alert-failure">
            <a href="">Bem-vindo <?php echo Auth::user()->name; ?> </a>
            <br>

            @if(Auth::user()->role == 'admin')
            <a href="">Admin</a>
            @endif
            <br>

            @if(Auth::user()->role == 'ps')
            <a href="">Profissional de Saude</a>
            @endif
            <br>

            @if(Auth::user()->role == 'utente')
            <a href="">Utente</a>
            @endif
            <br>

          </div>



        </div>
      </div>
    </div>
  </div>
</div>
@endsection
