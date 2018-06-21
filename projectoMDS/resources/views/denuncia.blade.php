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
          {!! Form::open(
            array(
            'route' => 'criarDenuncia',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => true)) !!}
            <div class="form-group">
              {!! Form::label('Local') !!}<br>
              &nbsp; {!! Form::text('local', null, array('placeholder'=>'Local')) !!}
            </div>
            <div class="form-group">
              {!! Form::label('Descricao') !!}<br>
              &nbsp; {!! Form::textarea('descricao', null, array('placeholder'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.')) !!}
            </div>
            <div class="form-group">
              {{Form::label('denuncia_foto', 'Foto Denuncia')}}
              {{Form::file('denuncia_foto')}}
            </div>
            <div class="form-group">
              {{Form::label('Denunciar em Anonimo : ')}}
              {{Form::checkbox('anonimo', 'value', true)}}
            </div>
            <div class="form-group">
              {!! Form::submit('Criar Denuncia! ') !!}
            </div>
            {!! Form::close() !!}
          </div>
          @endif
          <br>
        </div>
      </div>
    </div>
  </div>
  @endsection
