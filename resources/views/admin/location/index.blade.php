@extends('layout.admin')

@section('content')
    <style>
        #datatablesSimple tbody tr td {
            margin-right: 20px !important;
        }
    </style>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Quản lý địa điểm</h1>
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
                    Danh sách địa điểm
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Lớp cha</th>
                                <th>Lớp con</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->name }}</td>
                                    <td>
                                        @if ($d->parent)
                                            {{ $d->parent->name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($d->children->count() > 0)
                                            <ul>
                                                @foreach ($d->children as $child)
                                                    <li>{{ $child->name }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('location.edit', ['id' => $d->id]) }}"><button
                                                class="btn btn-primary">Sửa</button></a>
                                        <a href="{{ route('location.delete', ['id' => $d->id]) }}"><button
                                                class="btn btn-danger">Xoá</button></a>
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
