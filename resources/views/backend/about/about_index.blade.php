@extends('backend.master')
@section('title')
    About View
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
                            <th>NAME</th>
                            <th>PROFILE</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>DESCRIPTION</th>
                            <th>IMAGE</th>
                            <th>Delete</th>
                            <th>Edit</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($abouts as $key => $about)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $about->name }}</td>
                                <td>{{ $about->profile }}</td>
                                <td>{{ $about->email }}</td>
                                  <td>{{ $about->phone }}</td>
                                <td>{{ $about->description }}</td>

                                <td> 
                                    <img src="{{ asset('backend/about-image/' . $about->image) }}" alt="" style="width: 100px">
                                </td>

                                <td>
                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="Delete">
                                        <button type="submit" class="delete btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                                <td>
                                     <a class="btn btn-info" href="{{route('about.edit', $about->id)}}">Edit</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
