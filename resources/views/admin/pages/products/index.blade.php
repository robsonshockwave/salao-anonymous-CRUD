<!--Organizar Rota e Preparar Listagem dos Planos no Laravel-->

@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <!--Breadcrumb - aquele negócio em cima-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('products.index') }}">Produtos</a>
        </li>
    </ol>
    <!--Melhorias no módulo de Planos-->
    <!-- https://fontawesome.com/icons?d=gallery&q=add -->
    <h1>Produtos <a href="{{ route('products.create') }}" class="btn btn-dark">ADD <i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <!--FILTRO - Pesquisar um plano-->
            <form action="{{ route('products.search') }}" method="POST" class="form form-inline">
                @csrf <!--sempre que for post utiliza o @ csrf-->
                <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? ''}}"> <!--esse value deixa o campo preenchido com último valor digitado-->
                <button type="submit" class="btn btn-dark">PESQUISAR</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Fornecedor</th>
                        <th>Marca</th>
                        <th width="260px">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                R$ {{ number_format($product->price, 2, ',', '.') }}
                            </td>
                            <td>
                                {{ $product->profile }}
                            </td>
                            <td>
                                {{ $product->brand }}
                            </td>
                            <td style="width=10px">
                                <!--Listar os Detalhes do Plano-->
                                {{-- <a href="{{ route('details.product.index', $product->id)}}" class="btn btn-primary">DETALHES</a> --}}
                                <!---->
                                <a href="{{ route('products.edit', $product->id)}}" class="btn btn-info">EDITAR</a>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--criar paginação com links()-->
        <div class="card-footer">
            @if (isset($filters))
                {!! $products->appends($filters)->links() !!}
            @else
                {!! $products->links() !!}
            @endif
        </div>
    </div>
@stop
<!---->

