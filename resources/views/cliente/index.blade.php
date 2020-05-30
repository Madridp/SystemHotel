@extends('layouts.admin', ['activePage' => 'cliente-index', 'titlePage' => __('Gestor de Clientes')])



@section('main-content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Clientes') }}</h4>
                        <p class="card-category"> {{ __('Lista de clientes') }}</p>
                    </div>
                    <div class="card-body">
                        @if (session('exito'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('exito') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('error') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('cliente.create') }}" class="btn btn-md btn-primary">{{ __('Crear nuevo cliente') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="tabla">
                                <thead class=" text-primary">
                                    <th>{{ __('Nombre') }}</th>
                                    <th>{{ __('Apellido') }}</th>
                                    <th>{{ __('Télefono') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('DPI') }}</th>
                                    <th class="text-right">{{ __('Operaciones') }}</th>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                    <tr>
                                        <!--imprimir datos en pantalla-->
                                        <td>{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->apellido }}</td>
                                        <td>{{ $cliente->telefono }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->dpi }}</td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('cliente.destroy', $cliente) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('cliente.edit', $cliente) }}" data-original-title="" title="">
                                                    <i class="material-icons" style="color: white; font-weight: bolder;" >Editar</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("¿Estás seguro de querer eliminar este registro?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons" style="color: white; font-weight: bolder;" >Eliminar</i>
                                                    <div class="ripple-container"></div>
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
    </div>
</div>
@endsection

@section('javascript_extra')
    <script>
        var tabla = $('#tabla').DataTable( {
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "No se encontraron registros",
                "info": "Mostrando página _PAGE_/_PAGES_",
                "infoEmpty": "Ningun registrado encontrado",
                "infoFiltered": "(coincidencias de _MAX_ registros)",
                "search": "Búsqueda",
                "LoadingRecords": "Cargando ...",
                "Processing": "Procesando...",
                "paginate": {
                    "previous": "<",
                    "next": ">",
                }
            },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    text: 'Exportar como PDF',
                    orientation: 'landscape', // 'portrait', 'landscape'
                    pageSize: 'LETTER', // 'A5', ‘EXECUTIVE’, ‘FOLIO’, ‘LEGAL’, ‘LETTER’, ‘TABLOID’
                    pageMargins: [10, 10, 10, 10], // [left, top, right, bottom] or [horizontal, vertical] or just a number for equal margins
                    title: 'Reporte Agencia',
                    exportOptions: {
                        columns: [0, 1, 2], // :visible: para exportar columnas visibles
                        modifier: {
                            page: 'all' // current: para registros que se esten visualizando actualmente
                        }
                    },
                    customize: function (doc) {
                        // ajustar el 100% del ancho, la tabla exportada a pdf
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                        /*doc.content.splice(1, 0, {
                            columns: [
                                {
                                    // margin: [0, 0, 0, 12], // margin: [izquierda, arriba, derecha, abajo]
                                    margin: [0, 5], // margin: [horizontal, vertical]
                                    alignment: 'left',
                                    image: obtenerBase64(),
                                    width: 140,
                                    height: 100
                                },
                                {
                                    margin: [10, 15],
                                    text: 'Nombre de la empresa: ' + nombre_empresa + "\n" +
                                        "Fecha del reporte: " + obtenerFechaDMY(new Date().toString()) + "\n" +
                                        "Descripcion: _________________________________\n______________________________________________\n______________________________________________",
                                    fontSize: 12
                                }
                            ]
                        });*/
                    }
                },
                'excel'
            ]
        });
    </script>
@endsection

