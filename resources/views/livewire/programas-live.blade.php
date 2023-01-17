<div>
    {{--listar programas en tabla--}}
    <div class="container">
        {{--input--}}
        <div class="row my-3">
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
                <x-adminlte-input name="search" label="Buscar Programa" placeholder="Buscar..." fgroup-class="col-4" wire:model="search"/>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen de Afiche</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($programas as $programa)
                <tr>
                    <th scope="row">{{
                        $loop->iteration
                        }}</th>
                    <td>{{$programa->nombrePrograma}}</td>
                    <td>
                        <img src="{{$programa->imagen}}" alt="" width="100">
                    </td>
                    <td>
                        {{--colorear--}}
                        @if($programa->estadoPrograma == 'Activo')
                            <span class="badge badge-success">{{$programa->estadoPrograma}}</span>
                        @else
                            <span class="badge badge-danger">{{$programa->estadoPrograma}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('programas.edit', ['programa'=>$programa])}}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button class="btn btn-danger" wire:click="delete({{$programa->id}})">
                            <i class="fas fa-trash"></i>
                        </button>
                        <a href="{{route('verlista', $programa->id)}}" class="btn btn-warning">
                            <i class="fas fa-graduation-cap"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <div class="alert alert-danger">
                            No hay registros
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{--paginacion--}}
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$programas->links()}}
            </div>
        </div>
    </div>
</div>