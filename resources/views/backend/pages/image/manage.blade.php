@extends('backend.layout.template')
@section('page-title')
<title>Dashboard | Manufacturing Company</title>
@endsection 
@section('body-content')
<div class="main-content">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-cover">
                <div class="card">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Image Managment</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                Trash
                            </button>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-header p-0 border-0 bg-soft-light">
                        <table class="table ">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Location Name</th>
                                <th scope="col">Image Size</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($images as $image)
                                    <tr>
                                        <th scope="row">{{$image->id}}</th>
                                        <td >{{$image->location}}</td>
                                        <td>{{$image->size}}</td>
                                        <td>
                                            @if(!is_null($image))
                                                <img src="{{asset('image/custom/'.$image->image)}}" width="50" hight="60">
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-bar">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('image.edit', $image->id)}}" class="btn btn-primary">Edit</a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
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
</div>
@include('backend.includes.footer')
</div>
@endsection