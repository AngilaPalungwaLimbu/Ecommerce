@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">Add New Product</span>
                    <a href="/product" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/product/{{ $product->id }}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Product name<span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter product name" value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                            <label for="category_name"> Category <span class="text-danger">*</span></label>

                            <select name="category_id" id="category_id" class="form-select form-control select2" >
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="name"> Unit <span class="text-danger">*</span></label>

                            <select name="unit_id" id="unit_id" class="form-select form-control select2" >
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="price">Price<span class="text-danger">*</span></label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="Enter product price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label for="discount_percent">Discount <span class="text-danger">*</span></label>
                            <input type="text" name="discount_percent" id="discount_percent" class="form-control"
                                placeholder="Enter discount percentage" value="{{ $product->discount_percent }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="selling_price">Selling Price <span class="text-danger">*</span></label>
                            <input type="text" name="selling_price" id="selling_price" class="form-control"
                                placeholder="Enter Selling Price" value="{{ $product->selling_price }}">
                        </div> --}}


                        <div class="form-group">
                            <label for="image">Image<span class="text-danger">*</span></label>
                            <div>
                                {{-- <img src="{{asset($product->image)}}"  width="100" alt=""> --}}
                            </div>
                            <input type="file" name="image" id="image" class="form-control"
                                accept="images/jpeg, images/jpg, images/png" placeholder="Enter Title" value="{{ $product->image }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" rows="3">{{ $product->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Update product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
