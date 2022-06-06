@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center"> FAÇA SEU LOGIN</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-9">

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <p class="card-text">
                                Entre com as suas credenciais
                            </p>
                            <form method="POST" action="{{ route('auth.post-login') }}">
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           aria-describedby="emailHelp" placeholder="seu@email.com">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="password">Senha</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary mt-2 ">
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
