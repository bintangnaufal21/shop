<x-layoutAdmin>
      <div class="container-fluid px-4">
      <h1 class="mt-4">User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">User</li>
        </ol>
     </div>

     @foreach ( $dataUser as $data )
     <p>{{ $data->name }}</p>
     @endforeach
</x-layoutAdmin>
