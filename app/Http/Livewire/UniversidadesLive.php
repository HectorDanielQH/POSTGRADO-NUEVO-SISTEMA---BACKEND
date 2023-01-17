<?php

namespace App\Http\Livewire;

use App\Models\Universidad;
use Livewire\Component;
use Livewire\WithPagination;

class UniversidadesLive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cant=10;
    public $search='';
    public $nombreUniversidad;
    public function render()
    {
        if($this->search){
            return view('livewire.universidades-live',[
                'universidades' => Universidad::where('nombre','like','%'.$this->search.'%')->paginate($this->cant)
            ]);
        }else{
            return view('livewire.universidades-live',[
                'universidades' => Universidad::paginate($this->cant)
            ]);
        }
    }
    public function GuardarUniversidad(){
        //recuperar post
        Universidad::create([
            'nombre' => $this->nombreUniversidad
        ]);
        //REPINTAR PANTALLA por defecto
        $this->nombreUniversidad="";
        return redirect()->to('/universidades');
    }
    public function actualizarUniversidad($id){
        Universidad::updateOrCreate(['id' => $id],[
            'nombre' => $this->nombreUniversidad
        ]);
        $this->nombreUniversidad="";
        return redirect()->to('/universidades');
    }
    public function edit($id){
        $this->nombreUniversidad=Universidad::find($id)->nombre;
    }
    public function EliminarUniversidad($id){
        Universidad::destroy($id);
        return redirect()->to('/universidades');
    }
}
