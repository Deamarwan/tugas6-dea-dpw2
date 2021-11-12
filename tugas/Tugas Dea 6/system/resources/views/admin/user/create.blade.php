@extends ('admin.template.base')

@section('content')
    <!-- start coding -->


    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="row ml-1 mr-2 mb-3">
                <h4>Tambah Data user</h4>
            </div>

            <div class="container">
                <div class="card-body">
                    <form action="{{ url('admin/user') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">username</label>
                            <input type="text" class="form-control" name="username" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">email</label>
                            <input type="email" class="form-control" name="email" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">password</label>
                            <input type="password" class="form-control" name="password" >
                        </div>

                        <button class="btn btn-dark float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </div>

    <!-- end coding -->
@endsection
