@extends('admin.master3')
@section('title')
    Manage News
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
                            <th>News Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @php($i =1)
                        @foreach ($News as $news)
                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>{{$news->news_name}}</td>
                            <td>{{$news->news_description}}</td>
                            <td>{{$news->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('edit-news', ['id' => $news->id ])}}">Edit</a>
                                <a href="#" id="{{$news->id}}" class="deleteBtn">Delete</a>
                                <form id="deletenewsForm{{$news->id}}" action="{{route('delete-news')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$news->id}}" name="id"/>
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