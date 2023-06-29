@extends('backend.master')
@section('title')
    PortFolio View
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
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Category</th>
                            <th>Small Image</th>
                            <th>Big Image</th>
                            <th>Client</th>
                            <th>Description</th>
                            <th>Delete</th>
                            <th>Edit</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($portfolis as $key => $portfoli)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $portfoli->title }}</td>
                                <td>{{ $portfoli->sub_title }}</td>
                                <td>{{ $portfoli->category }}</td>

                                <td>
                                    <img src="{{ asset('backend/portfolio-image/' . $portfoli->small_image) }}" alt="" style="width: 100px">
                                </td>

                                <td> 
                                    <img src="{{ asset('backend/portfolio-image/' . $portfoli->big_image) }}" alt="" style="width: 100px">
                                </td>

                                <td>{{ $portfoli->client }}</td>
                                <td>{{ $portfoli->description }}</td>
                                
                                </td>


                                <td>
                                    <form action="{{ route('portfolio.destroy', $portfoli->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="Delete">
                                        <button type="submit" class="delete btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                                <td>
                                   
                                        <a class="btn btn-info" href="{{route('portfolio.edit', $portfoli->id)}}">Edit</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
