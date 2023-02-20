@extends('admin/main')
@section('nav')
<nav aria-label="breadcrumb">

    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Product</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Product</h6>

</nav>
@endsection()
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="card mt-4">
            <div class="card-header p-3">
                <h5 class="mb-0">Add Product</h5>
            </div>
            <div class="card-body p-3 pb-0">
                <p>Tên Sản Phẩm</p>
                <input class="alert alert-primary alert-dismissible text-white" name="name" role="alert" >
                <p>Loại</p>
                <select class="alert alert-primary alert-dismissible text-white" name="catalog" role="alert">
                    @foreach ($cats as $cat)
                    <option value="">{{$cat->Category_Name}}</option>
                    @endforeach
                </select>
                <p>Tên</p>
                <input class="alert alert-primary alert-dismissible text-white" name="content" role="alert" >
                <p>Tác giả</p>
                <input class="alert alert-primary alert-dismissible text-white" name="price" role="alert" >
                <p>Giá</p>
                <input class="alert alert-primary alert-dismissible text-white" name="discount" role="alert" >
                <p>Số lượng</p>
                <input class="alert alert-primary alert-dismissible text-white" name="number" role="alert" >
                <p>Mô tả</p>
                <textarea class="alert alert-primary alert-dismissible text-white" name="number" role="alert" ></textarea>
                <p>Ảnh</p>
                <input class="alert alert-primary alert-dismissible text-white" name="file_upload" role="alert" type="file">
                <div class="col-lg-3 col-sm-6 col-12">
                    <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button" data-target="successToast">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()