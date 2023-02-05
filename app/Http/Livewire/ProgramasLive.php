<?php

namespace App\Http\Livewire;

use App\Models\Programa;
use Livewire\Component;
use Livewire\WithPagination;
/*rol*/

class ProgramasLive extends Component
{
    public $cant=10;
    public $search;
    public function render()
    {
        if(auth()->user()->hasRole('administrador')){
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
        else{
            if(auth()->user()->hasRole('coordinador')){
                if($this->search){
                    return view('livewire.programas-live',[
                        'programas' => Programa::where('nombrePrograma','like','%'.$this->search.'%')
                                                ->where('coordinador_id', auth()->user()->id)->paginate($this->cant)
                    ]);
                }else{
                    return view('livewire.programas-live',[
                        'programas' => Programa::where('coordinador_id', auth()->user()->id)->paginate($this->cant)
                    ]);
                }
            }
        }
    }
    public function delete($id)
    {
        $programa = Programa::find($id);
        $programa->delete();
        session()->flash('message', 'Programa eliminado correctamente');
    }
}
