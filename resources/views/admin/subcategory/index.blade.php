@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <d class="card-header">{{ __('All Category') }}</d
                <div class="card-body">

                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">S-L</th>
                        <th scope="col">Category Id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">SubCategory Name</th>
                        <th scope="col">Action</th>
                        <th scope="col">Edit</th>

                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $key=>$value )
                        <tr>
                            
                            <td>{{++$key}}</td>
                            <td>{{$value->category_id}}</td>
                            <td>{{$value->category->category_name}}</td>
                            <td>{{$value->subcategory_name}}</td>
                            <td>
                                <a href="{{route('product.destroy', $value->id)}}" class="btn btn-danger">Delete</a>
                            </td>
       
                             <td>
                               <a class="btn btn-danger" href="">Edit</a>
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
