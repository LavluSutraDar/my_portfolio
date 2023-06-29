@extends('backend.master')
@section('title')
    PortFolio Create
@endsection

@section('main-content')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="_method" value="POST"> --}}

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
                        <label for="" class="form-label">Sub-Title</label>
                        <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror"
                            value="{{ old('sub_title') }}">

                        @error('sub_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
                            value="{{ old('category') }}">

                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Client Name</label>
                        <input type="text" name="client" class="form-control @error('client') is-invalid @enderror"
                            value="{{ old('client') }}">

                        @error('client')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Discription</label>

                        <textarea class="summernote form-control @error('description') is-invalid @enderror" name="description" rows="5" >
                            {{old('description')}}

                        </textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Chose Small Image</label>
                        <input type="file" name="small_image"
                            class="form-control-file @error('small_image') is-invalid @enderror" value="{{old('small_image')}}">

                        @error('small_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Chose Big Image</label>
                        <input type="file" name="big_image"
                            class="mb-2 form-control-file @error('big_image') is-invalid @enderror" value="{{old('small_image')}}">

                        @error('big_image')
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
