@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center"> FAÇA SEU LOGIN</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-9">
                            <p class="card-text">
                                Entre com as suas credenciais
                            </p>
                            <form method="POST" action="{{ '??' }}">
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                           placeholder="Password">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary mt-2 ">
                                        Entrar
                                    </button>
                                </div>
                            </form>

                            <div class="d-grid text-center mt-2">
                                <a href="#">Cadastro</a>
                                <a href="#">Esqueci minha senha</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
