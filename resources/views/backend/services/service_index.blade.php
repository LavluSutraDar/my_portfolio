@extends('backend.master')
@section('title')
    Service Index
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
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                       @foreach ($services as $key=>$service )
                           <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$service->icon}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                              
                                <td>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="Delete">
                                        <button type="submit" class="delete btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                                <td>
                                    <a class="btn btn-info" href="{{route('services.edit', $service->id)}}">Edit</a>
                                </td>

                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection