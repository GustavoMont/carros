<?php

namespace App\Livewire\Admin\Carros;

use App\Livewire\Forms\Admin\Carros\CarrosFormObject;
use App\Models\Car;
use Livewire\Component;

class CarrosForm extends Component
{
    public CarrosFormObject $form;
    public function salvar() {
        $this->validate();
        
       //Mass Assignment
       Car::create($this->form->all());

        //Vou gravar mensagem na sessão
        //O flash é para que a mensagem seja apagada da sessão logo após ser exibida
        session()->flash('toast', 'Carro salvo com sucesso!');

        //Redireciona para a lista de carros
        $this->redirect('/carros', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.carros.carros-form');
    }
}
