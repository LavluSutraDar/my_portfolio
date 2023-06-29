@extends('backend.master')

@section('title')
    Service Create
@endsection

@section('main-content')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Icon</label>
                        <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror"
                            value="{{ old('icon') }}">

                        @error('icon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}">

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Discription</label>

                        <textarea class="summernote form-control @error('description') is-invalid @enderror"
                            name="description" rows="5">
                            

                        </textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-danger" href="">Add</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection
