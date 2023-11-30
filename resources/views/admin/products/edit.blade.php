@extends('admin.inc.layout')
@section('title', 'Edit Product')

@section('content')
    <div class="content-wrapper">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="" name="name" value="{{ $product->name }}" class="form-control"
                                id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">img</label>
                            <input type="file" name="img" value="{{ $product->img }}" class="form-control"
                                id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">desc</label>
                            <input type="text" name="desc" value="{{ $product->desc }}" class="form-control"
                                id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Price</label>
                            <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                                id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Category</label>
                            <input type="text" name="category_id" value="{{ $product->category_id }}"
                                class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
