<div class="group-input">
    <div class="input-form">
        <label for="name">Seu CEP</label>
        <input type="text" placeholder="Seu CEP" name="cep" wire:model="cep" value="{{ old('cep') }}">
    </div>
    @if($setCep)
        <div class="input-form">
            <label for="cep">Rua</label>
            <input type="text" placeholder="Rua" name="cep" value="{{ $setCep['logradouro'] }}">
        </div>
        <div class="input-form">
            <label for="cep">Bairro</label>
            <input type="text" placeholder="Rua" name="bairro" value="{{ $setCep['bairro'] }}">
        </div>
        <div class="input-form">
            <label for="cep">Localidade</label>
            <input type="text" placeholder="Cidade" name="cidade" value="{{ $setCep['localidade'] }}">
        </div>
        <div class="input-form">
            <label for="cep">UF</label>
            <input type="text" placeholder="Cidade" name="cidade" value="{{ $setCep['uf'] }}">
        </div>
    @endif
</div>
<div class="group-button-form">
    <button type="button" class="btn btn-light" wire:click="goToPreviousPage">Voltar</button>
    <button type="button" class="btn btn-primary" wire:click="getCep">Buscar CEP</button>
</div>