<x-layouts.app
    title="Blog"
    meta-description="Blog meta description"
>
    <div class="container">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Folio</th>
                <th scope="col">Serie</th>
                <th scope="col">Concepto</th>
                <th scope="col">Departamento</th>
                <th scope="col">Factura</th>
                <th scope="col">Observacion</th>
                <th scope="col">Importe</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($solicitudes as $key => $solicitud)
                    <tr>
                    <td>{{ $solicitud->Serie }}_{{ $solicitud->Folio }}</td>
                    <td>{{ $solicitud->Folio }}</td>
                    <td>{{ $concepto->find($solicitud->IdConcepto)->Descripcion }}</td>
                    <td>{{ $departamento->find($solicitud->IdDepartamento)->Departamento }}</td>
                    <td>{{ $solicitud->Referencia }}</td>
                    <td>{{ $solicitud->Observacion }}</td>
                    <td>{{ number_format($solicitud->Importe,2)  }}</td>
                    
                    <td>
                      <a href="{{ route('solicitud.edit', $solicitud) }}" class="btn btn-warning"> <i class="fas fa-edit"></i></a>
                      
                    </td>
                    
                  </tr>      
                @endforeach
              
              
              
            </tbody>
          </table>
          {{-- {{ $solicitudes->links() }} --}}
          {{-- {!! $users->links() !!} --}}
    </div>

</x-layouts.app>