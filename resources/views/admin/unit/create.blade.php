@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">Create New unit</span>
                    <a href="/unit" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/unit" , method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">unit name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter unit">
                        </div>
                        <button type="submit" class="btn btn-info">Add unit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
