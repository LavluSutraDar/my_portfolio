@extends('backend.master')

@section('title')
    Edit
@endsection

@section('main-content')
     <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form action="{{route('home.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="mb-3">
                        <label for="" class="form-label">Edit Name</label>
                        <input type="text" name="edit_name" class="form-control @error('edit_name') is-invalid @enderror"
                            value="{{ $data->name }}">

                        @error('edit_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Edit Title</label>
                        <input type="text" name="edit_title" class="form-control @error('edit_title') is-invalid @enderror"
                            value="{{ $data->title }}">

                        @error('edit_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Edit SubTitle</label>
                        <input type="text" name="edit_subtitle" class="form-control @error('edit_subtitle') is-invalid @enderror"
                            value="{{ $data->sub_title }}">

                        @error('edit_subtitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Chose Edit Your Image</label>
                        <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">

                        <input type="hidden" name="old_image"
                            class="form-control-file" value="{{ $data->image }}">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Chose your Edit PDF Fle</label>

                        {{-- <input type="file" name="resume"
                            class="mb-2 form-control-file @error('resume') is-invalid @enderror""> --}}

                            <input type="file" name="edit_resume"
                            class="mb-2 form-control-file" value="{{ $data->resume }}">

                        @error('resume')
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