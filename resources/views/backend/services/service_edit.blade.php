@extends('backend.master')

@section('title')
    Service Update
@endsection

@section('main-content')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form action="{{route('services.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="mb-3">
                        <label for="" class="form-label">Update Icon</label>
                        <input type="text" name="edit_icon" class="form-control @error('edit_icon') is-invalid @enderror"
                            value="{{$data->icon}}">

                        @error('edit_icon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Update Title</label>
                        <input type="text" name="edit_title" class="form-control @error('edit_title') is-invalid @enderror"
                            value="{{$data->title}}">

                        @error('edit_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Update Discription</label>

                        <textarea class="summernote form-control @error('edit_description') is-invalid @enderror" name="edit_description" rows="5">
                            {{$data->description}}
                        </textarea>

                        @error('edit_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-danger" href="">UPDATE</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
    
@endsection
