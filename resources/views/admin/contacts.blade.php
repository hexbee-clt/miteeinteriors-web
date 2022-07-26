
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
                <div class="col-md-12">
                    
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($contact as $contacts) 
                        <tr>
                            
                        <td>{{ $loop->iteration  }}</td>
                            <td>{{$contacts->name}} {{$contacts->second_name}}</td>
                            <td>{{$contacts->phonenumber	}}</td>
                            <td>{{$contacts->email}}</td>
                            <td>{{$contacts->message}}</td>
                            <td><a href="{{url('contact-delete/'.$contacts->id)}}" type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
