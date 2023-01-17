<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class AdministradoresLive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cant=10;
    public $search='';
    public $nombreAdministrador;
    public $emailAdministrador;
    public $passwordAdministrador;

    public function render()
    {
        if($this->search){
            return view('livewire.administradores-live',[
                'administradores' => User::Role('administrador')    
                                        ->where('name','like','%'.$this->search.'%')
                                    ->paginate($this->cant)
            ]);
        }else{
            return view('livewire.administradores-live',[
                'administradores' => User::Role('administrador')->paginate($this->cant)
            ]);
        }
    }
    public function GuardarAdministrador(){
        //recuperar post
        User::create([
            'name' => $this->nombreAdministrador,
            'email' => $this->emailAdministrador,
            'password' => Hash::make($this->passwordAdministrador)
        ])->assignRole('administrador');
        $this->nombreAdministrador="";
        $this->emailAdministrador="";
        $this->passwordAdministrador="";
        return redirect()->to('/administradores');
    }
    public function actualizarAdministrador($id){
        User::updateOrCreate(['id' => $id],[
            'name' => $this->nombreAdministrador,
            'email' => $this->emailAdministrador,
            'password' => Hash::make($this->passwordAdministrador)
        ])->assignRole('administrador');
        $this->nombreAdministrador="";
        $this->emailAdministrador="";
        $this->passwordAdministrador="";
        return redirect()->to('/administradores');
    }
    public function edit($id){
        $this->nombreAdministrador=User::find($id)->name;
        $this->emailAdministrador=User::find($id)->email;
        $this->passwordAdministrador=User::find($id)->password;
    }
    public function EliminarAdministrador($id){
        User::destroy($id);
        return redirect()->to('/administradores');
    }
}
