@extends ('admin.template.base')

@section('content')
    <!-- start coding -->


    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="row ml-1 mr-2 mb-3">
                <h4>Edit Data user</h4>
            </div>

            <div class="container">
                <div class="card-body">
                    <form action="{{ url('admin/user', $user->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama"  value="{{ $user->nama }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">username</label>
                            <input type="text" class="form-control" name="username"  value="{{ $user->username }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">email</label>
                            <input type="email" class="form-control" name="email"  value="{{ $user->email }}">
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
