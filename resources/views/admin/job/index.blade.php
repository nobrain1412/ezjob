@extends('layout.admin')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Quản lý công việc</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a href="{{route('job.add')}}">official DataTables documentation</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Danh sách công việc
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Salary</th>
                            <th>Subsidize</th>
                            <th>Quantity</th>
                            <th>Requirement</th>
                            <th>Experience</th>
                            <th>Status</th>
                            <th>Job Type</th>
                            <th>Categories</th>
                            <th>Shift</th>
                            <th>Company</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($data as $d )

                                <tr>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->desc}}</td>
                                    <td>{{$d->salary}}</td>
                                    <td>{{$d->subsidize}}</td>
                                    <td>{{$d->quantity}}</td>
                                    <td>{{$d->requirement}}</td>
                                    <td>{{$d->exp}}</td>
                                    <td>@if ($d->status == 1)
                                            Đang tuyển
                                        @else
                                            Dừng tuyển
                                        @endif
                                    </td>
                                    <td>{{$d->jobType->name}}</td>
                                    <td>{{$d->categories->name}}</td>
                                    <td>{{$d->shift->name}}</td>
                                    <td>{{$d->company->name}}</td>
                                    <td>
                                        <a href="{{route('company.edit',['id' => $d->id])}}"><button class="btn btn-primary">Sửa</button></a>
                                        <a href="{{route('company.delete',['id' => $d->id])}}"><button class="btn btn-danger">Xoá</button></a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
