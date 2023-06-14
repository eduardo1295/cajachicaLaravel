<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Serie</label>
    <input type="text" class="form-control disabled" id="validationCustom01" name="serie" type="text" value="{{ old('serie', $solicitudes->Serie) }}">
    @error('serie')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Folio</label>
    <input type="text" class="form-control disabled" id="validationCustom01" name="folio" type="text" value="{{ old('folio', $solicitudes->Folio) }}">
    @error('folio')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Referencia</label>
    <input type="text" class="form-control" id="validationCustom01" name="referencia" type="text" value="{{ old('referencia', $solicitudes->Referencia) }}">
    @error('referencia')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">Importe</label>
    <input type="text" class="form-control" id="validationCustom01" name="importe" type="text" value="{{ old('importe', $solicitudes->Importe) }}">
    @error('importe')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-4"></div>

<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Concepto</label>
    <select class="form-control" name="idconcepto">
        @foreach ($concepto as $item)
            <option {{ $item->IdConcepto == $solicitudes->IdConcepto ? 'selected' : ''  }}  value="{{$item->IdConcepto }}" > {{$item->Descripcion }} </option>
        @endforeach
    </select>
</div>
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Departamento</label>
    <select class="form-control" name="idDepartamento">
        @foreach ($departamento as $item)
            <option {{ $item->IdDepartamento == $solicitudes->IdDepartamento ? 'selected' : ''  }}  value="{{$item->IdDepartamento }}" > {{$item->Departamento }} </option>
        @endforeach
    </select>
</div>
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Fecha Consumo</label>
    <input type="date" class="form-control" id="validationCustom01" name="fechaConsumo" type="text" value="{{ old('fechaConsumo', date('Y-m-d',strtotime($solicitudes->fechaConsumo))  ) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Fecha Factura</label>
    <input type="date" class="form-control" id="validationCustom01" name="Fecha" type="text" value="{{ old('Fecha', date('Y-m-d',strtotime($solicitudes->Fecha))  ) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-12">
    <label for="validationCustom01" class="form-label">Observacion</label>
    <textarea name="observacion" id="" class="form-control" cols="10" rows="5">{{ old( 'observacion', $solicitudes->Observacion ) }}</textarea>
    
    @error('observacion')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif