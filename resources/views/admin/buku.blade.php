@extends('../adminlayot')
@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">Buku</h3>
        <div class="col text-right">
          <a href="{{ url('buku/tambah') }}" class="btn btn-sm btn-primary">Tambah buku</a>
        </div>
      </div>
      
      <!-- Light table -->
      <div class="table">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" class="sort" data-sort="BukuID">ID</th>
              <th scope="col" class="sort" data-sort="Judul">Judul</th>
              <th scope="col" class="sort" data-sort="Penulis">Penulis</th>
              <th scope="col" class="sort" data-sort="Penerbit">Penerbit</th>
              <th scope="col" class="sort" data-sort="TahunTerbit">Tahun Terbit</th>
              <th scope="col" class="sort" data-sort="stok">Stok</th>
              <th scope="col" class="sort" data-sort="KategoriID">Kategori</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="list">
            @foreach ($data as $inem)
                <tr>
                    <td>{{ $inem->BukuID }}</td>
                    <td>{{ $inem->Judul }}</td>
                    <td>{{ $inem->Penulis }}</td>
                    <td>{{ $inem->Penerbit }}</td>
                    <td>{{ $inem->TahunTerbit }}</td>
                    <td>{{ $inem->stok }}</td>
                    <td>{{ $inem->KategoriID }}</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{url('buku/edit/'. $inem->BukuID)}}">Edit</a>
                          <a class="dropdown-item" href="{{url('buku/hapus/'. $inem->BukuID)}}">Delete</a>
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