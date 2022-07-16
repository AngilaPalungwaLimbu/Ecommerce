@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <span class="fs-4 fw-bold">View All Products</span>
                        <a href="/product/create" class="float-end btn btn-info"><i class="fas fa-plus"></i><span
                                class="hide-menu ps-2">Add product </span></a>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name </th>
                                            <th>Price </th>
                                            <th>Unit </th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td class="p-1">
                                                    <img src="{{ asset($product->image) }}" width="64px" alt="">
                                                    <span class="ps-3">{{ $product->name }}</span>
                                                </td>
                                                <td>{{ $product->selling_price }}</td>
                                                    <td>{{ $product->name }}</td>
                                                <td>
                                                    <form action="/product/{{ $product->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="/product/{{ $product->id }}/edit"
                                                            class="btn btn-success text-white btn-sm">Edit</a>
                                                        <button class="btn btn-danger btn-sm">Delete</button>
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
    </div>
@endsection

