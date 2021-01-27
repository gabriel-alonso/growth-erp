<div class="container">
    <div class="row">
        <div class="col-7">
            <!-- IMAGEM -->
        </div>
        <div class="col-5" style="background-color: #284ba0;">
            <div>
                <x-guest-layout>
                    <x-jet-authentication-card>
                        <x-slot name="logo">
                            <!-- LOGO -->
                            <!--<x-jet-authentication-card-logo />-->
                            <h2 class="h2 mt-3 mb-0">Criar Conta</h2>
                        </x-slot>

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa fa-user-plus"></i></span>
                                </div>
                                <!--<x-jet-label for="first-name" value="{{ __('Primeiro Nome') }}" />-->
                                <x-jet-input id="first-name" class="form-control" type="text"
                                    aria-describedby="basic-addon1" name="first-name" placeholder="Primeiro Nome"
                                    :value="old('first-name')" required autofocus autocomplete="first-name" />
                            </div>

                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa fa-user-plus"></i></span>
                                </div>
                                <!--<x-jet-label for="last-name" value="{{ __('Último Nome') }}" />-->
                                <x-jet-input id="last-name" placeholder="Último Nome" class="form-control" type="text"
                                    name="last-name" :value="old('last-name')" required autofocus
                                    autocomplete="last-name" />
                            </div>

                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa fa-envelope"></i></span>
                                </div>
                                <!--<x-jet-label for="email" value="{{ __('E-mail') }}" />-->
                                <x-jet-input id="email" placeholder="E-mail" class="form-control" type="email"
                                    name="email" :value="old('email')" required />
                            </div>

                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <!--<x-jet-label for="name" value="{{ __('Nome do Usuario') }}" />-->
                                <x-jet-input id="name" placeholder="Usuário" class="form-control" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                </div>
                                <!--<x-jet-label for="password" value="{{ __('Senha') }}" />-->
                                <x-jet-input id="password" placeholder="Senha" class="form-control" type="password"
                                    name="password" required autocomplete="new-password" />
                            </div>

                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                </div>
                                <!--<x-jet-label for="password_confirmation" value="{{ __('Confirmar senha') }}" /> -->
                                <x-jet-input id="password_confirmation" placeholder="Confirmar Senha"
                                    class="form-control" type="password" name="password_confirmation" required
                                    autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                    __('Terms of
                                                    Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                    __('Privacy
                                                    Policy') .
                                                    '</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                    {{ __('Já é registrado?') }}
                                </a>

                                <x-jet-button class="ml-4" style="background-color: black">
                                    {{ __('Criar conta') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </x-jet-authentication-card>
                </x-guest-layout>
            </div>
        </div>
    </div>
</div>
