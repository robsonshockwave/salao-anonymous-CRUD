<!-- Cadastrar Novo Plano -->

@extends('adminlte::page')

@section('title', 'Cadastrar Novo Produto')

@section('content_header')
<h1>Cadastrar Novo Produto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!--criando um form em bootstrap-->
            <form action="{{ route('products.store') }}" class="form" method="POST">
                <!--esse @ csrf é usado para questões de segurança e ele retorna erro também-->
                @csrf

                @include('admin.pages.products._partials.form')
            </form>
        </div>
    </div>
@endsection