@extends('admin/main')
@section('nav')
<nav aria-label="breadcrumb">

    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">NXB</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">NXB</h6>

</nav>
@endsection()
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">NXB table</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <a href="{{route('nxb.add')}}">Add NXB</a>
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">

                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NXB</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Product</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nxbs as $nxb)
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$nxb->Publishing_Company_ID}}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$nxb->Publishing_Company_Name}}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $nxb->products->count() }}</p>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('nxb.edit', $nxb->Publishing_Company_ID)}}" class="btn-primary" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                    <a href="{{route('nxb.delete', $nxb->Publishing_Company_ID)}}" class="btn-danger" data-toggle="tooltip" data-original-title="Delete user">
                                        Delete
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
    $nxbs->appends(request()->all())->links()
}}
@stop()