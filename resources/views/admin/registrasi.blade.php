@extends('../adminlayot')
@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Register</h3>
          </div>
          <div class="col text-right">
            <a href="tambahpetu" class="btn btn-sm btn-primary">Register</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Email</th>
              <th scope="col">nama Lengkap</th>
              <th scope="col">No Hp</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $inem)
                <tr>
                    <td>{{ $inem->AdminID }}</td>
                    <td>{{ $inem->Username }}</td>
                    <td>{{ $inem->password }}</td>
                    <td>{{ $inem->email }}</td>
                    <td>{{ $inem->namalengkap }}</td>
                    <td>{{ $inem->noHp }}</td>
                    <td class="right">
                        <a href="{{ url('edit/' . $inem->AdminID) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('hapus/' . $inem->AdminID) }}"
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
