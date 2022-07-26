
@extends('layouts.admin-layout')
@section('content')
<div class="main-content">

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Edit Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Edit Gallery</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div>
                        @foreach ($gallery as $galler) 
                                            <!-- <h5 class="card-title mb-4">Validation Examples</h5> -->
                                            <form class="needs-validation" method="post"  action="{{ url('update-gallery',$galler->id) }}" enctype="multipart/form-data" novalidate>
                                                @csrf
                                                    <?php
                                                    $gallery=$galler->category;
                                                    ?>
                                                <input type="hidden"/>
                                                <div class="row">
                                                    
                           
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Title</label>
                                                            <input type="text" name="title" required class="form-control" value="{{$galler->title}}" placeholder="Add Title" maxlength="40" />
                                                            <small>Enter title here.</small>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-2 col-4">
                                                        <br>
                                                        <br>     
                                                        <input type="radio" name="category" value="image" id="two radio" onchange="two()" 
                                                        <?php if($gallery=="image"){ ?> checked<?php }else{ } ?>
                                                        >
                                                        <label for="two radio"> Image</label>
                                                    </div>
                                                    <div class="col-md-2 col-4">
                                                        <br>
                                                        <br>     
                                                        <input type="radio" name="category" value="url" id="three radio" onchange="three()" 
                                                        <?php if($gallery=="url"){ ?> checked<?php }else{ } ?>
                                                        >
                                                        <label for="three radio"> Url</label>
                                                    </div>
                                                        <?php $gallery=$galler->category; ?>
                                                        <!-- {{$gallery}} -->
                                                    <div class="row mb-4" id="tworadio" 
                                                    <?php  
                                                            if($gallery == "image"){
                                                                ?>style="display:flex"
                                                                <?php
                                                            }else{

                                                                ?>style="display:none"
                                                                <?php
                                                            }
                                                            ?>
                                                        >
                                                        
                                                        <div class="col-md-12">
                                                            <label for="">Image</label>
                                                            <input type="file" name="file"  value="{{ asset('admin/uploads')}}/{{$galler->image}}" class="form-control" id="fileUpload" accept="/*,.webp"  onchange="return image()" <?php if($gallery=="image"){}else{  ?> disabled<?php } ?>>

                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mb-4" id="threeradio" 
                                                            <?php $gallery=$galler->category; 
                                                            if($gallery == "url"){
                                                                ?>style="display:flex"
                                                                <?php
                                                            }else{

                                                                ?>style="display:none"
                                                                <?php
                                                                }
                                                            ?>
                                                        >
                                                        <div class="col-md-6 col-6">
                                                            <label for="">Thumbnail</label>
                                                            <input type="file" name="file" id="eerht1" value="{{ asset('admin/uploads')}}/{{$galler->image}}" class="form-control" accept="/*,.webp"  onchange="return url()" <?php if($gallery=="url"){}else{  ?> disabled<?php } ?> >
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label for="">Url</label>
                                                            <input type="text" id="eerht2" name="url" value="{{$galler->urls}}" class="form-control" <?php if($gallery=="url"){}else{  ?> disabled<?php } ?>   > 
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12">                                                        
                                                        <div class="form-group mb-3">
                                                            <textarea id="ckeditor-classic" name="description" class="form-control"  placeholder="Message" required>{!! $galler->title !!}</textarea> 
                                                            <small>Description. </small>
                                                        </div>
                                                    </div>  
                                                </div>
                                                
                                                <!-- end row -->
                                                <div class="form-group">
                                                    <input  type="submit" name="submit" class="btn btn-primary" value="submit" ></div>
                                                
                                            </form>
                            @endforeach
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