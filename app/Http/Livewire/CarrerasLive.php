<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use Livewire\Component;
use Livewire\WithPagination;

class CarrerasLive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cant=10;
    public $search='';
    public $nombreCarrera;
    public function render()
    {
        if($this->search){
            return view('livewire.carreras-live',[
                'carreras' => Carrera::where('nombre','like','%'.$this->search.'%')->paginate($this->cant)
            ]);
        }else{
            return view('livewire.carreras-live',[
                'carreras' => Carrera::paginate($this->cant)
            ]);
        }
    }
    public function GuardarCarrera(){
        //recuperar post
        Carrera::create([
            'nombre' => $this->nombreCarrera
        ]);
        //REPINTAR PANTALLA por defecto
        $this->nombreCarrera="";
        return redirect()->to('/carreras');
    }
    public function actualizarCarrera($id){
        Carrera::updateOrCreate(['id' => $id],[
            'nombre' => $this->nombreCarrera
        ]);
        $this->nombreCarrera="";
        return redirect()->to('/carreras');
    }
    public function edit($id){
        $this->nombreCarrera=Carrera::find($id)->nombre;
    }
    public function EliminarCarrera($id){
        Carrera::destroy($id);
        return redirect()->to('/carreras');
    }
}
