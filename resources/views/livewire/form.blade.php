<main class="main">
    <div>
        <form action="" wire:submit.prevent="submitForm">
            @csrf
            <div class="form-group">
            @if ($currentPage > 0 && $currentPage < 3)
                <div class="form-group__step">
                    <span>{{ $currentPage }}</span>
                </div>
            @endif

            @switch($currentPage)
                @case(1) 
                    {{-- @include('components.step1')  --}}
                    <div class="group-input">
                        <div class="input-form">
                            <label for="name">Seu nome</label>
                            <input type="text" placeholder="Seu nome" name="name" wire:model="user.nome" value={{ old('name') }}>
                            @error('user.nome')<span style="color: #dc3545;">{{ $message }}</span>@enderror
                        </div>
                        <div class="input-form">
                            <label for="email">E-mail</label>
                            <input type="email" placeholder="Seu email" name="email" wire:model="user.email" value={{ old('email') }}>
                            @error('user.email')<span style="color: #dc3545;">{{ $message }}</span>@enderror
                        </div>
                        <div class="input-form">
                            <label for="tel">Telefone</label>
                            <input type="tel" placeholder="00 0 0000-0000" name="tel" wire:model="user.telefone" value={{ old('tel') }}>
                            @error('user.telefone')<span style="color: #dc3545;">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="group-button-form">
                        <button type="button" class="btn btn-light" disabled>
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        {{-- <button type="reset">
                            <i class="bi bi-arrow-counterclockwise"></i>
                        </button> --}}
                        
                        <button type="button" class="btn btn-primary" wire:loading.attr="disabled" wire:target="goToNextPage" wire:click="goToNextPage">
                            <div class="spinner-border spinner-border-sm" role="status" wire:loading>
                                <span class="visually-hidden"></span>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                @break
                
                @case(2)
                    {{-- @include('components.step2') --}}
                    <div class="group-input">
                        <div class="input-form">
                            <label for="name">Seu CEP</label>
                            <input type="text" placeholder="00000-000" name="cep" wire:model="user.cep" wire:key="getCep" wire:change="getCep" value={{ old('cep') }}>
                        </div>
                    
                        @if($setCep)
                        <div class="input-form">
                            <label for="rua">Rua</label>
                            <input type="text" placeholder="Rua" name="rua" value="{{ $setCep['logradouro'] }}">
                        </div>
                        <div class="input-form">
                            <label for="bairro">Bairro</label>
                            <input type="text" placeholder="Bairro" name="bairro" value="{{ $setCep['bairro'] }}">
                        </div>
                        <div class="input-form">
                            <label for="cidade">Cidade</label>
                            <input type="text" placeholder="Cidade" name="cidade" value="{{ $setCep['localidade'] }}">
                        </div>
                        <div class="input-form">
                            <label for="estado">Estado</label>
                            <input type="text" placeholder="Estado" name="estado" value="{{ $setCep['uf'] }}">
                        </div>
                        @endif
                    </div>
                    <div class="group-button-form">
                        <div>
                            <button type="button" class="btn btn-light" wire:click="goToPreviousPage">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" @if( !$user['cep']) disabled @endif wire:loading.attr="disabled" wire:target="goToNextPage" wire:click="goToNextPage">
                                <div class="spinner-border spinner-border-sm" role="status" wire:loading wire:target="submitForm">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                @break

                @case(3)
                    <div class="form-group__step last-step">
                        <span><i class="bi bi-check2-circle"></i></span>
                    </div>
                    <div class="last-step">
                        <h3>{{ $user['nome'] }}</h3>
                        <div>
                            <p>Seus dados</p>
                            <ol>
                                <li><strong>Celular:</strong> <a href="tel:+55{{ $user['telefone'] }}">{{ $user['telefone'] }}</a></li>
                                <li><strong>Email:</strong> <a href="mailto:{{ $user['email'] }}">{{ $user['email'] }}</a></li>
                                <li><strong>Endereço:</strong> Rua {{ $setCep['logradouro'] }}, {{ $setCep['bairro'] }}</li>
                                <li>{{ $setCep['localidade'] }} / {{ $setCep['uf'] }}</li>
                            </ol>
                        </div>
                    </div>
                    <div class="group-button-form">
                        <div>
                            <button type="button" class="btn btn-light" wire:click="goToPreviousPage">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="submitForm">
                                <div class="spinner-border spinner-border-sm" role="status" wire:loading wire:target="submitForm">
                                    <span class="visually-hidden"></span>
                                </div>
                            Confirmar
                        </button>
                    </div>
                @break

                @case(4)
                    <div>
                        <h3>Obrigado!</h3>
                        <p>Voltar para a <a href="">página inicial</a>.</p>
                    </div>
                @break

                @default
                    <div class="step-init">
                        <h3>Deseja se cadastrar?</h3>
                        <p>Após a confirmação será redicionado ao formulario com 3 etapas.</p>

                        <button type="button" class="btn btn-primary" wire:loading.attr="disabled" wire:target="goToNextPage" wire:click="goToNextPage">
                            <div class="spinner-border spinner-border-sm" role="status" wire:loading>
                                <span class="visually-hidden"></span>
                            </div>
                            Cadastrar
                        </button>
                    </div>
            @endswitch

            </div>
        </form>
    </div>
</main>