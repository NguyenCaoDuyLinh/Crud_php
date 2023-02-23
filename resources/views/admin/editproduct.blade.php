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
            <form action="{{route('product.update', $product[0]->Product_Id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body p-3 pb-0">
                    <p>Loại</p>
                    <select class="alert alert-primary alert-dismissible text-white" name="category" role="alert">
                        <option value="0" disabled="true" selected="true">{{$cat_id}}</option>
                        @foreach ($cats as $cat)
                        <option>{{$cat->Category_name}}</option>
                        @endforeach
                    </select>
                    <p>Tên Sản Phẩm</p>
                    <input class="alert alert-primary alert-dismissible text-white" name="Name" role="alert" value="{{$product[0]->Name}}">
                    <p>Nhà Xuất Bản</p>
                    <select class="alert alert-primary alert-dismissible text-white" name="nxb" id="nxb" role="alert">
                        <option value="0" disabled="true" selected="true">{{$nxb_id}}</option>
                        @foreach ($nxbs as $nxb)
                        <option>{{$nxb->Publishing_Company_Name}}</option>
                        @endforeach
                    </select>
                    <p>Tên Tác giả</p>
                    <input class="alert alert-primary alert-dismissible text-white" name="Author" role="alert" value="{{$product[0]->Author}}">
                    <p>Giá</p>
                    <input class="alert alert-primary alert-dismissible text-white" name="Price" role="alert" value="{{$product[0]->Price}}">
                    <p>Số lượng</p>
                    <input class="alert alert-primary alert-dismissible text-white" name="Quantity" role="alert" value="{{$product[0]->Quantity}}">
                    <p>Mô tả</p>
                    <textarea class="alert alert-primary alert-dismissible text-white" name="Description" role="alert">{{$product[0]->Description}}</textarea>
                    <p>Ảnh</p>
                    <input class="alert alert-primary alert-dismissible text-white" name="file_upload" role="alert" type="file" value="{{$product[0]->Avatar}}">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="submit" data-target="successToast">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop()