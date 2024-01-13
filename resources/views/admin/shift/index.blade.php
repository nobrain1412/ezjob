@extends('layout.admin')

@section('content')
    <style>
        #datatablesSimple tbody tr td {
            margin-right: 20px !important;
        }
    </style>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Quản lý ca làm</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information
                    about DataTables, please visit the
                    <a target="_self" href="{{ route('location.add') }}">official DataTables documentation</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Danh sách ca làm
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d )
                                <tr>
                                    <td>{{$d->name}}</td>
                                    <td>nope</td>
                                    <td>nope</td>
                                    <td>nope</td>
                                    <td>nope</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
