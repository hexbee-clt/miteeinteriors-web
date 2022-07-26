
@extends('layouts.admin-layout')
@section('content')
<div class="main-content">

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"> Project</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active"> Project</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
        
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th width="20px">sl#</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th width="200px">Actions</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach ($projects as $project) 
                                            <tr>
                                                <td>{{ $loop->iteration  }}</td>
                                                <td>{{$project->title}}</td>
                                                <td>{!! $project->contant !!}</td>
                                                <td>
                                                    <a href="{{url('project-add-images/'.$project->id)}}" type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-add-to-queue" data-toggle="tooltip" data-placement="top" title="Add Images"></i></a>
                                                    <a href="{{url('project-edit/'.$project->id)}}" type="button" class="btn btn-primary waves-effect waves-light"><i class=" bx bx-pencil"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                                    <a href="{{url('project-delete/'.$project->id)}}" type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-trash-alt" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
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