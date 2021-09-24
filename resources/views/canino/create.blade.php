@extends('layout.master')

@section('title', 'Cadastro Canino')

@section('content')
    <h4 class="mb-3">Cadastro de canino</h4>
    <form class="needs-validation" method="post" action="{{ route('canino.store') }}">
        @csrf
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @if($errors->first("name")) is-invalid @endif" id="name"
                       name="name" placeholder="Nome do seu pet..." value="{{ old("name") }}">
                <div class="invalid-feedback">
                    {{ $errors->first("name") }}
                </div>
            </div>

            <div class="col-sm-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select @if($errors->first("sexo")) is-invalid @endif" id="sexo"
                        name="sexo">
                    <option value="Fêmea" @if(old('sexo') == 'Fêmea') selected @endif>Fêmea</option>
                    <option value="Macho" @if(old('sexo') == 'Macho') selected @endif>Macho</option>
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first("sexo") }}
                </div>
            </div>

            <div class="col-3">
                <label for="raca_id" class="form-label">Raça</label>
                <select class="form-select @if($errors->first("raca_id")) is-invalid @endif" id="raca_id"
                        name="raca_id">
                    @foreach($racas as $raca)
                        <option value="{{ $raca->id }}" @if(old('raca_id') == $raca->id) selected @endif>{{ $raca->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first("raca_id") }}
                </div>
            </div>


            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
    </form>

@endsection
