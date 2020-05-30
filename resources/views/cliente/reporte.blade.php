@extends('layouts.admin', ['activePage' => 'cliente-index', 'titlePage' => __('Gestor de Clientes')])

@section('estilos')

<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<style>
        .pagination .page-item.active .page-link { background-color: #000; }

         div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
             background-color: #000;
        }

       .pagination .page-item.active .page-link:hover {
               background-color: #000;
        }
</style>

@endsection

@section('main-content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Reporte') }}</h4>
                        <p class="card-category"> {{ __('Reporte de clientes') }}</p>
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

                        <div class="table-responsive">
                            <table class="table" id="tabla">
                                <thead class=" text-primary">
                                    <th>{{ __('Nombre') }}</th>
                                    <th>{{ __('Apellido') }}</th>
                                    <th>{{ __('Télefono') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('DPI') }}</th>

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

<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- export buttons -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="../../extensions/Editor/js/dataTables.editor.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.5.2/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready( function () {
            var tabla = $('#tabla').DataTable( {
                //"sPaginationType": "full_numbers",
                "pageLength": 10,
                "language": {
                    "lengthMenu": "Mostrar MENU registros por pagina",
                    "zeroRecords": "No se encontraron registros",
                    "info": "Mostrando página PAGE/PAGES",
                    "infoEmpty": "Ningun registrado encontrado",
                    "infoFiltered": "(coincidencias de MAX registros)",
                    "search": "Búsqueda",
                    "LoadingRecords": "Cargando ...",
                    "Processing": "Procesando...",
                    "paginate": {
                        "previous": " < ",
                        "next": " > ",
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
                        title: 'Reporte de Clientes',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4], // :visible: para exportar columnas visibles
                            modifier: {
                                page: 'all' // current: para registros que se esten visualizando actualmente
                            }
                        },
                        customize: function (doc) {
                            // ajustar el 100% del ancho, la tabla exportada a pdf
                            doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                        }
                    }
                ]
            });
        } );
    </script>

@endsection
