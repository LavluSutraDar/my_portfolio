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
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>SUBJECT</th>
                            <th>MESSAGE</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contucts as $key => $contuct)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $contuct->name }}</td>
                                <td>{{ $contuct->email }}</td>
                                <td>{{ $contuct->subject }}</td>
                                <td>{{ $contuct->message }}</td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
