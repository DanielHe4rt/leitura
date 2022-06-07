@extends('layouts.app2')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">MINHAS CONSULTAS</div>
                <div class="card-body">
                    <div class="card-text text-center">Aqui será listada todas as suas consultas e agendamentos
                        passados
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>fodase</th>
                            <th>fodase</th>
                            <th>fodase</th>
                            <th>fodase</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(range(1, 5) as $nsei)
                            <tr>
                                <td>fodase</td>
                                <td>fodase</td>
                                <td>fodase</td>
                                <td>fodase</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-grid gap-2">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Voltar para o Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
