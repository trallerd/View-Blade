@extends('templates.main', ['titulo'=>'Cidades','tag'=>"show"])

@section('titulo') Cidades @endsection

@section('conteudo')
<a href="{{ route('cidade.create') }}">
    <button type="button" class="btn btn-primary btn-lg btn-block">Cadastrar nova Cidade</button>

</a>
<hr>
<x-tablelist :header="['Cidade', 'Eventos']" :data="$cidades"/>
@endsection