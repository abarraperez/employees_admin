@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">

    <div class="card">
    <div class="card-header">{{ __('Evento') }}</div>
    </div>

    </div>
        <div class="col-md-46">
            <div class="card">
                <div class="card-body">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    
                </div>
              
                
            </div>--
        </div>
        <div class="col-md-4">
            <div class="card">
            <div class="card-body">
    <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Total Insumos</div>
        <div class="card-body d-flex justify-content-between">
            <!-- Contenido de la tarjeta (izquierda) -->
            <div>
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <!-- Icono (derecha) -->
            <div class="d-flex align-items-center">
                <i class="fas fa-toolbox"></i>
            </div>
        </div>
    </div>
</div>

              
                
            </div>--
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Personal Asignado</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    
                </div>
              
                
            </div>--
        </div>
    </div>
</div>
@endsection
