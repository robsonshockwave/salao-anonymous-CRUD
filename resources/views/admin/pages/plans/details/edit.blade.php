<!--Editar o Detalhe do Plano-->

@extends('adminlte::page')

@section('title', "Editar o detalhe do Serviço {$detail->name}")

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
        <li class="breadcrumb-item">
            <a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('details.plan.edit', [$plan->url, $detail->id]) }}" class="active">Editar</a>
        </li>
    </ol>
    <!--Melhorias no módulo de planos-->
    <!-- https://fontawesome.com/icons?d=gallery&q=add -->
    <h1>Editar o detalhe do Serviço {{ $detail->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('details.plan.update', [$plan->url, $detail->id]) }}" method="post">
                @method('PUT')
                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
    </div>
@endsection