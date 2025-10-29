@extends('template.base')
@section('miaw')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard data user</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah Data User
                </a>


                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <!-- alert create -->
                @if(Session::get('success'))
                                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ Session::get('success') }}
                </div>
                @endif
                <!-- alert delete -->
                @if(Session::get('delete'))
                                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ Session::get('delete') }}
                </div>
                @endif
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Lengkap</th>
                      <th>Nomor Telepon</th>
                      <th>Email</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $row)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->phone }}</td>
                      <td>{{ $row->email }}</td>
                      <td>
                        <img src="{{ asset('storage/public/usersImages/'.$row->image) }}" alt="" width="70px">
                      </td>
                      <td>
                        <a href="" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
    </section>

    <!-- modal create -->
          <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <!-- enctype butuh kalo ada file yang harus di upload -->
                <form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" name="phone" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nik</label>
                        <input type="number" class="form-control" name="nik" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Foto Profile</label>
                        <input type="file" class="form-control" name="image" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="address" required placeholder="...">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gender</label><br>
                        <input type="radio" name="gender" value="male" required> Laki-laki
                        <input type="radio" name="gender" value="female"> Perempuan
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label><br>
                        <select name="role" class="form-control">
                            <option>--- Pilih Role ---</option>
                            <option value="admin">admin</option>  
                            <option value="user">user</option>
                        </select>
                    </div>
                        <div class="form-group">
                        <label class="form-label">Password</label> <br>
                        <input type="text" name="password" class="form-control">
                    </div>
            </div>
      
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
        @endsection