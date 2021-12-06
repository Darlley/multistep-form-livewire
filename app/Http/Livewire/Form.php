<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Form extends Component
{
    /* public $pages = [
        1 => [
            'titulo' => 'Informações pessoais',
            'subtitulo' => 'Entre com seu nome e endereço email'
        ],
        2 => [
            'titulo' => "Endereço",
            'subtitulo' => 'Entre com seu endereço'
            ]
        ]; */
        
    // models
    public $currentPage = 0;
    public $user = [
        'nome' => '',
        'email' => '',
        'telefone' => '',
        'cep' => "",        
    ];
    public $setCep;

    protected $rules = [
        'user.nome' => 'required|min:3',
        'user.email' => 'required|email',
        'user.telefone' => 'required|min:11|max:11',
        'user.cep' => 'required|min:8|max:8',
    ];
    protected $messages = [
        'user.nome.required' => 'Campo do nome não preenchido.',
        'user.nome.min' => 'Informe um nome com no mínimo 3 caracteres (ex. Bob).',
        'user.email.required' => 'Campo de e-mail não preenchido.',
        'user.email.email' => 'Campo de e-mail não preenchido corretamente. (example@mail.com)',
        'user.telefone.required' => 'Campo de número não preenchido.',
        'user.telefone.min' => 'Número muito pequeno.',
        'user.telefone.max' => 'Número muito grande.',
        'user.cep.required' => 'Campo do CEP não preenchido.',
        'user.cep.min' => 'Número de CEP muito pequeno.',
        'user.cep.max' => 'Número de CEP muito grande.'
    ];

    
    public function goToNextPage(){
        sleep(1);
        $this->currentPage > 0 && $this->validate();
        $this->currentPage += 1;
    }
    public function goToPreviousPage(){
        sleep(1);
        $this->currentPage -= 1;
    }

    public function getCep(){
        $this->setCep = Http::get("viacep.com.br/ws/" . $this->user['cep'] . "/json/")->json();
    }

    public function submitForm(){
        $this->currentPage += 1;
        $validateData = $this->validate();
    }
    
    public function render()
    {
        return view('livewire.form');
    }

}
