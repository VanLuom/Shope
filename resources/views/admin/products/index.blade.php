@extends('admin.inc.layout')
@section('content')
    @if (Session::has('message'))
        <h3>{{ Session::get('message') }}</h3>
    @endif
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">New Products</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <p class="card-description"> Add class <code>.table</code> </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Img</th>
                                    <th>Price</th>
                                    <TH>Category</TH>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            @foreach ($productList as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{url($product->img) }}" alt="" width="100px" height="100px"></td>

                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.edit', $product->id) }}">
                                            <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>

                                    </td>

                                    <td>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button onclick="return confirm('Bạn có Muốn xóa không')"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
