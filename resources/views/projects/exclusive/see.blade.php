@extends('layouts.app2')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Projeto Exclusivo # {{ $project->id }}</div>
                <div class="card-body">
                    <div class="card-text text-center">
                        Veja as informações referentes ao seu projeto Exclusivo
                    </div>
                    <hr>
                    <form action="">
                        <div class="row mb-2">
                            <label for="dataSolicitacao" class="col-sm-4 col-form-label">Data de Solicitação</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="dataSolicitacao" value="{{ $project->delivery_at->format('Y-m-d') }}" disabled >
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="nomeTrabalho" class="col-sm-4 col-form-label">Nome do Trabalho</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nomeTrabalho" value="{{ $project->name }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="qqtarolando" class="col-sm-4 col-form-label">O que é?</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nomeTrabalho" value="{{ $project->short_description }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="qqtarolando" class="col-sm-4 col-form-label">Projeto</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nomeTrabalho" value="{{ $project->short_type }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Observações</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleTextarea" rows="4" disabled>
                                    {{ $project->description }}
                                </textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="d-grid gap-2">
                            <a href="{{ route('appointments-type') }}" class="btn btn-info">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
