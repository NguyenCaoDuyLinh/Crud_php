@extends('admin/main')
@section('nav')
<nav aria-label="breadcrumb">

    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Category</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Category</h6>

</nav>
@endsection()
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="card mt-4">
            <div class="card-header p-3">
                <h5 class="mb-0">Add Category</h5>
            </div>
            <form action="{{route('category.save')}}" method="post">
                @csrf
                <div class="card-body p-3 pb-0">
                    <p>Mã Danh mục</p>
                    <input class="alert alert-primary alert-dismissible text-white" name="Category_id" role="alert">
                    @error('Category_id')
                    <p> {{ $message }} </p>
                    @enderror
                    <p>Tên Danh mục</p>
                    <input class="alert alert-primary alert-dismissible text-white" name="Category_name" role="alert">
                    @error('Category_name')
                    <p> {{ $message }} </p>
                    @enderror
                    <div class="col-lg-3 col-sm-6 col-12">
                        <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="submit" data-target="successToast">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop()