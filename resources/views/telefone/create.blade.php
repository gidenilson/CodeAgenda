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
                    {{$pessoa->apelido}} : novo telefone
                    <span class="pull-right">
                        <i class="fa fa-phone"></i>
                    </span>
                </h3>
            </div>
            <div class="panel-body">
                <form action="{{route('telefone.store')}}" method="post" >
                    <input type="hidden" name="pessoa_id" value="{{$pessoa->id}}" />
                    <div class="form-horizontal">
                        <div class="form-group {{$errors->has('descricao') ? 'has-error' : ''}}" >
                            <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-10">
                                <select class="form-control" value="{{old('descricao')}}" name="descricao" placeholder="descrição">
                                    <option value="">--------</option>
                                    <option value="residencial" {{old('descricao') == 'residencial' ? 'selected' : null}}>residencial</option>
                                    <option value="comercial" {{old('descricao') == 'comercial' ? 'selected' : null}}>comercial</option>
                                    <option value="celular" {{old('descricao') == 'celular' ? 'selected' : null}}>celular</option>

                                </select>
                                <!--input type="text" class="form-control" name="descricao" value="{{old('descricao')}}" id="descricao" placeholder="Descrição"-->
                            </div>
                        </div>


                        <div class="form-group form-group-sm col-sm-2">

                            <input type="text" class="form-control" name="codpais" id="codpais" placeholder="cód. país">
                        </div>
                        <div class="form-group form-group-sm col-sm-2">

                            <input type="text" class="form-control" id="ddd" name="ddd" placeholder="ddd">
                        </div>
                        <div class="form-group form-group-sm col-sm-4">

                            <input type="text" class="form-control" name="prefixo" id="codpais" placeholder="prefixo">
                        </div>
                        <div class="form-group form-group-sm col-sm-4">                            
                            <input type="text" class="form-control" id="sufixo" name="sufixo" placeholder="sufixo">
                        </div> 
                        <div class="form-group form-group-sm col-sm-3 pull-right">                            
                            <input type="submit" class="form-control btn btn-primary"  placeholder="sufixo">
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