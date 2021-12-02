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
    public $count = 0;
    
    public function goToPreviousPage(){
        $this->currentPage -= 1;
    }
    public function goToNextPage(){
        sleep(2);
        $this->currentPage += 1;
    }

    public function getCep(){
        $this->count += 1;
        //$this->setCep = Http::get("viacep.com.br/ws/" . $this->cep . "/json/")->json();
    }
    
    public function render()
    {
        return view('livewire.form');
    }
}
