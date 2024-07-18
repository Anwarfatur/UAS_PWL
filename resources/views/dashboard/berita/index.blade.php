@include('dashboard.layout.head')

<div class="container-fluid">
    <a href="{{ url('berita/create') }}" class="btn btn-primary my-4">Buat Berita</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $index => $value) 
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $value->judul }}</td>
                <td>
                    <a href="{{ url('berita/edit/' . $value->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('berita/destroy/' . $value->id) }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('dashboard.layout.footer')