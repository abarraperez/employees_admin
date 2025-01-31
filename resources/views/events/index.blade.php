@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>{{ __('Eventos') }}</h3>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#newAppointmentModal">
                        Nuevo
                    </button>
                </div>

                <div class="card-body">
                    <!-- Tabla -->
                    <table id="appointmentsTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Cliente</th>
                                <th>Inicio</th>
                                <th>Fin</th>
                                <th>Comentarios</th>
                                <th>Costo Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $appointment->title }}</td>
                                <td>{{ $appointment->client->name ?? 'Sin Cliente' }}</td>
                                <td>{{ $appointment->start_time }}</td>
                                <td>{{ $appointment->finish_time }}</td>
                                <td>{{ $appointment->comments }}</td>
                                <td>$100.000.-</td>
                                <td>
                                    <a href="{{ route('events.show', $appointment) }}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Ver">
                                        <i class="fas fa-eye"></i> 
                                    </a>
                                    <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Insumos">                 
                                        <i class="fas fa-toolbox"></i>
                                    </button>
                                    <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Empleados">
                                        <i class="fas fa-users"></i>
                                    </button>
                                    <a href="{{ route('events.edit', $appointment) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Editar">
                                        <i class="fas fa-edit"></i> 
                                    </a>
                                    <form action="{{ route('events.destroy', $appointment) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE') <!-- Simula el método DELETE -->
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este evento?')" data-toggle="tooltip" title="Eliminar    ">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lateral (Bootstrap 4 personalizado) -->
<div class="modal fade" id="newAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="newAppointmentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newAppointmentLabel">Nuevo Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('events.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="client_id">Cliente</label>
                        <select class="form-control" id="client_id" name="client_id" required>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->company_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="start_time">Inicio</label>
                        <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
                    </div>
                    <div class="form-group">
                        <label for="finish_time">Fin</label>
                        <input type="datetime-local" class="form-control" id="finish_time" name="finish_time" required>
                    </div>
                    <div class="form-group">
                        <label for="comments">Comentarios</label>
                        <textarea class="form-control" id="comments" name="comments"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#appointmentsTable').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json' // Traducción al español
            }
        });
    });
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (element) {
    new bootstrap.Tooltip(element);
});
</script>

@endpush

