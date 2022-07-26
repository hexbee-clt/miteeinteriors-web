@extends('layouts.admin-layout')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">

            </div>
            <div class="row">
            <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Projects</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('project-save')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Title</label>
                                            <input type="text" class="form-control" name="title" id="validationCustom01" value="{{ old('title') }}" placeholder="Add Title" required="">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">URL </label>
                                            <input type="text" class="form-control" name="url" id="validationCustom02" value="{{ old('url') }}" placeholder="Add URL" required="">
                                            <small>Eg: how-to-finalize-a-name-for-your-mobile-app</small>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Project Thumbnail</label>
                                                <input type="file" name="file" required class="form-control" value="{{ old('file') }}" id="fileUpload" >
                                                <small>Image size should be 329*451</small>
                                                @error('file')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Project Type</label>
                                            {{-- <input type="text" class="form-control" name="url" id="validationCustom02" value="{{ old('url') }}" placeholder="Add URL" required=""> --}}
                                            <select name="type" id="" class="form-select" required="">
                                                <option value="" id="">Select</option>
                                                <option value="residential" id="">Residential interior design</option>
                                                <option value="commercial" id="">Commercial interior design</option>
                                                <option value="architectural" id="">Architectural Services</option>
                                            </select>
                                            <small>Eg: how-to-finalize-a-name-for-your-mobile-app</small>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-12">
                                            <label class="form-label" for="validationCustom03">Content</label>
                                            <textarea id="ckeditor-classic" name="description" class="form-control"  placeholder="Message" required>{{ old('Message') }}</textarea> 

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-4" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())

                    </script> ©
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection()
