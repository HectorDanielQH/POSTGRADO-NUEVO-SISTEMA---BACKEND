<?php

namespace App\Http\Livewire;

use App\Models\Programa;
use Livewire\Component;

class ProgramasLive extends Component
{
    public $cant=10;
    public $search;
    public function render()
    {
        /*$programas = Programa::all();
        return view('livewire.programas-live',compact('programas'));*/
        if($this->search){
            return view('livewire.programas-live',[
                'programas' => Programa::where('nombrePrograma','like','%'.$this->search.'%')->paginate($this->cant)
            ]);
        }else{
            return view('livewire.programas-live',[
                'programas' => Programa::paginate($this->cant)
            ]);
        }
    }
    public function delete($id)
    {
        $programa = Programa::find($id);
        $programa->delete();
        session()->flash('message', 'Programa eliminado correctamente');
    }
}
