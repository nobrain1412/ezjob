@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Thêm mới Địa điểm</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('location')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information
                    about DataTables, please visit the
                    <a target="_self" href="{{ route('company.add') }} ">add</a>
                </div>
            </div>
            <div class=" mb-4">
                <form method="POST" enctype="multipart/form-data" action="{{ route('location.add') }}">
                    @csrf


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="" type="text" name="name" placeholder="" />
                                <label for="">Tên</label>
                            </div>
                            <br><br>
                            <div class="form-floating mb-3 mb-md-0">
                                <button type="submit" class="btn btn-primary">add</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <select class="form-control" name="parent_id" id="">
                                    <option class="form-control" value="">Chọn lớp cha</option>
                                    @foreach ($location as $l)
                                        <option class="form-control" value="{{ $l->id }}">{{ $l->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </main>
@endsection
