<x-layoutAdmin>
     <div class="container-fluid px-4">
      <h1 class="mt-4">Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Product</li>
        </ol>
     </div>
    <div class="p-5">
        <div class="card">
            <div class="card-body">
                @if (@session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @endsession
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataProduct as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->category->name }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->stock }}</td>
                                <td>{{ $data->status }}</td>
                                <td><img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}" width="100"></td>
                                <td>{{ $data->description }}</td>
                                 <td>
                                    <a href="/data-product/edit" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="" method="POST" style="display:inline-block"
                                        onsubmit="return confirm('Hapus Product ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data produk</td>
                                </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layoutAdmin>
