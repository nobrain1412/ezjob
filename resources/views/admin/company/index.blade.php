@extends('layout.admin')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Quản lý công ty</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_self" href="{{route('company.add')}}">official DataTables documentation</a>
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
                            <th>address</th>
                            <th>email</th>
                            <th>image</th>
                            <th>website</th>
                            <th>phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d )
                            <tr>
                                <td>{{$d->name}}</td>
                                <td>{{$d->address}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->image}}</td>
                                <td>{{$d->website}}</td>
                                <td>{{$d->phone}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
