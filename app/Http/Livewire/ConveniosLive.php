<?php

namespace App\Http\Livewire;

use App\Models\Convenio;
use Livewire\Component;
use Livewire\WithPagination;

class ConveniosLive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cant=10;
    public $search='';
    public $nombreConvenio;
    public function render()
    {
        if($this->search){
            return view('livewire.convenios-live',[
                'convenios' => Convenio::where('nombre','like','%'.$this->search.'%')->paginate($this->cant)
            ]);
        }else{
            return view('livewire.convenios-live',[
                'convenios' => Convenio::paginate($this->cant)
            ]);
        }
    }
    public function GuardarConvenio(){
        //recuperar post
        Convenio::create([
            'nombre' => $this->nombreConvenio
        ]);
        $this->nombreConvenio="";
        return redirect()->to('/convenios');
    }
    public function actualizarConvenio($id){
        Convenio::updateOrCreate(['id' => $id],[
            'nombre' => $this->nombreConvenio
        ]);
        $this->nombreConvenio="";
        return redirect()->to('/convenios');
    }
    public function edit($id){
        $this->nombreConvenio=Convenio::find($id)->nombre;
    }
    public function EliminarConvenio($id){
        Convenio::destroy($id);
        return redirect()->to('/convenios');
    }
}
