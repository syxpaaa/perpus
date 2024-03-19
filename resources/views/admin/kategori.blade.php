@extends('../adminlayot')
@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">Kategori</h3>
        <div class="col text-right">
          <a href="{{ url('kategori/tambah') }}" class="btn btn-sm btn-primary">Tambah</a>
        </div>
      </div>

      <div class="table">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" data-sort="KategoriID">Id</th>
              <th scope="col" data-sort="Namakategoori">Nama kategori</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="list">
            @foreach ($data as $inem)
                <tr>
                    <td>{{ $inem->KategoriID }}</td>
                    <td>{{ $inem->Namakategoori }}</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{url('kategori/edit/'. $inem->KategoriID)}}">Edit</a>
                          <a class="dropdown-item" href="{{url('kategori/hapus/'. $inem->KategoriID)}}">Delete</a>
                        </div>
                      </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
      </div>
      <!-- Card footer -->
      <div class="card-footer py-4">
        <nav aria-label="...">
          <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection