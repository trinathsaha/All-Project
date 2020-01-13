@extends('admin.master3')
@section('title')
    Manage Subcategories
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
                            <th>SubCategories Name</th>
                            <th>SubCategories Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @php($i =1)
                        @foreach ($Subcategories as $subcategory)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$subcategory->subcategories_name}}</td>
                                <td>{{$subcategory->subcategories_description}}</td>
                                <td>{{$subcategory->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-subcategories', ['id' => $subcategory->id ])}}">Edit</a>
                                    <a href="#" id="{{$subcategory->id}}" class="deleteBtn">Delete</a>
                                    <form id="deletenewsForm{{$subcategory->id}}" action="{{route('delete-Subcategories')}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$subcategory->id}}" name="id"/>
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