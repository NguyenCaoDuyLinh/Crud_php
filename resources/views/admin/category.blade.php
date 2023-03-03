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
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Category table</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <form action="{{route('category.add')}}">
                    <button class="teal">Add Category</button>
                </form>
                <!-- <a href="{{route('category.add')}}">Add Category</a> -->
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">

                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">ID</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Category</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Total Product</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cats as $cat)
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $cat->Category_id }}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $cat->Category_name }}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $cat->producta->count() }}</p>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('category.edit', $cat->Category_id)}}"  data-toggle="tooltip" data-original-title="Edit user">
                                        <i class="material-icons opacity-10">edit</i>
                                    </a>
                                    <a href="{{route('category.delete', $cat->Category_id)}}"  data-toggle="tooltip" data-original-title="Delete user">
                                        <i class="material-icons opacity-10">delete</i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
{{
    $cats->appends(request()->all())->links()
}}
@stop()