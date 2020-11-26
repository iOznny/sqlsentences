@extends('layouts.layout')

@section('css')
@stop

@section('container')
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('images/page/sql-logo.png') }}" alt="" width="72" height="72">
        <h2>SQL Sentences Helper</h2>
        <p class="lead">Sistema de gestión basada en sentencias SQL para facilitar el uso de la manipulación de la información.</p>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form class="needs-validation was-validated" action="{{ route('sentence') }}" novalidate="">
                <h4 class="mb-3">Seleccion de Sentencia SQL</h4>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="sentence">Sentencia a realizar.</label>
                        <select class="form-control" id="sentence" name="sentence" required>
                            <option value="" selected disabled hidden>Seleccione una instrucción SQL</option>
                            <option value="JN">Join</option>
                            <option value="LJ">Left Join</option>
                            <option value="RJ">Right Join</option>
                            <option value="IJ">Inner Join</option>
                            <option value="SJ">Straight Join</option>
                            <option value="IF">Control If</option>
                            <option value="WHEN">Control When - Then</option>
                            <option value="PCMAX">Precio maxímo en Productos</option>
                            <option value="RGPCMAX">Registro del precio maxímo en Productos</option>
                            <option value="TB">Crear una tabla apartir de otra</option>
                        </select>
                        <div class="invalid-feedback">
                            Seleccione una instruccion SQL.
                        </div>
                        <div class="valid-feedback">
                            Seleccionado correctamente.
                        </div>
                    </div>
                </div>

                <h4 class="mb-3">Seleccion de Tabla(s)</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="entityone">Entidad (Primary).</label>
                        <select class="form-control" id="entityone" name="entityone" required>
                            <option value="" selected disabled hidden>Seleccione una entidad</option>
                            <option value="Provider">Proveedor</option>
                        </select>
                        <div class="invalid-feedback">
                            Seleccione una instruccion SQL.
                        </div>
                        <div class="valid-feedback">
                            Seleccionado correctamente.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="entitytwo">Entidad (Secundary).</label>
                        <select class="form-control" id="entitytwo" name="entitytwo" required>
                            <option value="" selected disabled hidden>Seleccione una entidad</option>
                            <option value="Products">Productos</option>                
                        </select>
                        <div class="invalid-feedback">
                            Seleccione una instruccion SQL.
                        </div>
                        <div class="valid-feedback">
                            Seleccionado correctamente.
                        </div>
                    </div>
                </div>

                {{--- 
                <h4 class="mb-3">Seleccion de Atributos</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="attrone">Entidad (Primary).</label>
                        <select class="form-control" id="attrone" name="attrone[]" multiple required>
                            <option value="" selected disabled hidden>Seleccione el/los atributo(s)</option>
                            <option value="id">ID</option>
                            <option value="i">Clave</option>
                            <option value="name">Nombre</option>
                            <option value="description">Descripción</option>
                        </select>
                        <div class="invalid-feedback">
                            Seleccione el/los atributo(s).
                        </div>
                        <div class="valid-feedback">
                            Seleccionado(s) correctamente.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="attrtwo">Entidad (Secundary).</label>
                        <select class="form-control" id="attrtwo" name="attrtwo[]" multiple required>
                            <option value="" selected disabled hidden>Seleccione el/los atributo(s)</option>
                            <option value="id">ID</option>
                            <option value="i">Clave</option>
                            <option value="name">Nombre</option>
                            <option value="description">Descripción</option>
                            <option value="price">Precio</option>
                            <option value="cuantity">Cantidad</option>
                            <option value="provider_id">Proveedor ID</option>
                        </select>
                        <div class="invalid-feedback">
                            Seleccione el/los atributo(s).
                        </div>
                        <div class="valid-feedback">
                            Seleccionado(s) correctamente.
                        </div>
                    </div>
                </div> 
                ---}}

                <hr class="mb-4">

                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Realizar consulta SQL
                </button>
            </form>
        </div>
    </div>
</div>

@if(isset($data))
<div class="container-fluid">
    <hr class="mb-4">

    <div class="row">
        <div class="col-md-10 mx-auto mb-3">
            <div class="card">
                <div class="card-header">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary font-weight-bold">
                            Muestreo de Query
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <table id="miTabla" class="display responsive nowrap" style="width:100%">
                        <thead>
                            @switch($sentence)
                                @case('JN')
                                    <tr>
                                        <th>Producto ID</th>
                                        <th>P. Clave</th>
                                        <th>P. Nombre</th>
                                        <th>P. Descripción</th>
                                        <th>P. Precio</th>
                                        <th>P. Cantidad</th>
                                        <th>Proveedor ID</th>
                                        <th>Pro. Clave</th>
                                        <th>Pro. Nombre</th>
                                        <th>Pro. Descripción</th>
                                    </tr>
                                @break

                                @case('LJ')
                                    <tr>
                                        <th>Proveedor ID</th>
                                        <th>Pro. Clave</th>
                                        <th>Pro. Nombre</th>
                                        <th>Pro. Descripción</th>
                                        <th>Producto ID</th>
                                        <th>P. Clave</th>
                                        <th>P. Nombre</th>
                                        <th>P. Descripción</th>
                                        <th>P. Precio</th>
                                        <th>P. Cantidad</th>
                                        <th>P. Proveedor ID</th>
                                    </tr>
                                @break

                                @case('RJ')
                                    <tr>
                                        <th>Proveedor ID</th>
                                        <th>Pro. Clave</th>
                                        <th>Pro. Nombre</th>
                                        <th>Pro. Descripción</th>
                                        <th>Producto ID</th>
                                        <th>P. Clave</th>
                                        <th>P. Nombre</th>
                                        <th>P. Descripción</th>
                                        <th>P. Precio</th>
                                        <th>P. Cantidad</th>
                                        <th>P. Proveedor ID</th>
                                    </tr>
                                @break

                                @case('IJ')
                                    <tr>
                                        <th>Producto ID</th>
                                        <th>P. Nombre</th>
                                        <th>P. Descripción</th>
                                        <th>P. Precio</th>
                                        <th>Proveedor ID</th>
                                        <th>Pro. Nombre</th>
                                    </tr>
                                @break

                                @case('SJ')
                                    <tr>
                                        <th>Producto ID</th>
                                        <th>P. Nombre</th>
                                        <th>P. Descripción</th>
                                        <th>P. Precio</th>
                                        <th>Proveedor ID</th>
                                        <th>Pro. Nombre</th>
                                    </tr>
                                @break

                                @case('IF')
                                    <tr>
                                        <th>Proveedor Name</th>
                                        <th>Proveedor Status</th>
                                    </tr>
                                @break

                                @case('WHEN')
                                    <tr>
                                        <th>Proveedor Name</th>
                                        <th>Proveedor Status</th>
                                    </tr>
                                @break

                                @case('PCMAX')
                                    <tr>
                                        <th>Precio Maxímo en Productos</th>
                                    </tr>
                                @break

                                @case('RGPCMAX')
                                    <tr>
                                        <th>Producto ID</th>
                                        <th>Producto Clave</th>
                                        <th>Producto Nombre</th>
                                        <th>Producto Descripción</th>
                                        <th>Producto Precio</th>
                                        <th>Producto Cantidad</th>
                                        <th>Proveedor ID</th>
                                    </tr>
                                @break

                                @default
                                    <tr>
                                        <th>SIN REGISTRO</th>
                                    </tr>
                                @break
                            @endswitch
                        </thead>

                        <tbody>
                            @switch($sentence)
                                @case('JN')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Producto ID'] }}</td>
                                            <td>{{ $data[$i]['Producto Clave'] }}</td>
                                            <td>{{ $data[$i]['Producto Nombre'] }}</td>
                                            <td>{{ $data[$i]['Producto Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto Precio'] }}</td>
                                            <td>{{ $data[$i]['Producto Cantidad'] }}</td>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Clave'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Descripción'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('LJ')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Clave'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto ID'] }}</td>
                                            <td>{{ $data[$i]['Producto Clave'] }}</td>
                                            <td>{{ $data[$i]['Producto Nombre'] }}</td>
                                            <td>{{ $data[$i]['Producto Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto Precio'] }}</td>
                                            <td>{{ $data[$i]['Producto Cantidad'] }}</td>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('RJ')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Clave'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto ID'] }}</td>
                                            <td>{{ $data[$i]['Producto Clave'] }}</td>
                                            <td>{{ $data[$i]['Producto Nombre'] }}</td>
                                            <td>{{ $data[$i]['Producto Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto Precio'] }}</td>
                                            <td>{{ $data[$i]['Producto Cantidad'] }}</td>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('IJ')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Producto ID'] }}</td>
                                            <td>{{ $data[$i]['Producto Nombre'] }}</td>
                                            <td>{{ $data[$i]['Producto Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto Precio'] }}</td>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('SJ')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Producto ID'] }}</td>
                                            <td>{{ $data[$i]['Producto Nombre'] }}</td>
                                            <td>{{ $data[$i]['Producto Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto Precio'] }}</td>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('IF')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Status'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('WHEN')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Status'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('WHEN')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Proveedor Nombre'] }}</td>
                                            <td>{{ $data[$i]['Proveedor Status'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('PCMAX')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Precio Maximo'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @case('RGPCMAX')
                                    @for($i = 0; $i < count($data); $i++ )
                                        <tr>
                                            <td>{{ $data[$i]['Producto ID'] }}</td>
                                            <td>{{ $data[$i]['Producto Clave'] }}</td>
                                            <td>{{ $data[$i]['Producto Nombre'] }}</td>
                                            <td>{{ $data[$i]['Producto Descripción'] }}</td>
                                            <td>{{ $data[$i]['Producto Precio'] }}</td>
                                            <td>{{ $data[$i]['Producto Cantidad'] }}</td>
                                            <td>{{ $data[$i]['Proveedor ID'] }}</td>
                                        </tr>
                                    @endfor
                                @break

                                @default
                                @break
                            @endswitch
                        </tbody>
                    </table>

                    @if(Session::get('mensaje'))
                        <div class="alert alert-{{Session::get('color-class')}} mt-3" role="alert">
                            {{ Session::get('mensaje') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endif 

@stop

@section('js')
@stop



