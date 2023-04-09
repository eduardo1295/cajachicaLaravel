<x-layouts.app
    title="Blog"
    meta-description="Blog meta description"
>
    <div class="container">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">noTienda</th>
                <th scope="col">Nombre</th>
                <th scope="col">User</th>
                <th scope="col">Password</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($users as $key => $user)
                    <tr>
                    <td>{{ $user->notienda }}</td>
                    <td>{{ $user->Usuario }}</td>
                    <td>{{ $user->user1 }}</td>
                    <td>{{ $user->Password }}</td>
                    <td>
                      <a href="{{ route('usuario.edit', $user) }}" class="btn btn-warning"> <i class="fas fa-edit"></i></a>
                      
                    </td>
                    
                  </tr>      
                @endforeach
              
              
              
            </tbody>
          </table>
          {{ $users->links() }}
          {{-- {!! $users->links() !!} --}}
    </div>

</x-layouts.app>