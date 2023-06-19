@extends('backend.master')
@section('title')
    Home View
@endsection

@section('main-content')
    <div class="card shadow mb-4">
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>I-D</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Image</th>
                            <th>Resume</th>
                            <th>Delete</th>
                            <th>Edit</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($homes as $key => $home)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $home->name }}</td>
                                <td>{{ $home->title }}</td>
                                <td>{{ $home->sub_title }}</td>
                                <td>
                                    <img src="{{ asset('backend/home-image/' . $home->image) }}" alt="" style="width: 100px">
                                </td>
                                <td>{{ $home->resume }}</td>
                                <td>
                                    <form action="{{ route('home.destroy', $home->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="Delete">
                                        <button type="submit" class="delete btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                                <td>
                                   
                                        <a class="btn btn-info" href="{{route('home.edit', $home->id)}}">Edit</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
