<!--Listar os Detalhes do Plano-->

@extends('adminlte::page')

@section('title', "Detalhes do Serviço {$plan->name}")

@section('content_header')
    <!--Breadcrumb - aquele negócio em cima-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('plans.index') }}">Serviços</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('details.plan.index', $plan->url) }}" class="active">Detalhes</a>
        </li>
    </ol>
    <!--Melhorias no módulo de planos-->
    <!-- https://fontawesome.com/icons?d=gallery&q=add -->
    <h1>Detalhes do Serviço {{ $plan->name }}<a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-dark">ADD <i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            @include('admin.includes.alerts')

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="250">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>
                                {{ $detail->name }}
                            </td>
                            <!--<td>
                                R$ {{ number_format($plan->price, 2, ',', '.') }}
                            </td>-->
                            <td style="width=10px">
                                <!--Editar o Detalhe do Plano-->
                                <a href="{{ route('details.plan.edit', [$plan->url, $detail->id])}}" class="btn btn-info">EDITAR</a>
                                <!--Deletar Detalhes do Plano-->
                                <a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--criar paginação com links()-->
        <div class="card-footer">
            @if (isset($filters))
                {!! $details->appends($filters)->links() !!}
            @else
                {!! $details->links() !!}
            @endif
        </div>
    </div>
@stop
<!---->

