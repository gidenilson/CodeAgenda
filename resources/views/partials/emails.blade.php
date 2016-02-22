<div class="panel panel-default">
  <!--div class="panel-heading">Emails</div-->
  <div class="panel-body">
<p><a href="{{route('email.create', ['pessoa_id'=>$pessoa->id])}}" class="label label-primary">Novo email</a></p>
<table class="table table-hover">
    @foreach($pessoa->emails as $email)
    <tr>
        <td>{{$email->email}}</td>
        <td>
            <a href="{{route('email.edit', ['id'=>$email->id])}}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
            <a href="{{route('email.delete', ['id'=>$email->id])}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
            
        </td>
    </tr>
    @endforeach
</table>
  </div>
</div>
