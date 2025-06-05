<?php

namespace App\Livewire;

use Livewire\Component;

class Tareas extends Component
{
    public $tarea = "Mi Tarea";
    public $mis_tareas = [];

    public function addTarea(){
        $this->mis_tareas[] = $this->tarea;
        $this->tarea ="";
    }

    public function render()
    {
        return view('livewire.tareas');
    }
}
