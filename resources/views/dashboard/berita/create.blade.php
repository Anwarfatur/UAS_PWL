@include('dashboard.layout.head')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Create Berita</h5>
        <form action="{{ url('berita/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-gs">
                <div class="mb-4 col-md-6">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="mb-4 col-md-6">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <div class="mb-4 col-md-12">
                    <label for="konten">Konten</label>
                    <textarea class="form-control" id="konten" name="konten" rows="5" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@include('dashboard.layout.footer')
