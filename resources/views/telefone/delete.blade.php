@extends('layout')

@section('content')
<div class="col-md-6">
    <h3>Deseja realmente apagar este telefone?</h3><br />
    <h4>{{$telefone->descricao}} : {{$telefone->numero}}</h4>
    <form action="{{route('telefone.destroy', ['id'=>$telefone->id])}}" method="post">
        <input type="hidden" name="_method" value="delete"/>
        <button type="submit" class="btn btn-danger">Apagar</button>
        <a href="{{ app('request')->headers->get('referer') }}" class="btn btn-primary">Voltar</a>
    </form>
    
</div>
<div class="col-md-6">
    @include('partials.contato')
</div>
@endsection
