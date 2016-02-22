@extends('layout')

@section('content')
<div class="col-md-6">

    @if($pessoa->sexo == 'F')
    <div class="panel panel-danger">
        @else
        <div class="panel panel-info">
            @endif

            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="pull-left"> 
                        @if ($pessoa->sexo == 'F')
                        <i class="fa fa-female"></i>
                        @else
                        <i class="fa fa-male"></i>
                        @endif                
                    </span>
                    {{$pessoa->apelido}} : novo email
                    <span class="pull-right">
                        <i class="fa fa-phone"></i>
                    </span>
                </h3>
            </div>
            <div class="panel-body">
                <form action="{{route('email.store')}}" method="post" class="form-horizontal">
                    <input type="hidden" name="pessoa_id" value="{{$pessoa->id}}" />
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}" >
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" value="{{old('email')}}" id="nome" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        @endsection