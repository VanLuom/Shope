@extends('admin.inc.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Category</h1>
                </div>

            </div>
        </div>
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

                    <form class="forms-sample" action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">desc</label>
                            <input type="text" name="desc" value="" class="form-control" id="exampleInputEmail3"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">img</label>
                            <input type="file" name="img" value="" class="form-control" id="exampleInputEmail3"
                                placeholder="them ảnh">
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
