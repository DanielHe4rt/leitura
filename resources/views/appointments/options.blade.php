@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center"> SELECIONE UMA SOLICITAÇÃO</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-10 col-md-9">
                            <p class="text-center">Olá {{ auth()->user()->name }}</p>
                            <hr>
                            <div class="d-grid gap-2">
                                <a href="{{ route('appointments.new-appointment') }}" class="btn btn-primary btn-lg m-2">Solicitar Orçamento</a>
                                <a href="{{ route('appointments.new-model') }}" class="btn btn-primary btn-lg m-2">Solicitar Modelo</a>
                                <a href="{{ route('appointments.new-meeting') }}" class="btn btn-primary btn-lg m-2">Agendar Reunião</a>
                                <a href="{{ route('appointments.new-exclusive') }}" class="btn btn-primary btn-lg m-2">Projeto Exclusivo</a>
                            </div>
                            <hr>
                            <div class="d-grid gap-2">
                                <a href="{{ route('dashboard') }}" class="btn btn-info btn-lg m-2">
                                    Voltar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
