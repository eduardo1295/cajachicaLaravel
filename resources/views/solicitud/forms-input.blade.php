<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Serie</label>
    <input type="text" class="form-control disabled" id="validationCustom01" name="Usuario" type="text" value="{{ old('Usuario', $solicitudes->Serie) }}">
    @error('Usuario')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Folio</label>
    <input type="text" class="form-control disabled" id="validationCustom01" name="email" type="text" value="{{ old('email', $solicitudes->Folio) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Referencia</label>
    <input type="text" class="form-control" id="validationCustom01" name="Referencia" type="text" value="{{ old('email', $solicitudes->Referencia) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Importe</label>
    <input type="text" class="form-control" id="validationCustom01" name="importe" type="text" value="{{ old('email', $solicitudes->Importe) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-4"></div>

<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Concepto</label>
    <select class="form-control" name="concepto">
        @foreach ($concepto as $item)
            <option {{ $item->IdConcepto == $solicitudes->IdConcepto ? 'selected' : ''  }}  value="{{$item->IdConcepto }}" > {{$item->Descripcion }} </option>
        @endforeach
    </select>
</div>
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Concepto</label>
    <select class="form-control" name="concepto">
        @foreach ($departamento as $item)
            <option {{ $item->IdDepartamento == $solicitudes->IdDepartamento ? 'selected' : ''  }}  value="{{$item->IdDepartamento }}" > {{$item->Departamento }} </option>
        @endforeach
    </select>
</div>
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Referencia</label>
    <input type="date" class="form-control" id="validationCustom01" name="fechaConsumo" type="text" value="{{ old('fechaConsumo', date('Y-d-m',strtotime($solicitudes->fechaConsumo))  ) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>