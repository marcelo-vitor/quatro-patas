@extends('layout.master')

@section('title', 'Atualizar raça')

@section('content')
    <h4 class="mb-3">Atualizar de raça</h4>
    <form class="needs-validation" method="post" action="{{ route('raca.edit', ['raca' => $raca->id]) }}">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @if($errors->first("name")) is-invalid @endif" id="name"
                       name="name" placeholder="Nome da raça..." value="{{ old("name") ?? $raca->name }}">
                <div class="invalid-feedback">
                    {{ $errors->first("name") }}
                </div>
            </div>


            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
        </div>
    </form>

@endsection
