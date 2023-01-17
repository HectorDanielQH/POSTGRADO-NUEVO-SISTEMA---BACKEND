<div>
    <div class="container d-flex justify-content-center py-5">
        <h1>
            Gestor de Coordinadores
            {{-- Example button to open modal --}}
            <x-adminlte-button label="Agregar Coordinador" data-toggle="modal" data-target="#modalCustom" class="bg-primary ml-4" icon="fas fa-plus"/>
        </h1>
        {{-- Custom --}}
        <form wire:submit.prevent="GuardarCoordinador" >
            <x-adminlte-modal id="modalCustom" title="Registro de Coordinador" size="lg" theme="primary"
            icon="fas fa-bell" v-centered static-backdrop scrollable>
                <div>
                    {{--input--}}
                    <x-adminlte-input wire:model.defer="nombreCoordinador" name="nombreCoordinador" label="Nombre completo del Coordinador de Postgrado" placeholder="Ingrese el nombre del coordinador..." fgroup-class="col-12" />
                    <x-adminlte-input wire:model.defer="emailCoordinador" name="emailCoordinador" label="Email del Coordinador de Postgrado" placeholder="Ingrese el email del coordinador..." fgroup-class="col-12" />
                    <x-adminlte-input wire:model.defer="passwordCoordinador" name="passwordCoordinador" label="Contraseña del coordinador de Postgrado" placeholder="Ingrese la contraseña del coordinador..." fgroup-class="col-12" />
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
            <x-adminlte-input name="search" label="Buscar al Coordinador" placeholder="Buscar..." fgroup-class="col-4" wire:model="search"/>
        </div>
    </div>

    {{--tabla--}}
    @php
        $heads = [
            'ID',
            'Nombre del coordinador',
            'Email del coordinador',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 30],
        ];
    @endphp
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable bordered compressed>
                @forelse ($coordinadores as $coordinador)
               
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td>
                            {{--html--}}
                            {{$coordinador->name}}
                        </td>
                        <td>
                            {{--html--}}
                            {{$coordinador->email}}
                        </td>
                        <td class="d-flex justify-content-center">
                            <x-adminlte-button class="btn-sm mx-2" theme="info" icon="fas fa-lg fa-edit" data-toggle="modal" data-target="#modalEdit{{$coordinador->id}}" />
                            <x-adminlte-button class="btn-sm mx-2" theme="danger" icon="fas fa-lg fa-trash" data-toggle="modal" data-target="#modalDelete{{$coordinador->id}}"/>
                        </td>
                    </tr>
                    {{--modal editar--}}
                    <form wire:submit.prevent="actualizarCoordinador({{$coordinador->id}})">
                        <x-adminlte-modal id="modalEdit{{$coordinador->id}}" title="Editar Coordinador" size="lg" theme="primary"
                        icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            {{--input--}}
                            <x-adminlte-input wire:model.defer="nombreCoordinador" name="nombreCoordinador" label="Nombre completo del Coordinador de Postgrado" placeholder="{{$coordinador->name}}" fgroup-class="col-12" />
                            <x-adminlte-input wire:model.defer="emailCoordinador" name="emailCoordinador" label="Email del Coordinador de Postgrado" placeholder="{{$coordinador->email}}" fgroup-class="col-12" />
                            <x-adminlte-input wire:model.defer="passwordCoordinador" name="passwordCoordinador" label="Contraseña del coordinador de Postgrado" placeholder="ingrese la nueva contraseña" fgroup-class="col-12" />
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" type="button" wire:click="actualizarCoordinador({{$coordinador->id}})" label="Guardar"/>
                            <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal"/>
                        </x-slot>
                        </x-adminlte-modal>
                    </form>
                    {{--modal eliminar--}}
                    <x-adminlte-modal id="modalDelete{{$coordinador->id}}" title="Eliminar Coordinador" size="lg" theme="danger"
                    icon="fas fa-bell" v-centered static-backdrop scrollable>
                        <div>
                            <p>¿ESTÁ SEGURO DE ELIMINAR AL COORDINADOR <b>{{$coordinador->name}}</b>?</p>
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="mr-auto" theme="success" wire:click="EliminarCoordinador({{$coordinador->id}})" label="Eliminar"/>
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
                    {{$coordinadores->links()}}
                </div>
            </div>

        </div>
    </div>
</div>