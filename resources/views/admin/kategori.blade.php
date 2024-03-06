@extends('../adminlayot')
@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Buku</h3>
          </div>
          <div class="col text-right">
            <a href="tambahkategori" class="btn btn-sm btn-primary">Tambah kategori</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama kategori</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $inem)
                <tr>
                    <td>{{ $inem->KategoriID }}</td>
                    <td>{{ $inem->Namakategoori }}</td>
                    <td class="right">
                        <a href="{{ url('edit/' . $inem->KategoriID) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('hapus/' . $inem->KategoriID) }}"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection