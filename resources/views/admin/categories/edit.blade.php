@extends('admin.inc.layout')
@section('content')
    <div class="content-wrapper">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('admin.categories.update', $category->id) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                                id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Images</label>
                            <input type="file" name="image" value="{{ $category->img }}" class="form-control"
                                id="exampleInputName1" placeholder="image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Description</label>
                            <input type="text" name="desc" value="{{ $category->desc }}" class="form-control"
                                id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
