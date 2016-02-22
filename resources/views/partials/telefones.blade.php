<div class="panel panel-default">
  <!--div class="panel-heading">Telefones</div-->
  <div class="panel-body">
<p><a href="{{route('telefone.create', ['pessoa_id'=>$pessoa->id])}}" class="label label-primary">Novo telefone</a></p>
<table class="table table-hover">
    @foreach($pessoa->telefones as $telefone)
    <tr>
        <td>{{$telefone->descricao}}</td>
        <td>{{$telefone->numero}}</td>
        <td>
            <a href="{{route('telefone.edit', ['id'=>$telefone->id])}}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
            <a href="{{route('telefone.delete', ['id'=>$telefone->id])}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
            
        </td>
    </tr>
    @endforeach
</table>
  </div>
</div>
