@include('dashboard.layout.head')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Create Galeri</h5>
        <form action="{{ url('galeri/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-gs">
                <div class="mb-4 col-md-6">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="foto/*" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@include('dashboard.layout.footer')
