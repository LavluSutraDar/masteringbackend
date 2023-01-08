@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Category') }}</div>
                <div class="card-body">

                   <a class="btn btn-danger" href="{{ route('category.create') }}">Add Category</a>

                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">S-L</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                        <th scope="col">Edit</th>

                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($category as $key=>$item)

                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $item->category_name }}</td>
                            <td>{{ $item->category_slug }}</td>
                            <td>
                            <a href="{{ route('cat.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>

                            <td>
                                <a class="btn btn-danger" href="{{ route('category.edit', $item->id) }}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                  </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
