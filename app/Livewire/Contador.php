<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $contador = 0;

    public function incrementar(){
        $this->contador = $this->contador + 1;
    }

    public function render()
    {

        //resources/views/livewire/contador.blade.php
        return view('livewire.contador');
    }
}
