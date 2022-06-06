@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center"> MENU PRINCIPAL</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <p class="text-center">Olá {{ auth()->user()->name }}</p>
                            <hr>
                                <div class="d-flex justify-content-center ">
                                    <a href="{{ route('appointments.my-appointments') }}" class="btn btn-primary btn-lg m-2">Visualizar Solicitações</a>
                                    <a href="#" class="btn btn-primary btn-lg m-2">Nova Solicitação</a>
                                </div>
                            <hr>
                            <div class="d-grid gap-2">
                                <button class="btn btn-danger btn-lg m-2">
                                    Sair
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
