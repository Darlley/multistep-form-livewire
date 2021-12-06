<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Form extends Component
{
    public $currentPage = 0;
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
    public $user = [
        'nome' => '',
        'email' => '',
        'telefone' => '',
        'cep' => "",        
    ];
    public $setCep;

    public $count = 0;
    
    public function goToNextPage(){
        sleep(1);
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

        // lógica de validação
    }
    
    public function render()
    {
        return view('livewire.form');
    }

}
