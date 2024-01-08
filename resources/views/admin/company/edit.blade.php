@extends('layout.admin')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sửa công ty</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
                <form method="POST" enctype="multipart/form-data" action="{{ route('company.edit',['id'=>$company->id]) }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="" type="text" name="name"
                                    value="{{$company->name}}" />
                                <label for="">Tên công ty</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="" type="text" name="email"
                                value="{{$company->email}}" />
                                <label for="">Email</label>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                        <label for="inputEmail">Địa chỉ</label>
                    </div> --}}
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="" type="text" name="address"
                                value="{{$company->address}}" />
                                <label for="">Địa chỉ</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="" type="input" name="map"
                                value="{{$company->map}}" />
                                <label for="">Link Google Map</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="" type="text" name="phone"
                                value="{{$company->phone}}" />
                                <label for="">Số điện thoại</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="" type="input" name="website"
                                value="{{$company->website}}" />
                                <label for="">Website</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input name="image" type="file" id="image_url" style="display: none">
                                <img src="{{ ($company->image == null) ? asset('images/notfound.jpg') : Storage::url('images/'.$company->image) }}"
                                    width="150" height="130" id="image_preview" class="mt-1" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <button class="btn btn-primary" type="submit">Thêm mới </button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('upload_file/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('upload_file/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('upload_file/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script>
        const imagePreview = document.getElementById('image_preview');
        const imageUrlInput = document.getElementById('image_url');

        $(function() {
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#image_url").change(function() {
                readURL(this, '#image_preview');
            });

        });
        imagePreview.addEventListener('click', function() {
            imageUrlInput.click();
        });

        imageUrlInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        // Add an event listener to select/deselect all checkboxes
        document.getElementById('select-all-checkboxes').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('input[name="parent_id[]"]');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = this.checked;
            });
        });
    </script>
@endpush
