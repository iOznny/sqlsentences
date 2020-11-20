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
                            <option value="J">Join</option>
                            <option value="LJ">Left Join</option>
                            <option value="RJ">Right Join</option>
                            <option value="IJ">Inner Join</option>
                            <option value="SJ">Straight Join</option>
                            <option value="IF">Control If - Case</option>
                            <option value="VAR">Variables de Usuario</option>
                            <option value="CREATE">Crear una tabla apartir de otra</option>
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
                            <option value="J">Join</option>
                            <option value="L">Left Join</option>
                            
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
                            <option value="J">Join</option>
                            <option value="L">Left Join</option>
                           
                        </select>
                        <div class="invalid-feedback">
                            Seleccione una instruccion SQL.
                        </div>
                        <div class="valid-feedback">
                            Seleccionado correctamente.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">

                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Enviar sentencia SQL
                </button>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
@stop



