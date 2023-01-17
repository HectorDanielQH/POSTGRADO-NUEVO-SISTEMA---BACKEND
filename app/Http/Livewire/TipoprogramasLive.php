<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TipoPrograma;

class TipoprogramasLive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cant=10;
    public $search='';
    public $nombreTipoPrograma;
    public function render()
    {
        if($this->search){
            return view('livewire.tipoprogramas-live',[
                'tipoprogramas' => TipoPrograma::where('nombre','like','%'.$this->search.'%')->paginate($this->cant)
            ]);
        }else{
            return view('livewire.tipoprogramas-live',[
                'tipoprogramas' => TipoPrograma::paginate($this->cant)
            ]);
        }
    }
    public function GuardarTipoPrograma(){
        //recuperar post
        TipoPrograma::create([
            'nombre' => $this->nombreTipoPrograma
        ]);
        //REPINTAR PANTALLA por defecto
        $this->nombreTipoPrograma="";
        return redirect()->to('/tipoprogramas');
    }
    public function actualizarTipoPrograma($id){
        TipoPrograma::updateOrCreate(['id' => $id],[
            'nombre' => $this->nombreTipoPrograma
        ]);
        $this->nombreTipoPrograma="";
        return redirect()->to('/tipoprogramas');
    }
    public function edit($id){
        $this->nombreTipoPrograma=TipoPrograma::find($id)->nombre;
    }
    public function EliminarTipoPrograma($id){
        TipoPrograma::destroy($id);
        return redirect()->to('/tipoprogramas');
    }
}
