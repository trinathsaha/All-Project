@extends('admin.master3')
@section('title')
    Manage Blog
@endsection

@section('initbody')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"></h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>News Name</th>
                            <th>Blog Title</th>
                            <th>Blog Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @php($i =1)
                        @foreach ($blogs as $blog)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$blog->news_name}}</td>
                                <td>{{$blog->subcategory_name}}</td>
                                <td>{{$blog->blog_title}}</td>
                                <td><img src="{{asset($blog->blog_image)}}" alt=""height="100" width="120"></td>
                                <td>{{$blog->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-blog', ['id' => $blog->id ])}}">Edit</a>
                                    <a href="#" id="{{$blog->id}}" class="deleteBtn">Delete</a>
                                    <form id="deletenewsForm{{$blog->id}}" action="{{route('delete-blog')}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$blog->id}}" name="id"/>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
@endsection
