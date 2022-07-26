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
                            <h4 class="card-title">Add Project Images</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('project-image')}}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ request()->id }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Please Select Which Type Do You Wnat To Upload Here.</p>
                                    <div class="form-group radioeffect">
                                    <input name="type" value="youtube" id="radio1" class="css-checkbox radioshow" type="radio" data-class="div1">
                                    <label for="radio1" value="image" class="css-label radGroup1">Youtube</label>

                                    <input name="type" id="radio2" class="css-checkbox radioshow2" style="margin-left:20px" type="radio" data-class="div2"  checked='checked'>
                                    <label for="radio2" class="css-label radGroup1">Image</label>
                                </div>
                                <br> 
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label for="">URL</label>
                                        <input type="text" class="form-control div1 allshow" name="url" id="validationCustom01" placeholder="Enter URL"  disabled>
                                    </div>
                                <div class="col-md-6">
                                    <label for="">Image</label>
                                            <input type="file" class="form-control" name="image" id="validationCustom01" placeholder="First name" >
                                </div>
                                </div>

                                    </div>
                                    <div class="col-md-3 mt-1">
                                        <button class="btn btn-primary mt-4 " type="submit">Upload</button>
                                    </div>
                            </form>
                            <div class="row">
                                
                            @foreach ($project as $projects) 
                            <div class="col-xl-3 mt-4">

                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{url('')}}/{{$projects->path}}{{$projects->file}}" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="{{url('delete-project-image/'.$projects->id)}}" class="btn btn-primary waves-effect waves-light">Delete</a>
                                    </div>
                                </div>

                            </div>
                                        @endforeach
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
