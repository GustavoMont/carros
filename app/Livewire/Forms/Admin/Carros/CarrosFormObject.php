<?php

namespace App\Livewire\Forms\Admin\Carros;

use Livewire\Attributes\Rule;
use Livewire\Form;

class CarrosFormObject extends Form
{
    #[Rule('required|string|size:8')]
    public $placa;
    #[Rule('required|string')]
    public $modelo;
    #[Rule('required|string|max:45|min:2')]
    public $marca;
    #[Rule('required|digits:4')]
    public $ano;
    #[Rule('required|string|max:20|min:2')]
    public $cor;
    #[Rule('required|string|max:17|min:2')]
    public $chassi;
    #[Rule('required|decimal:0,2', as: 'valor da diária')]
    public $diaria;
    #[Rule('string|nullable', as: 'descrição')]
    public $descricao;

}
