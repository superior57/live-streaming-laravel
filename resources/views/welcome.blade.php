@extends('layouts.master')

@push('style')
<style>


div.allert-danger p {
    color: #EE3137;
}

.icon-table {
    margin-left: 10px;
    cursor: pointer;
}

input {
    width: 100%;
    padding: 5px 10px;
    border: 1px solid #a2a2a2;
    background-color: #fff;
    margin: 10px 0;
    color: #000000;
}
.bootstrap-select>button {
    margin-top: 0;
}

.bootstrap-select {
    margin-top: 10px;
}

.pre-logo {
    margin-top: 20px;
    margin-bottom: 20px;
}

.pessoas {
    min-height: 100vh;
}

.texto-topo {
    text-align: right;
}

.texto-topo h1 {
    color: #cf163f;
    font-weight: bold;
    font-size: 2.5rem;
    margin-bottom: 0;
}

.texto-topo h3 {
    color: #820b0f;
    font-size: 2.5rem;
    margin-top: 0;
}

#logo {
    margin-top: 5rem;
}

#logar {
    width: 100%;
    margin-top: 10px;
}

#logo img {
    margin: auto;
}

form {
    text-align: left;
    margin: 20px;
}

form label {
    font-size: 16px;
}

#modalLabel {
    color: #000;
}

.modal {
    text-align: left;
}
#btnLogin {
    width: 100%;
}

@media screen and (max-width: 579px) {
    #logo {
        margin-top: 15px;
    }

    .pre-logo {
        margin-top: 15px;
    }
}
</style>
@endpush

@section('content')

<div class="pessoas">
    <div class="wrapper" id="wrapper-index">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-xs-12 col-md-8 col-xl-10 col-xl-offset-1 col-md-offset-2">
                    <img class="img-responsive full-width" src="{{ asset('img/logo-back.jpg') }}">
                </div>
            </div>
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h2 style="font-weight: bold; color: #fff; margin-bottom: 0;" class="text-shadow">ENTRE E PARTICIPE!</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-xl-10 col-xl-offset-1 col-md-offset-2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-2">
                            <div class=" col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2" style="text-align: center">
                            <div class="col-12 col-sm-6 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit" id="btnLogin">ENTRAR</button>
                            </div>
                        </div>
                        <div class="row" style="text-align: center">
                            <div class="col-12 col-sm-6 col-sm-offset-3">
                            <a href="#">
                                <p class="text-bold text-shadow" style="color: #fff; font-size: 14px">Esqueceu a senha?</p>
                            </a>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    // $('#btnLogin').on('click', () => {
    //     window.location.href = "/home";
    // })
</script>
@endpush