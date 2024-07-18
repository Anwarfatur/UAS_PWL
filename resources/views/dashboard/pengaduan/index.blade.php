@include('dashboard.layout.head')

<div class="container-fluid">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $index => $value)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->messages }}</td>
                <td>
                    {{-- <a href="{{ url('berita/edit/' . $value->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('berita/destroy/' . $value->id) }}" class="btn btn-danger">Hapus</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('dashboard.layout.footer')
