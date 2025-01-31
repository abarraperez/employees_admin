@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Evento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('events.update', $appointment) }}">
                        @csrf
                        @method('PUT') <!-- Usamos PUT para actualizar el recurso -->

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $appointment->title) }}" required autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_time" class="col-md-4 col-form-label text-md-right">{{ __('Fecha y Hora de Inicio') }}</label>
                            <div class="col-md-6">
                                <input id="start_time" type="datetime-local" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time', $appointment->start_time) }}" required>
                                @error('start_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="finish_time" class="col-md-4 col-form-label text-md-right">{{ __('Fecha y Hora de Finalización') }}</label>
                            <div class="col-md-6">
                                <input id="finish_time" type="datetime-local" class="form-control @error('finish_time') is-invalid @enderror" name="finish_time" value="{{ old('finish_time', $appointment->finish_time) }}" required>
                                @error('finish_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comments" class="col-md-4 col-form-label text-md-right">{{ __('Comentarios') }}</label>
                            <div class="col-md-6">
                                <textarea id="comments" class="form-control @error('comments') is-invalid @enderror" name="comments">{{ old('comments', $appointment->comments) }}</textarea>
                                @error('comments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar Evento') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
