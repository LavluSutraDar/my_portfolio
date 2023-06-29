@extends('backend.master')
@section('title')
    PortFolio Edit
@endsection

@section('main-content')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="mb-3">
                        <label for="" class="form-label">Edit Title</label>
                        <input type="text" name="edit_title"
                            class="form-control @error('edit_title') is-invalid @enderror" value="{{ $portfolio->title }}">

                        @error('edit_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Edit Sub-Title</label>
                        <input type="text" name="edit_sub_title"
                            class="form-control @error('edit_sub_title') is-invalid @enderror"
                            value="{{ $portfolio->sub_title }}">

                        @error('edit_sub_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Edit Category</label>
                        <input type="text" name="edit_category"
                            class="form-control @error('edit_category') is-invalid @enderror"
                            value="{{ $portfolio->category }}">

                        @error('edit_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Edit Client Name</label>
                        <input type="text" name="edit_client"
                            class="form-control @error('edit_client') is-invalid @enderror"
                            value="{{ $portfolio->client }}">

                        @error('edit_client')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Edit Discription</label>

                        <textarea class="summernote form-control @error('edit_description') is-invalid @enderror" name="edit_description"
                            rows="5">
                            {{ $portfolio->description }}

                        </textarea>

                        @error('edit_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Chose Edit Small Image</label>
                        <img src="{{ asset('backend/portfolio-image/' . $portfolio->small_image) }}" alt="" style="width: 100px">

                        <input type="file" class="form-control-file @error('small_image') is-invalid @enderror"
                            name="small_image">

                        <input type="hidden" name="old_edit_small_image" class="form-control-file"
                            value="{{ $portfolio->small_image }}">

                        @error('small_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Chose Edit Big Image</label>
                        <img src="{{ asset('backend/portfolio-image/' . $portfolio->big_image) }}" alt=""style="width: 100px">
                        
                        <input type="file" name="big_image"
                            class="mb-2 form-control-file @error('edit_big_image') is-invalid @enderror" value="">

                        <input type="hidden" name="old_edit_big_image" class="mb-2 form-control-file"
                            value="{{ $portfolio->big_image }}">


                        @error('edit_big_image')
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
