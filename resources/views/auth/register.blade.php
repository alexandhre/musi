@extends('layouts.untop')

@section('content')

<section class="hero is-success is-fullheight">

    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-6 is-offset-3">
                <figure class="avatar">
                    <img src="img/logo_musi_2.png" alt="logo">
                </figure>
                <h3 class="title has-text-new-grey">Junte-se a nossa comunidade!</h3>
                <div class="is-12">                       
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <a class=" btn_facebook button">
                                    <i class="fa fa-facebook fa-2x " aria-hidden="true"></i> Facebook
                                </a>
                            </p>
                            <p class="control">
                                <a class=" btn_google button">
                                    <i class="fa fa-google fa-2x " aria-hidden="true"></i> Google
                                </a>
                            </p>
                        </div>
                        <div class="column is-6 is-offset-3"><div class="is-divider" data-content="O" ></div></div>

                        <h3 class="subtitle has-text-dark-blue has-text-weight-bold is-size-5">Cadastre-se grátis</h3>
                        <div class="field{{ $errors->has('name') ? ' is-danger' : '' }}">
                            <div class="control">
                                <input placeholder="Nome do usuário" id="name" type="text" class="input is-medium" name="name" value="{{ old('name') }}" required autofocus>                            

                                @if ($errors->has('name'))
                                <span class="help is-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input placeholder="Email" id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : 'is-medium' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help is-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                            <input placeholder="Senha" id="password" type="password" class="input {{ $errors->has('password') ? 'is-danger' : 'is-medium' }}" name="password" required>

                            </div>
                            @if ($errors->has('password'))
                            <span class="help is-danger">
                                <strong>O campo senha deve ter pelo menos 6 caracteres.</strong>
                            </span>
                            @endif   
                        </div>

                        <div class="field">
                            <div class="control">
                                <input placeholder="Confirmar Senha" id="password-confirm" type="password" class="input is-medium" name="password_confirmation" required>                                                    
                            </div>
                        </div>
                        <opcoes detalhe="#detalhe" modal="sim"></opcoes>

                        <div class="field has-text-left  has-text-dark-blue has-text-weight-semibold">
                            <label class="checkbox ">
                                <input type="checkbox">
                                Quero receber todas as novidades do Musi. 
                            </label>
                        </div>
                        <div class="field is-grouped is-grouped-centered mtl">
                            <button class="button is-block is-link is-large is-rounded">Concluir</button>
                        </div>                          
                    </form>
                    <div class="column is-6 is-offset-3"><div class="is-divider" data-content="O" ></div></div>
                </div>
                <div class="field has-text-centered is-size-5">                       
                    <label class="has-text-dark-blue ">
                        Você já tem uma conta em MUSI?
                        <a class="link has-text-dark-blue has-text-weight-semibold "  href="login.html">Iniciar sessão</a>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <modal nome="detalhe" titulo="Termo de Uso">

    </modal>

</section>

@endsection
