@extends('layout')

@section('title', 'Category')
@section('content')
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                @if (isset($categories) && $categories->count() > 0)
                    @foreach ($categories->take(3) as $category)
                        <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                            <!-- Block1 -->
                            <div class="block1 wrap-pic-w">

                                <img src="{{ url($category->img) }}" alt="IMG-BANNER">

                                <a href="{{ route('categories.show', ['category' => $category->id]) }}"
                                    class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                    <div class="block1-txt-child1 flex-col-l">
                                        <span class="block1-name ltext-102 trans-04 p-b-8">
                                            {{ $category->name }}
                                        </span>
                                        <span class="block1-info stext-102 trans-04">
                                            Spring 2018
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No categories.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
