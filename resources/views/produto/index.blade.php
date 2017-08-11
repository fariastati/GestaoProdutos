@extends('produto.template.template1')

@section('')
<h1>Lista Produtos</h1>
@endsection

<a href="{{route('produtos.adicionar')}}" class="btn btn-default">
    <span class="glyphicon glyphicon-plus">
</span>>Adicionar</a>

<table class="table table-hover">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Unidade de Medida</th>
        <th>Ações</th>
    </tr>
    @foreach($produtos as $produtos)
    <tr>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->uniMedida}}</td>
        <td>
            <a href="{{route('produto.editar',$product->id)" class="actions editar">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="{{route('produto.deletar',$product->id)}}" class="actions deletar">
                <span class="glyphicon glyphicon-erase"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@push('scripts')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

@endpush