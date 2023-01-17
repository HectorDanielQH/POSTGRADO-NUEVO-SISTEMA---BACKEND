<div>
    <div class="container d-flex justify-content-center py-5">
        <h1>
            Gestor de Convenios
            {{-- Example button to open modal --}}
            <x-adminlte-button label="Agregar Convenio" data-toggle="modal" data-target="#modalCustom" class="bg-primary ml-4" icon="fas fa-plus"/>
        </h1>
        {{-- Custom --}}
        <form wire:submit.prevent="GuardarConvenio" >
            <x-adminlte-modal id="modalCustom" title="Registro de Convenio" size="lg" theme="primary"
            icon="fas fa-bell" v-centered static-backdrop scrollable>
                <div>
                    {{--input--}}
                    <x-adminlte-input wire:model.defer="nombreConvenio" name="nombre" label="Nombre" placeholder="Nombre del Convenio" fgroup-class="col-12" />
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
            <x-adminlte-input name="search" label="Buscar el tipo de Convenio" placeholder="Buscar..." fgroup-class="col-4" wire:model="search"/>
        </div>
    </div>

    {{--tabla--}}
    @php
        $heads = [
            'ID',
            'Nombre del Convenio',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 30],
        ];
    @endphp
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable bordered compressed>
                @forelse ($convenios as $convenio)
               
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td>
                            {{--html--}}
                            {{$convenio->nombre}}
                        </td>
                        <td class="d-flex justify-content-center">
                            <x-adminlte-button class="btn-sm mx-2" theme="info" icon="fas fa-lg fa-edit" data-toggle="modal" data-target="#modalEdit{{$convenio->id}}" />
                            <x-adminlte-button class="btn-sm mx-2" theme="danger" icon="fas fa-lg fa-trash" data-toggle="modal" data-target="#modalDelete{{$convenio->id}}"/>
                        </td>
                    </tr>
                    {{--modal editar--}}
                    <form wire:submit.prevent="actualizarConvenio({{$convenio->id}})">
                        <x-adminlte-modal id="modalEdit{{$convenio->id}}" title="Editar Convenio" size="lg" theme="primary"
                        icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            {{--input--}}
                            <x-adminlte-input wire:model.defer="nombreConvenio" name="nombre" label="NUEVO NOMBRE DEL CONVENIO -->{{$convenio->nombre}}<--" placeholder="Nuevo nombre del convenio" fgroup-class="col-12" />
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" type="button" wire:click="actualizarConvenio({{$convenio->id}})" label="Guardar"/>
                            <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                        </x-slot>
                        </x-adminlte-modal>
                    </form>
                    {{--modal eliminar--}}
                    <x-adminlte-modal id="modalDelete{{$convenio->id}}" title="Eliminar Convenio" size="lg" theme="danger"
                    icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            <p>¿ESTÁ SEGURO DE ELIMINAR EL CONVENIO <b>{{$convenio->nombre}}</b>?</p>
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" wire:click="EliminarConvenio({{$convenio->id}})" label="Eliminar"/>
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
                    {{$convenios->links()}}
                </div>
            </div>

        </div>
    </div>
</div>