
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
                {{$pessoa->apelido}}
                <span class="pull-right">
                    <a href="{{route('contato.edit', ['id'=>$pessoa->id])}}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                    <a href="{{route('contato.delete', ['id'=>$pessoa->id])}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
                </span>
            </h3>
        </div>
        <div class="panel-body">
            <h3>{{$pessoa->nome}}</h3>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tels-{{$pessoa->id}}" aria-controls="tels-{{$pessoa->id}}" role="tab" data-toggle="tab">Telefones</a></li>
                <li role="presentation"><a href="#mails-{{$pessoa->id}}" aria-controls="mails-{{$pessoa->id}}" role="tab" data-toggle="tab">Emails</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tels-{{$pessoa->id}}">
                    @include('partials.telefones', ['pessoa'=>$pessoa])
                </div>
                <div role="tabpanel" class="tab-pane" id="mails-{{$pessoa->id}}">
                    @include('partials.emails', ['pessoa'=>$pessoa])
                </div>
            </div>
        </div>
    </div>

