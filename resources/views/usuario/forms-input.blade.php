<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="validationCustom01" name="Usuario" type="text" value="{{ old('Usuario', $usuario->Usuario) }}">
    @error('Usuario')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="validationCustom01" name="email" type="text" value="{{ old('email', $usuario->email) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Password</label>
    <input type="text" class="form-control" id="validationCustom01" name="Password" type="text" value="{{ old('Password', $usuario->Password) }}">
    @error('Password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>