@extend("layouts.master")
@section("contenido")
    
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Registrar Lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha</label>
                        <input type="date" id="fecha-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora-txt" class="form-label">Hora</label>
                        <input type="text"  id="hora-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="medidor_select" class="form-label">Medidor</label>
                        <select class="form_select" id="medidor_select">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion_txt" class="form-label">Dirección</label>
                        <input type="text" id="direccion_txt"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="valor_txt"class="form-label">Valor</label>
                        <input type="number" id="valor_txt"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tmedida_select"class="form-label">Tipo de Medida</label>
                        <select class="form-select" id="tmedida_txt">
                            <option value="K">Kilowatts</option>
                            <option value="W">Watts</option>
                            <option value="T">Temperatura</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button type="button" id="registrar-btn" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection