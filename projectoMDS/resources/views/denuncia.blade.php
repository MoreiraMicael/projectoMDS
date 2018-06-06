@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="denuncia">
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
          <form class="denuncia" action="index.html" method="post">
            kasjksadjadsk:<br>
            <input type="text" name="kasjksadjadsk" value="" placeholder="kasjksadjadsk"><br><br>
            jajsdafkafksd:<br>
            <input type="text" name="jajsdafkafksd" value="" placeholder="jajsdafkafksd"><br><br>
            ioereuwtiywee:<br>
            <input type="text" name="ioereuwtiywee" value="" placeholder="ioereuwtiywee"><br><br>
            <br>
            <input type="checkbox" name="anonimo" value="anonimo">Enviar Denuncia Anonima.<br><br>
            <button type="button" name="Enviar">Enviar Denuncia </button><br><br>
            <p>Ao carregar no botão Enviar Denuncia e tiver selecionado Enviar Denuncia Anonima não seram enviadas informações sobre si. </p><br>
          </form>
          @endif
          <br>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
