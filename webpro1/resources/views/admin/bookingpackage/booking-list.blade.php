@extends('admin.master')

@section('title')
    View Package
@endsection

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 50px">
                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
                    <div class="panel panel-default">
                        <h3 class="text-center panel-heading">
                            Package
                        </h3>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th> First Name</th>
                                    <th>Last Name</th>
                                    <th>Contact Number</th>
                                    <th>Email Address</th>
                                    <th>Gender</th>
                                    <th>Select Package</th>
                                    <th>nid</th>
                                    <th>Passport Number</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($bookpackages as $package)
                                    <tr class="odd gradeX">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $package->first_name }}</td>
                                        <td>{{ $package->last_name }}</td>
                                        <td>{{ $package->contact_num }}</td>
                                        <td>{{ $package->email }}</td>
                                        <td>{{ $package->gender }}</td>
                                        <td>{{ $package->select_package }}</td>
                                        <td>{{ $package->nid }}</td>
                                        <td>{{ $package->passport_no }}</td>
                                        <td></td>
                                        {{--<td><img src="{{ asset($package->package_image) }}" alt="" style="height: 100px;width: 120px;" class="rounded img-fluid"></td>--}}
                                        {{--<td>--}}
                                        {{--<video controls class="audio-player" style="height: 100px;width: 120px">--}}
                                        {{--<source src="{{ asset($news->news_audio) }}">--}}
                                        {{--</video>--}}
                                        {{--</td>--}}
                                        {{--<td>{{ $news->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>--}}
                                        {{--<td>--}}
                                        {{--<a href="{{ route('edit-news', ['id'=>$news->id]) }}">Edit</a>--}}
                                        {{--<a href="#" id="{{ $news->id }}" onclick="--}}
                                        {{--event.preventDefault();--}}
                                        {{--var check = confirm('Are you sure delete this!!!');--}}
                                        {{--if (check){--}}
                                        {{--document.getElementById('deleteNewsForm'+'{{ $news->id }}').submit();--}}
                                        {{--}--}}
                                        {{--">Delete</a>--}}
                                        {{--<form id="deleteNewsForm{{ $news->id }}" action="{{ route('delete-news') }}" method="POST">--}}
                                        {{--@csrf--}}
                                        {{--<input type="hidden" value="{{ $news->id }}" name="id"/>--}}
                                        {{--</form>--}}
                                        {{--</td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
    </section>
@endsection