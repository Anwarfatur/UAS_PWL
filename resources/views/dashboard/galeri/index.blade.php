@include('dashboard.layout.head')

<div class="container-fluid">
    <a href="{{ url('galeri/create') }}" class="btn btn-primary my-4">Buat Galeri</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeri as $index => $value)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><img height="100px" src="{{ url('storage/',$value->foto) }}" alt="" srcset=""></td>
                <td>
                    <a href="{{ url('galeri/edit/' . $value->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('galeri/destroy/' . $value->id) }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('dashboard.layout.footer')
