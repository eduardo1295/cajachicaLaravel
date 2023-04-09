<x-layouts.app
    :title="$usuario->Usuario"
    :meta-description="$usuario->user1"
>
    <h1 class="">Editar Usuario</h1>
    <form class="row g-3 needs-validation" action="{{ route('usuario.update', $usuario) }}" method="POST"  novalidate>
    
        @csrf @method('PATCH')

        @include('usuario.forms-input')

        <div class="flex items-center justify-between mt-4">
            <a class="text-sm" href="{{ route('usuario.index') }}">Regresar</a>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</x-layouts.app>