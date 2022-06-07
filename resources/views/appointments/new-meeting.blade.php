@extends('layouts.app2')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">SOLICITAÇÃO DE REUNIÃO</div>
                <div class="card-body">
                    <div class="card-text text-center">Preencha o formulário e detalhe sobre o quê você deseja nessa
                        reunião.
                    </div>
                    <hr>
                    <form action="">
                        <div class="row mb-2">
                            <label for="dataSolicitacao" class="col-sm-4 col-form-label">Data de Solicitação</label>
                            <div class="col-sm-8">
                                <input type="datetime-local" class="form-control" id="dataSolicitacao">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Observações</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Solicitar</button>
                            <a href="{{ route('appointments-type') }}" class="btn btn-info">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
