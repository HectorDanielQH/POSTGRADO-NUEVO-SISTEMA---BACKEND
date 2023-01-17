<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CoordinadoresLive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cant=10;
    public $search='';
    public $nombreCoordinador;
    public $emailCoordinador;
    public $passwordCoordinador;

    public function render()
    {
        if($this->search){
            return view('livewire.coordinadores-live',[
                'coordinadores' => User::Role('coordinador')    
                                        ->where('name','like','%'.$this->search.'%')
                                    ->paginate($this->cant)
            ]);
        }else{
            return view('livewire.coordinadores-live',[
                'coordinadores' => User::Role('coordinador')->paginate($this->cant)
            ]);
        }
    }
    public function GuardarCoordinador(){
        //recuperar post
        User::create([
            'name' => $this->nombreCoordinador,
            'email' => $this->emailCoordinador,
            'password' => Hash::make($this->passwordCoordinador)
        ])->assignRole('coordinador');
        $this->nombreCoordinador="";
        $this->emailCoordinador="";
        $this->passwordCoordinador="";
        return redirect()->to('/coordinadores');
    }
    public function actualizarCoordinador($id){
        User::updateOrCreate(['id' => $id],[
            'name' => $this->nombreCoordinador,
            'email' => $this->emailCoordinador,
            'password' => Hash::make($this->passwordCoordinador)
        ])->assignRole('coordinador');
        $this->nombreCoordinador="";
        $this->emailCoordinador="";
        $this->passwordCoordinador="";
        return redirect()->to('/coordinadores');
    }
    public function edit($id){
        $this->nombreCoordinador=User::find($id)->name;
        $this->emailCoordinador=User::find($id)->email;
        $this->passwordCoordinador=User::find($id)->password;
    }
    public function EliminarCoordinador($id){
        User::destroy($id);
        return redirect()->to('/coordinadores');
    }
}
