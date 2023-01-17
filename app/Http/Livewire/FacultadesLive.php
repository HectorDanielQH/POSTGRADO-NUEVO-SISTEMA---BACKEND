<?php

namespace App\Http\Livewire;

use App\Models\Facultad;
use Livewire\Component;
use Livewire\WithPagination;

class FacultadesLive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cant=10;
    public $search='';
    public $nombreFacultad;
    public function render()
    {
        if($this->search){
            return view('livewire.facultades-live',[
                'facultades' => Facultad::where('nombre','like','%'.$this->search.'%')->paginate($this->cant)
            ]);
        }else{
            return view('livewire.facultades-live',[
                'facultades' => Facultad::paginate($this->cant)
            ]);
        }
    }
    public function GuardarFacultad(){
        //recuperar post
        Facultad::create([
            'nombre' => $this->nombreFacultad
        ]);
        //REPINTAR PANTALLA por defecto
        $this->nombreFacultad="";
        return redirect()->to('/facultades');
    }
    public function actualizarFacultad($id){
        Facultad::updateOrCreate(['id' => $id],[
            'nombre' => $this->nombreFacultad
        ]);
        $this->nombreFacultad="";
        return redirect()->to('/facultades');
    }
    public function edit($id){
        $this->nombreFacultad=Facultad::find($id)->nombre;
    }
    public function EliminarFacultad($id){
        Facultad::destroy($id);
        return redirect()->to('/facultades');
    }
}
