@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">

              

                <div class="card-header">{{ __('Add New subcategory') }}</div>
                <div class="card-body">
                   <form action="{{route('product.store')}}" method="POST">
                    @csrf

                     <div>
                        <label class="form-label" for="">Category Id</label>
                        <select class="form-control" name="category_id" id="">
                            @foreach ($data as $value)
                            <option value="{{$value->id}}">{{$value->category_name}}</option>
                            @endforeach
                        </select>
                    </div> 

                    <div class="mb-3">
                      <label class="form-label">SubCategory Name</label>
                      <input type="text" class="form-control @error ('subcategoryname') is-invalid @enderror" name="subcategoryname" placeholder="Sub Category Name" value="{{ old('subcategoryname') }}" >

                      @error('subcategoryname')
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
