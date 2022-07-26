<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>MITEE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link rel="shortcut icon" href="{{ asset('web/img/light/favicon.png') }}" type="image/x-icon">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('admin/css/preloader.min.css') }}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <!-- style Css-->
        <link href="{{ asset('admin/css/style.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>
@yield('content')
        
<!-- JAVASCRIPT -->
<script src="{{ asset('admin/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('admin/libs/node-waves/waves.min.js')}}"></script>
<script src="{{ asset('admin/libs/feather-icons/feather.min.js')}}"></script>
<!-- pace js -->
<script src="{{ asset('admin/libs/pace-js/pace.min.js')}}"></script>

<!-- pristine js -->
<script src="{{ asset('admin/libs/pristinejs/pristine.min.js')}}"></script>
<!-- form validation -->
<script src="{{ asset('admin/js/pages/form-validation.init.js')}}"></script>

<script src="{{ asset('admin/js/app.js')}}"></script>
<script>
    function image() {
    //Get reference of FileUpload.
    var fileUpload = document.getElementById("fileUpload");
 
    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.webp)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
 
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height  != width ) {
                        alert("Height and Width must be 1500px*1500px.");
                        return false;
                    }else if(height < 1500 || width < 1500){
                        alert("Height and Width must be 1500px*1500px.");

                    }
                    // alert("Uploaded image has valid Height and Width.");
                    // return true;
                };
 
            }
        } else {
            alert("This browser does not support HTML5.");
            return false;
        }
    } else {
        alert("Please select a valid Image file.");
        return false;
    }
}

function url() {
    //Get reference of FileUpload.
    var fileUpload = document.getElementById("eerht1");
 
    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.webp)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
 
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height  != width ) {
                        alert("Height and Width must be 1500px*1500px.");
                        return false;
                    }else if(height < 1500 || width < 1500){
                        alert("Height and Width must be 1500px*1500px.");

                    }
                    // alert("Uploaded image has valid Height and Width.");
                    // return true;
                };
 
            }
        } else {
            alert("This browser does not support HTML5.");
            return false;
        }
    } else {
        alert("Please select a valid Image file.");
        return false;
    }
}



function two(){
    document.getElementById("tworadio").style.display = "flex";
    $('#eno1').prop('disabled', true);
    $('#eno2').prop('disabled', true);
    $('#eerht1').prop('disabled', true);
    $('#eerht2').prop('disabled', true);
    document.getElementById("threeradio").style.display = "none";
    // document.getElementById("eno").style.display = "disable";
    $('#fileUpload').prop('disabled', false);
}

function three(){
    document.getElementById("threeradio").style.display = "flex";
    document.getElementById("tworadio").style.display = "none";
    $('#fileUpload').prop('disabled', true);
    // document.getElementById("eno").style.display = "disable";
    $('#eerht1').prop('disabled', false);
    $('#eerht2').prop('disabled', false);
}

</script>


        <!-- ckeditor -->
        <script src="{{ asset('admin/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

        <!-- init js -->
        <script src="{{ asset('admin/js/pages/form-editor.init.js')}}"></script>


</html>