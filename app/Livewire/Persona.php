<?php

namespace App\Livewire;

use Livewire\Component;

class Persona extends Component
{
    public $nombre;
    public $edad;
    public $email;

    public $personas = array();

    protected $rules = [
        'nombre'=> 'required|min:3|max:30',
        'email' => 'required|email',
    ];


    public function guardarPersona(){
        $this->validate();
        $this->personas[]=["nombre"=>$this->nombre, "edad"=>$this->edad, "email"=>$this->email];
    }

    public function render()
    {
        return view('livewire.persona');
    }
}
