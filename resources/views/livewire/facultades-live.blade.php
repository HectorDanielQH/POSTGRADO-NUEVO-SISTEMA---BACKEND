<div>
    <div class="container d-flex justify-content-center py-5">
        <h1>
            Gestor de Facultades
            {{-- Example button to open modal --}}
            <x-adminlte-button label="Agregar Facultad" data-toggle="modal" data-target="#modalCustom" class="bg-primary ml-4" icon="fas fa-plus"/>
        </h1>
        {{-- Custom --}}
        <form wire:submit.prevent="GuardarFacultad" >
            <x-adminlte-modal id="modalCustom" title="Registro de Facultad" size="lg" theme="primary"
            icon="fas fa-bell" v-centered static-backdrop scrollable>
                <div>
                    {{--input--}}
                    <x-adminlte-input wire:model.defer="nombreFacultad" name="nombre" label="Nombre" placeholder="Nombre de la Facultad" fgroup-class="col-12" />
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
            <x-adminlte-input name="search" label="Buscar Facultad" placeholder="Buscar..." fgroup-class="col-4" wire:model="search"/>
        </div>
    </div>

    {{--tabla--}}
    @php
        $heads = [
            'ID',
            'Nombre de la Facultad',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 30],
        ];
    @endphp
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable bordered compressed>
                @forelse ($facultades as $facultad)
               
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td>
                            {{--html--}}
                            {{$facultad->nombre}}
                        </td>
                        <td class="d-flex justify-content-center">
                            <x-adminlte-button class="btn-sm mx-2" theme="info" icon="fas fa-lg fa-edit" data-toggle="modal" data-target="#modalEdit{{$facultad->id}}" />
                            <x-adminlte-button class="btn-sm mx-2" theme="danger" icon="fas fa-lg fa-trash" data-toggle="modal" data-target="#modalDelete{{$facultad->id}}"/>
                        </td>
                    </tr>
                    {{--modal editar--}}
                    <form wire:submit.prevent="actualizarFacultad({{$facultad->id}})">
                        <x-adminlte-modal id="modalEdit{{$facultad->id}}" title="Editar Facultad" size="lg" theme="primary"
                        icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            {{--input--}}
                            <x-adminlte-input wire:model.defer="nombreFacultad" name="nombre" label="NUEVO NOMBRE DE LA -->{{$facultad->nombre}}<--" placeholder="Nuevo nombre de la facultad" fgroup-class="col-12" />
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" type="button" wire:click="actualizarFacultad({{$facultad->id}})" label="Guardar"/>
                            <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                        </x-slot>
                        </x-adminlte-modal>
                    </form>
                    {{--modal eliminar--}}
                    <x-adminlte-modal id="modalDelete{{$facultad->id}}" title="Eliminar Facultad" size="lg" theme="danger"
                    icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            <p>¿ESTÁ SEGURO DE ELIMINAR LA <b>{{$facultad->nombre}}</b>?</p>
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" wire:click="EliminarFacultad({{$facultad->id}})" label="Eliminar"/>
                            <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                        </x-slot>
                    </x-adminlte-modal>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay registros</td>
                    </tr>
                @endforelse
            </x-adminlte-datatable>

            {{--paginacion--}}
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    {{$facultades->links()}}
                </div>
            </div>

        </div>
    </div>
</div>
