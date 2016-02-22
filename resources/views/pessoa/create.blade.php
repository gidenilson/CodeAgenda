@extends('layout')

@section('content')
<div class="col-md-6">
    <form action="{{route('contato.store')}}" method="post" class="form-horizontal">
        <div class="form-group {{$errors->has('nome') ? 'has-error' : ''}}" >
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" value="{{old('nome')}}" id="nome" placeholder="Nome completo">
            </div>
        </div>
        <div class="form-group {{$errors->has('apelido') ? 'has-error' : ''}}">
            <label for="apelido" class="col-sm-2 control-label">Apelido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="apelido" value="{{old('apelido')}}" id="apelido" placeholder="Apelido">
            </div>
        </div>
        <div class="form-group  {{$errors->has('sexo') ? 'has-error' : ''}}">
            <label class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" name="sexo" value="F" {{old('sexo') == 'F' ? 'checked' : null}}> <i class="fa fa-lg fa-female text-danger"></i>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sexo" value="M" {{old('sexo') == 'M' ? 'checked' : null}}> <i class="fa fa-lg fa-male text-info"></i>
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
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
