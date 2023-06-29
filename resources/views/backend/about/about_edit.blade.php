@extends('backend.master')
@section('title')
    About Edit
@endsection

@section('main-content')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form action="{{route('about.update', $about->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="edit_name" class="form-control @error('edit_name') is-invalid @enderror"
                            value="{{ $about->name }}">

                        @error('edit_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Profile</label>
                        <input type="text" name="edit_profile" class="form-control @error('edit_profile') is-invalid @enderror"
                            value="{{ $about->profile }}">

                        @error('edit_profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="edit_email" class="form-control @error('edit_email') is-invalid @enderror"
                            value="{{ $about->email }}">

                        @error('edit_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="number" name="edit_phone" class="form-control @error('edit_phone') is-invalid @enderror"
                            value="{{ $about->phone }}">

                        @error('edit_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Discription</label>

                        <textarea class="summernote form-control @error('edit_description') is-invalid @enderror" name="edit_description" rows="5" >
                            {{$about->description}}

                        </textarea>

                        @error('edit_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                         <img src="{{ asset('backend/about-image/' . $about->image) }}" alt=""style="width: 100px">

                        <input type="file" name="image"
                            class="mt-3 form-control-file @error('image') is-invalid @enderror">

                            <input type="hidden" name="old_edit_image"
                            class="form-control-file" value="{{$about->image}}">

                        @error('edit_image')
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
