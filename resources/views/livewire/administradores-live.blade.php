<div>
    <div class="container d-flex justify-content-center py-5">
        <h1>
            Gestor de Administradores
            {{-- Example button to open modal --}}
            <x-adminlte-button label="Agregar Administrador" data-toggle="modal" data-target="#modalCustom" class="bg-primary ml-4" icon="fas fa-plus"/>
        </h1>
        {{-- Custom --}}
        <form wire:submit.prevent="GuardarAdministrador" >
            <x-adminlte-modal id="modalCustom" title="Registro de Administrador" size="lg" theme="primary"
            icon="fas fa-bell" v-centered static-backdrop scrollable>
                <div>
                    {{--input--}}
                    <x-adminlte-input wire:model.defer="nombreAdministrador" name="nombreAdministrador" label="Nombre completo del Administrador de Postgrado" placeholder="Ingrese el nombre del Administrador..." fgroup-class="col-12" />
                    <x-adminlte-input wire:model.defer="emailAdministrador" name="emailAdministrador" label="Email del Administrador de Postgrado" placeholder="Ingrese el email del Administrador..." fgroup-class="col-12" />
                    <x-adminlte-input wire:model.defer="passwordAdministrador" name="passwordAdministrador" label="Contraseña del Administrador de Postgrado" placeholder="Ingrese la contraseña del Administrador..." fgroup-class="col-12" />
                </div>
                <x-slot name="footerSlot">
                    <x-adminlte-button class="mr-auto" theme="success" type="submit" label="Guardar"/>
                    <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                </x-slot>
            </x-adminlte-modal>
        </form>
    </div>

    
    {{--buscador--}}
    <div class="row">
        <div class="col-12 d-flex justify-content-around align-items-center">
            <div class="col-4">
                <span class="badge badge-primary">Mostrar</span>
                <select wire:model="cant" class="form-control-sm">
                    <option value="5" {{ $cant == 5 ? 'selected' : ''}} >5</option>
                    <option value="10" {{ $cant==10? 'selected' : '' }} >10</option>
                    <option value="15" {{ $cant==15? 'selected' : '' }} >15</option>
                    <option value="20" {{ $cant==20? 'selected' : '' }} >20</option>
                </select>
                <span class="badge badge-primary">registros</span>
            </div>
            <x-adminlte-input name="search" label="Buscar al Administrador" placeholder="Buscar..." fgroup-class="col-4" wire:model="search"/>
        </div>
    </div>

    {{--tabla--}}
    @php
        $heads = [
            'ID',
            'Nombre del Administrador',
            'Email del Administrador',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 30],
        ];
    @endphp
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable bordered compressed>
                @forelse ($administradores as $administrador)
               
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td>
                            {{--html--}}
                            {{$administrador->name}}
                        </td>
                        <td>
                            {{--html--}}
                            {{$administrador->email}}
                        </td>
                        <td class="d-flex justify-content-center">
                            <x-adminlte-button class="btn-sm mx-2" theme="info" icon="fas fa-lg fa-edit" data-toggle="modal" data-target="#modalEdit{{$administrador->id}}" />
                            <x-adminlte-button class="btn-sm mx-2" theme="danger" icon="fas fa-lg fa-trash" data-toggle="modal" data-target="#modalDelete{{$administrador->id}}"/>
                        </td>
                    </tr>
                    {{--modal editar--}}
                    <form wire:submit.prevent="actualizarAdministrador({{$administrador->id}})">
                        <x-adminlte-modal id="modalEdit{{$administrador->id}}" title="Editar Administrador" size="lg" theme="primary"
                        icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            {{--input--}}
                            <x-adminlte-input wire:model.defer="nombreAdministrador" name="nombreAdministrador" label="Nombre completo del Administrador de Postgrado" placeholder="{{$administrador->name}}" fgroup-class="col-12" />
                            <x-adminlte-input wire:model.defer="emailAdministrador" name="emailAdministrador" label="Email del Administrador de Postgrado" placeholder="{{$administrador->email}}" fgroup-class="col-12" />
                            <x-adminlte-input wire:model.defer="passwordAdministrador" name="passwordAdministrador" label="Contraseña del Administrador de Postgrado" placeholder="ingrese la nueva contraseña" fgroup-class="col-12" />
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" type="button" wire:click="actualizarAdministrador({{$administrador->id}})" label="Guardar"/>
                            <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                        </x-slot>
                        </x-adminlte-modal>
                    </form>
                    {{--modal eliminar--}}
                    <x-adminlte-modal id="modalDelete{{$administrador->id}}" title="Eliminar Administrador" size="lg" theme="danger"
                    icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            <p>¿ESTÁ SEGURO DE ELIMINAR AL ADMINISTRADOR <b>{{$administrador->name}}</b>?</p>
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" wire:click="EliminarAdministrador({{$administrador->id}})" label="Eliminar"/>
                            <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                        </x-slot>
                    </x-adminlte-modal>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No hay registros</td>
                    </tr>
                @endforelse
            </x-adminlte-datatable>

            {{--paginacion--}}
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    {{$administradores->links()}}
                </div>
            </div>

        </div>
    </div>
</div>