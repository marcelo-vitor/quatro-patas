@extends('layout.master')

@section('title', 'Quatro Patas')

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

    <div>
        <h2>Caninos</h2>
        <a href="{{ route('canino.create') }}">
            <button class="btn btn-primary" style="float: right;">Novo</button>
        </a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Raça</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($caninos as $canino)
                <tr>
                    <th scope="row">{{$canino->id}}</th>
                    <td>{{$canino->name }}</td>
                    <td>{{$canino->sexo }}</td>
                    <td>{{$canino->raca->name }}</td>
                    <td class="d-flex">
                        <a href="{{route('canino.update', ['canino' => $canino->id])}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form method="post" action="{{route('canino.destroy', ['canino' => $canino->id])}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger mx-2">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
