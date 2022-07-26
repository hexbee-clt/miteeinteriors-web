
@extends('layouts.admin-layout')
@section('content')
<div class="main-content">

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"> Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active"> Gallery</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                                       
                        @foreach ($gallery as $galler) 
                            <div class="col-md-6 col-xl-3">
                            <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{ asset('admin/uploads')}}/{{$galler->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$galler->title}}</h4>
                                        <div class="limittext">{!! $galler->content !!}</div>
                                        <?php 
                                                                    $series = str_replace(' ', '-', $galler->title); 
                                                                    $title = strtolower($series);
                                        ?>  
                                        
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#{{$title}}"><i class="bx bx-show-alt"></i></button>
                                        <a href="{{ url('/gallery-delete/'.$galler->id) }}" type="button" name="delete" class="btn btn-primary waves-effect waves-light" ><i class="bx bx-trash-alt"></i></a>
                                        <a href="{{ url('/edit-gallery/'.$galler->id) }}" type="button" class="btn btn-primary waves-effect waves-light" ><i class="bx bx-pencil"></i></a>
                                    </div>
                                    <div id="{{$title}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-scroll="true" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Gallery View</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <img class="card-img-top img-fluid" src="{{ asset('admin/uploads')}}/{{$galler->image}}" alt="Card image cap">
                                                    <h5>{{$galler->title}}</h5>
                                                    {!! $galler->content !!}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                                </div>
                            </div>

                            @endforeach
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