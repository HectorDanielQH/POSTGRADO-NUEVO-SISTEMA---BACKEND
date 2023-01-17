<div>
    <div class="container d-flex justify-content-center py-5">
        <h1>
            Gestor de Tipos de Programas
            {{-- Example button to open modal --}}
            <x-adminlte-button label="Agregar Tipo de Programa" data-toggle="modal" data-target="#modalCustom" class="bg-primary ml-4" icon="fas fa-plus"/>
        </h1>
        {{-- Custom --}}
        <form wire:submit.prevent="GuardarTipoPrograma" >
            <x-adminlte-modal id="modalCustom" title="Registro del Tipo de Programa" size="lg" theme="primary"
            icon="fas fa-bell" v-centered static-backdrop scrollable>
            <div>
                {{--input--}}
                <x-adminlte-input wire:model.defer="nombreTipoPrograma" name="nombre" label="Nombre" placeholder="Nombre del Tipo Programa" fgroup-class="col-12" />
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
            <x-adminlte-input name="search" label="Buscar Tipo de Programa" placeholder="Buscar..." fgroup-class="col-4" wire:model="search"/>
        </div>
    </div>

    {{--tabla--}}
    @php
        $heads = [
            'ID',
            'Nombre del Tipo de Programa',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 30],
        ];
    @endphp
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable bordered compressed>
                @forelse ($tipoprogramas as $tipoprograma)
               
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td>
                            {{--html--}}
                            {{$tipoprograma->nombre}}
                        </td>
                        <td class="d-flex justify-content-center">
                            <x-adminlte-button class="btn-sm mx-2" theme="info" icon="fas fa-lg fa-edit" data-toggle="modal" data-target="#modalEdit{{$tipoprograma->id}}" />
                            <x-adminlte-button class="btn-sm mx-2" theme="danger" icon="fas fa-lg fa-trash" data-toggle="modal" data-target="#modalDelete{{$tipoprograma->id}}"/>
                        </td>
                    </tr>
                    {{--modal editar--}}
                    <form wire:submit.prevent="actualizarTipoPrograma({{$tipoprograma->id}})">
                        <x-adminlte-modal id="modalEdit{{$tipoprograma->id}}" title="Editar el Tipo de Programa" size="lg" theme="primary"
                        icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            {{--input--}}
                            <x-adminlte-input wire:model.defer="nombreTipoPrograma" name="nombre" label="NUEVO NOMBRE DEL PROGRAMA DE -->{{$tipoprograma->nombre}}<--" placeholder="Nuevo nombre del Tipo de Programa" fgroup-class="col-12" />
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" type="button" wire:click="actualizarTipoPrograma({{$tipoprograma->id}})" label="Guardar"/>
                            <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                        </x-slot>
                        </x-adminlte-modal>
                    </form>
                    {{--modal eliminar--}}
                    <x-adminlte-modal id="modalDelete{{$tipoprograma->id}}" title="Eliminar Tipo de Programa" size="lg" theme="danger"
                    icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            <p>¿ESTÁ SEGURO DE ELIMINAR EL TIPO DE PROGRAMA DE <b>{{$tipoprograma->nombre}}</b>?</p>
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" wire:click="EliminarTipoPrograma({{$tipoprograma->id}})" label="Eliminar"/>
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
                    {{$tipoprogramas->links()}}
                </div>
            </div>

        </div>
    </div>
</div>