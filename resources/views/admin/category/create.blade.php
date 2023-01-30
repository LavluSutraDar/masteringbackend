@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">

                {{-- <a class="btn btn-danger" href="{{ route('all.category') }}">Add Category</a> --}}

                <div class="card-header">{{ __('Add New Category') }}</div>
                <div class="card-body">
                   <form action="{{ route('category.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label class="form-label">Category Name</label>
                      <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" >

                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
