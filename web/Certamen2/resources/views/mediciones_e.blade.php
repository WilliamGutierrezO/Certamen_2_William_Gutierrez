@extends("layouts.master")
@section("contenido")
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Mediciones Existentes</span>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Fecha</td>
                        <td>Hora</td>
                        <td>Medido</td>
                        <td>Valor</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>








@endsection