@extends('layout.master')

@section('title', 'Atualizar Canino')

@section('content')
    <h4 class="mb-3">Atualizar de canino</h4>
    <form class="needs-validation" method="post" action="{{ route('canino.edit', ['canino' => $canino->id]) }}">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @if($errors->first("name")) is-invalid @endif" id="name"
                       name="name" placeholder="Nome do seu pet..." value="{{ old("name") ?? $canino->name }}">
                <div class="invalid-feedback">
                    {{ $errors->first("name") }}
                </div>
            </div>

            <div class="col-sm-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select @if($errors->first("sexo")) is-invalid @endif" id="sexo"
                        name="sexo">
                    <option value="Fêmea" {{ (old('sexo') == 'Fêmea' ? 'selected' : ($canino->sexo == 'Fêmea' ? 'selected' : '')) }}>Fêmea</option>
                    <option value="Macho" {{ (old('sexo') == 'Macho' ? 'selected' : ($canino->sexo == 'Macho' ? 'selected' : '')) }}>Macho</option>
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
                        <option value="{{ $raca->id }}" {{ (old('raca_id') == $raca->id) ? 'selected' : ($raca->id == $canino->raca_id ? 'selected' : '')}}>{{ $raca->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first("raca_id") }}
                </div>
            </div>


            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
        </div>
    </form>

@endsection
