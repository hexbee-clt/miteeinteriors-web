
@extends('layouts.admin-layout')
@section('content')
<div class="main-content">

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Add Gallery</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- end card header -->
                                    <div style="display:none">
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <!-- <h5 class="card-title mb-4">Validation Examples</h5> -->
                                            <form class="needs-validation" method="post" action="{{ url('save-gallery') }}" enctype="multipart/form-data" novalidate>
                                                @csrf
                                                <input type="hidden"/>
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Title</label>
                                                            <input type="text" name="title" required class="form-control" placeholder="Add Title" maxlength="40" />
                                                            <small>Enter title here.</small>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div><div class="col-md-2 col-4">
                                                        <br>
                                                        <br>     
                                                        <input type="radio" name="category" value="image" id="two radio" onchange="two()">
                                                        <label for="two radio"> Image</label>
                                                    </div>
                                                    <div class="col-md-2 col-4">
                                                        <br>
                                                        <br>     
                                                        <input type="radio" name="category" value="url" id="three radio" onchange="three()" >
                                                        <label for="three radio"> Url</label>
                                                    </div>
                                                    <div class="row mb-4" id="tworadio" style="display:none">
                                                        <div class="col-md-12">
                                                            <label for="">Image</label>

                                                            <!-- <input type="file" class="form-control" name="file" id="fileUpload" onchange="return image()" disabled> -->
                                                            <input type="file" name="file" required value=" " class="form-control" id="fileUpload" accept="/*,.webp"  onchange="return image()" disabled>

                                                        </div>
                                                    </div>
                                                    <div class="row mb-4" id="threeradio" style="display:none">
                                                        <div class="col-md-6 col-6">
                                                            <label for="">Thumbnail</label>
                                                            <input type="file" name="file" id="eerht1" value="" class="form-control" accept="/*,.webp"  onchange="return url()" required disabled>
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label for="">Url</label>
                                                            <input type="text" id="eerht2" name="url" value="" class="form-control" required disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12">                                                        
                                                        <div class="form-group mb-3">
                                                            <textarea id="ckeditor-classic" name="description" class="form-control"  placeholder="Message" required></textarea> 
                                                            <small>Description. </small>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <!-- end row -->
                                                <div class="form-group">
                                                    <input  type="submit" name="submit" class="btn btn-primary" value="submit" >
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © 
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