@extends('admin.inc.layout')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create User</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="users.html" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="cart-body">
                        @if (Session('status'))
                            <div class="aler aler-success" role="alert">
                                {{ Session('status') }}
                            </div>
                        @endif
                    </div>

                    <form class="forms-sample" action="{{ route('admin.users.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email</label>
                            <input type="text" name="email" value="" class="form-control" id="exampleInputEmail3"
                                placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Password</label>
                            <input type="text" name="password" value="" class="form-control"
                                id="exampleInputEmail3" placeholder="Nhập ảnh">
                        </div>



                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
