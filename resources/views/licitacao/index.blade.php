@extends('layouts.app', ["current" => "index"])

@section('content')


<div class="container">
    <div class="row justify-content">
        <div class="col col-12">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Licitações</li>
                </ol>
            </nav>
        </div>

        <div class="col col-3">
            <a href="{{ route('atualize') }}">
                <div class="card border-primary mb-3">
                    <div class="card-body">
                        <div class="text-center">Atualizar Base de Dados</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col col-3">
            <a href="{{ route('licitacoes') }}">
                <div class="card border-primary mb-3">
                    <div class="card-body">
                        <div class="text-center">Exibir Licitações</div>
                    </div>
                </div>
            </a>
        </div>    
        
    </div>
</div>

@endsection