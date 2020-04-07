@extends('adminlte::page')

@section('title', 'Novo Usuário')
    
@section('content_header')
    <h1 style="float: left;">Novo Usuário</h1> <a href="{{route('users.index')}}" class="btn btn-sm btn-dark" style="float: right;">VOLTAR</a><br>
@endsection

@section('content')

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                <ul>
                @foreach ($errors->all() as $error)
                    
                    <li>{{ $error }}</li>

                @endforeach
                </ul>
            </div>
        @endif
        
        <div class="card">
            <div class="card-body">
                <form action=" {{ route('users.store') }}" class="form-horizontal" method="POST">
                    @csrf
        
                    <div class="form-group">
                        <div class="row">
                            <label for="name" class="col-sm-2 control-label">Nome Completo:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="row">
                            <label for="email" class="col-sm-2 control-label">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="row">
                            <label for="data_nascimento" class="col-sm-2">Data Nascimento:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control @error('data_nascimento') is-invalid @enderror" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento') }}">
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="row">
                            <label for="password" class="col-sm-2 control-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="row">
                            <label for="password_confirmation" class="col-sm-2 control-label">Confirmação da Senha:</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" value="Cadastrar" class="btn btn-block btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
    
@endsection