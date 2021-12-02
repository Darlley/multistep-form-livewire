<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Form extends Component
{
    public $currentPage = 1;
    public $pages = [
        1 => [
            'titulo' => 'Informações pessoais',
            'subtitulo' => 'Entre com seu nome e endereço email'
        ],
        2 => [
            'titulo' => "Endereço",
            'subtitulo' => 'Entre com seu endereço'
        ]
    ];

    // models
    public $name;
    public $email;
    public $cep;
    public $setCep;

    public function goToNextPage(){
        $this->currentPage += 1;
    }
    public function goToPreviousPage(){
        $this->currentPage -= 1;
    }

    public function getCep(){
        $this->setCep = Http::get("viacep.com.br/ws/" . $this->cep . "/json/")->json();
    }
    
    public function render()
    {
        return view('livewire.form');
    }
}
