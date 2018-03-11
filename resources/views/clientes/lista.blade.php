@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-35 col-md-offset-25">
            <div class="panel panel-default">
                <div class="panel-heading">Clientes Cadastrados
                	<a class="pull-right" href="{{ url('clientes/novo')}}">Adicionar novo usuário </a>
                </div>

                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success"> {{ Session::get('message') }} </div>
                    @endif
                    <table class="table">
                        <th>Name </th>
                        <th>CPF </th>
                        <th>Endereço </th>
                        <th>Email </th>
                        <th>Telefone</th>
                        <th>Acões</th>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->CPF}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->telefone}}</td>
                                <td>
                                    <a href="clientes/{{$cliente->id}}/editar" class="btn btn-default"> Editar </button>
                                        {!!Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display:inline;'])!!}
                                    <button type="submit" class="btn btn-default">Excluir</button>
                                        {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection