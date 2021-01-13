@extends('templates.main', ['titulo'=>"Detalhes - {$dados['nome']}",'tag'=>"show"])

@section('titulo') Detalhes @endsection

@section('conteudo')
<div class="card">
    <div class="card-body">
        <h3>Cidade: {{ $dados['nome'] }}</h3>
        <h4>Porte: {{ $dados['porte'] }}</h4>
        <hr>
        <a href="{{route('cidade.index')}}" type="button" class="btn btn-warning col-sm-2">voltar</a>
    </div>
</div>


@endsection