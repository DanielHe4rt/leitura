@extends('layouts.app2')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">AGENDAR NOVA CONSULTA</div>
                <div class="card-body">
                    <div class="card-text text-center">Preencha o formulário abaixo para agendar uma nova consulta</div>
                    <hr>
                    <form action="">
                        <div class="row mb-2">
                            <label for="dataSolicitacao" class="col-sm-4 col-form-label">Data de Solicitação</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="dataSolicitacao">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="qtdMedicos" class="col-sm-4 col-form-label">Qtd. Médicos</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="qtdMedicos">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="grantMedico" class="col-sm-4 col-form-label">Grant Médico</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="grantMedico">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="nomeTrabalho" class="col-sm-4 col-form-label">Nome do Trabalho</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nomeTrabalho">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">O que é?</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="qtdMedicos">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="format" class="col-sm-4 col-form-label">Formato</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="format'">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Tipo de Papel</label>
                            <div class="col-sm-8">
                                <div class="d-flex">
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Tipo de Impressão</label>
                            <div class="col-sm-8">
                                <div class="d-flex">
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">N de Paginas</label>
                            <div class="col-sm-8">
                                <div class="d-flex">
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Acabamento</label>
                            <div class="col-sm-8">
                                <div class="d-flex">
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Acabamento</label>
                            <div class="col-sm-8">
                                <div class="d-flex">
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="format" class="col-sm-4 col-form-label">Somente Editorial</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="format'">
                                    <option>Sim</option>
                                    <option>Não</option>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Observações</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">Solicitar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
