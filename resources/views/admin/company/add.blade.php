@extends('layout.admin')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Thêm mới công ty</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_self" href="{{route('company.add')}} ">add</a>
            </div>
        </div>
        <div class="card mb-4">
            <form method="POST" enctype="multipart/form-data" action="{{route('company.add')}}">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">Tên công ty</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Email</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                    <label for="inputEmail">Địa chỉ</label>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPassword" type="text" placeholder="Create a password" />
                            <label for="inputPassword">Số điện thoại</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPasswordConfirm" type="input" placeholder="Confirm password" />
                            <label for="inputPasswordConfirm">Website</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><a class="btn-block btn btn-primary">Thêm mới</a></div>
                </div>
            </form>

        </div>
    </div>
</main>
@endsection
