<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/') }}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('/') }}admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/') }}admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/css/samples.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/ckeditor/toolbarconfigurator/lib/codemirror/neo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                <i class="fas fa-user-circle fa-fw" ></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick = "event.preventDefault(); document.getElementById('logoutForm').submit();" data-toggle="modal" data-target="#logoutModal">Logout</a>
				<form id = "logoutForm" action = "{{route('logout')}}" method = "POST">
				@csrf
				</form>

            </div>
        </li>
    </ul>

</nav>



<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Categories Info</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('add-news')}}">Add Categories</a>
                <a class="dropdown-item" href="{{route('manage-news')}}">Manage Categories</a>
                <a class="dropdown-item" href="{{route('add-subcategories')}}">Add SubCategories</a>
                <a class="dropdown-item" href="{{route('manage-subcategories')}}">Manage SubCategories</a>

            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Blog Info</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('add-blog')}}">Add Blog</a>
                <a class="dropdown-item" href="{{route('manage-blog')}}">Manage Blog</a>

            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Galleries Info</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('add-video')}}">Add video</a>
                <a class="dropdown-item" href="{{route('manage-blog')}}">Manage Video</a>

            </div>
        </li>
        @can('isAdmin')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Manage User</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('add-reporter')}}">Add Reporter</a>
                <a class="dropdown-item" href="{{route('manage-user')}}">Manage user</a>

            </div>
        </li>
        @endcan
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
    </ul>

    @yield('initbody')

    <div id="content-wrapper">
    @yield('body')

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Trinath Saha Website 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>

<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('login')}}">Logout</a>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/') }}admin/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/') }}admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('/') }}admin/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/') }}admin/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/') }}admin/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('/') }}admin/js/demo/datatables-demo.js"></script>
<script src="{{ asset('/') }}admin/js/demo/chart-area-demo.js"></script>
<script src="{{ asset('/') }}admin/ckeditor/samples/../ckeditor.js"></script>
<script src="{{ asset('/') }}admin/ckeditor/samples/js/sample.js"></script>

<script>
    $('.deleteBtn').click(function () {
        event.preventDefault();
        var newsId = $(this).attr('id');
      var check = confirm('Are you sure to Delete this !!!!');
      if (check)
      {
          document.getElementById('deletenewsForm'+newsId).submit();
      }
    });

</script>
<script>
initSample();
</script>

<script type="text/javascript">
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $(document).ready(function () {
        $('#category').change(function (){
            // console.log('hmm its change');
            var categoryid = $(this).val();
            // console.log(categoryid);
            var div =$('#subcategory').parent();
            var op = " ";
            $.ajax({
                    type:'get',
                    url:"add-blog/fetch",
                    data:{'cat_id':categoryid},
                    dataType:"json",
                    beforeSend: function (request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                    },
                    success:function (category) {
                        // console.log(category);
                        op+='<option value="0" selected disabled>chose subcategory name</option>';
                        for (var i=0;i<category.length;i++)
                        {
                            op+='<option value="'+category[i].subcategories_name+'">'+category[i].subcategories_name+'</option>'
                        }

                        // $("#subcategory").append('<option>Select</option>');
                        // $.each(data,function(key,value){
                        //     $("#subcategory").append('<option value="'+key+'">'+value+'</option>');

                        div.find('#subcategory').html(" ");
                        div.find('#subcategory').append(op);
                    },
                    error: function () {
                    console.info("error");
                    }
                });

        });
    });


</script>
<script type="text/javascript">
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $(document).ready(function () {
        $('#editcategory').change(function (){
            // console.log('hmm its change');
            var editcategoryid = $(this).val();
            console.log(editcategoryid);
            var div =$('#subcategory').parent();
            var op = " ";
            $.ajax({
                type:'get',
                url:"edit-blog/fetch",
                data:{'cat_id':editcategoryid},
                dataType:"json",
                beforeSend: function (request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success:function (managecategory) {
                     console.log(category);
                    op+='<option value="0" selected disabled>chose subcategory name</option>';
                    for (var i=0;i<managecategory.length;i++)
                    {
                        op+='<option value="'+managecategory[i].subcategories_name+'">'+managecategory[i].subcategories_name+'</option>'
                    }

                    // $("#subcategory").append('<option>Select</option>');
                    // $.each(data,function(key,value){
                    //     $("#subcategory").append('<option value="'+key+'">'+value+'</option>');

                    div.find('#subcategory').html(" ");
                    div.find('#subcategory').append(op);
                },
                error: function () {
                    console.info("error");
                }
            });

        });
    });


</script>

</body>

</html>
