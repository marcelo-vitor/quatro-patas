@extends('layout.master')

@section('title', 'Quatro Patas')

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

    <div>
        <h2>Raças</h2>
        <a href="{{ route('raca.create') }}">
            <button class="btn btn-primary" style="float: right;">Novo</button>
        </a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($racas as $raca)
                <tr>
                    <th scope="row">{{$raca->id}}</th>
                    <td>{{$raca->name }}</td>
                    <td class="d-flex">
                        <a href="{{route('raca.update', ['raca' => $raca->id])}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form method="post" action="{{route('raca.destroy', ['raca' => $raca->id])}}">
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
