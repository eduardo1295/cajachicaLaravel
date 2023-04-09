<x-layouts.app
    
>
    <h1 class="">Editar solicitud</h1>
    <form class="row g-3 needs-validation" action="{{ route('solicitud.update', $solicitudes) }}" method="POST"  novalidate>
        @csrf @method('PATCH')
        @include('solicitud.forms-input')
        
        <div class="flex items-center justify-between mt-4">
            <a class="text-sm" href="{{ route('solicitud.index') }}">Regresar</a>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</x-layouts.app>