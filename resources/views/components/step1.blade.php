<div class="group-input">
    <div class="input-form">
        <label for="name">Seu nome</label>
        <input type="text" placeholder="Seu nome" name="name" wire:model="name">
    </div>
    <div class="input-form">
        <label for="email">Seu E-mail</label>
        <input type="email" placeholder="Seu email" name="email" wire:model="email">
    </div>
</div>
<div class="group-button-form">
    <button type="button" class="btn btn-light" disabled>Voltar</button>
    <button type="button" class="btn btn-primary" wire:loading.attr="disabled" wire:target="goToNextPage" wire:click="goToNextPage">
        <div class="spinner-border spinner-border-sm" role="status" wire:loading>
            <span class="visually-hidden"></span>
        </div>
        Avançar
    </button>
</div>