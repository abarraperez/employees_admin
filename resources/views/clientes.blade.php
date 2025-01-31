@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Clientes</div>
                <div class="card-body">
                    <div class="section">
                        <div class="row">
                            <div class="col">
                                <!--Ideal generar que al ingresar el nombre de la compañia
                                gatille automaticamente el nombre de la empresa-->
                                <select class="form-control select2">
                                    <option value="0" selected disabled>Seleccionar Compañia...</option>
                                    <option value="1">Opción 1</option>
                                    <option value="2">Opción 2</option>
                                    <option value="3">Opción 3</option>
                                </select>
                                <br>
                                <button type="button" class="btn btn-outline-primary">Buscar</button>
                            </div>
                            <div class="col">
                                <!--Modal-->
                                <button type="button" class="btn btn-outline-success">Crear</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="section mt-4">
                        <div class="row group col-12">
                            <div class="col-sm-3">
                                <label for="company_name" class="form-label">Nombre Compañia</label>
                                <input type="text" class="form-control form-control-sm" id="company_name">
                            </div>
                            <div class="col-sm-3">
                                <label for="contact_name" class="form-label">Nombre Contacto</label>
                                <input type="text" class="form-control form-control-sm" id="contact_name">
                            </div>
                            <div class="col-sm-3">
                                <label for="contact_lastname" class="form-label">Apellido Contacto</label>
                                <input type="text" class="form-control form-control-sm" id="contact_lastname">
                            </div>
                            <div class="col-sm-3">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control form-control-sm" id="address">                                
                            </div>
                        </div>
                    </div>
                    <div class="section mt-4">
                        <div class="row col-12 group">
                            <div class="col-sm-3">
                                <label for="rut_empresa" class="form-label">Rut Empresa</label>
                                <input type="text" class="form-control form-control-sm" id="rut_empresa">
                            </div>                            
                            <div class="col-sm-3">
                                <label for="telefono_empresa" class="form-label">Telefono Empresa</label>
                                <input type="text" class="form-control form-control-sm" id="telefono_empresa">
                            </div>
                            <div class="col-sm-3">
                                <label for="phone" class="form-label">Telefono</label>
                                <input type="text" class="form-control form-control-sm" id="phone">
                            </div>
                            <div class="col-sm-3">     
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-sm" id="email">                                                         
                            </div>
                        </div>
                    </div>
                    <div class="section mt-4">
                        <div class="row col-12 group">
                            <div class="col-sm-3">
                                <label for="razon_social" class="form-label">Razón Social</label>
                                <input type="text" class="form-control form-control-sm" id="razon_social">  
                            </div>
                            <div class="col-sm-3">
                                <label for="giro" class="form-label">Giro</label>
                                <input type="text" class="form-control form-control-sm" id="giro">
                            </div>
                            <div class="col-sm-3">
                                <label for="state" class="form-label">Estado</label>
                                <input type="text" class="form-control form-control-sm" id="state">
                            </div>
                            <div class="col-sm-3">
                                <label for="comuna" class="form-label">Comuna</label>
                                <input type="text" class="form-control form-control-sm" id="comuna">
                            </div>
                        </div>
                    </div>
                    <div class="section mt-4">
                        <div class="row col-12 group">
                            <div class="col-sm-3">
                                <label for="region" class="form-label">Región</label>
                                <input type="text" class="form-control form-control-sm" id="region">
                            </div>
                            <div class="col-sm-3">
                                <label for="pais" class="form-label">Pais</label>
                                <input type="text" class="form-control form-control-sm" id="pais">
                            </div>
                            <div class="col-sm-3">
                                <label for="city" class="form-label">Ciudad</label>
                                <input type="text" class="form-control form-control-sm" id="city">
                            </div>
                            <div class="col-sm-3">
                                <label for="codigo_postal" class="form-label">Codigo Postal</label>
                                <input type="text" class="form-control form-control-sm" id="codigo_postal">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="section">
                        <div class="row">
                            <div class="col">
                                <!--Una vez seleccionada la compañia se puede actualizar-->
                                <button type="button" class="btn btn-outline-success">Modificar</button>
                                <!--Modal que entrega información de la compañia para luego eliminar-->
                                <button type="button" class="btn btn-outline-danger">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection