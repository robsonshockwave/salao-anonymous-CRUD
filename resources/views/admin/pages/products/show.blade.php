<!-- Detalhes e Deletar Perfil -->

@extends('adminlte::page')

@section('title', "Destalhes do Produto {$product->name}")

@section('content_header')
<h1>Detalhes do Produto <b>{{$product->name}}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!--Irá exibir todas as informações do plano-->
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $product->name }}
                </li>
                <li>
                    <strong>Preço: </strong> {{ $product->price }}
                </li>
                <li>
                    <strong>Fornecedor: </strong> {{ $product->profile }}
                </li>
                <li>
                    <strong>Marca: </strong> {{ $product->brand }}
                </li>
                <li>
                    <strong>Ano de Vencimento: </strong> {{ $product->validity }}
                </li>
                <li>
                    <strong>Observação: </strong> {{ $product->description }}
                </li>
            </ul>
            <!-- Não Permitir Deletar Plano com Detalhes -->
            @include('admin.includes.alerts')

            <!--Deletar um plano faça isso-->
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE') <!--quando for método post e delete usa esses dois-->
                <button type="submit" class="btn btn-danger">DELETAR O PRODUTO {{ $product->name }} <i class="far fa-trash-alt"></i></button>
            </form>
        </div>
    </div>

@endsection