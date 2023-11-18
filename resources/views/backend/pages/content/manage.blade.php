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
                        <h4 class="card-title mb-0 flex-grow-1">Content Managment</h4>
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
                                <th scope="col">Content Name</th>
                                <th scope="col">Content-1</th>
                                <th scope="col">Content-2</th>
                                <th scope="col">Content-3</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contents as $content)
                                    <tr>
                                        <th scope="row">{{$content->id}}</th>
                                        <td class="bg-soft-dark">{{$content->placeName}}</td>
                                        <td>{{$content->content1}}</td>
                                        <td>{{$content->content2}}</td>
                                        <td>{{$content->content3}}</td>
                                        <td>
                                            <div class="action-bar">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('content.edit', $content->id)}}" class="btn btn-primary">Edit</a>
                                                    </li>
                                                </ul>
                                                <!-- <ul>
                                                    <li>
                                                        <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteContent{{$content->id}}">Delete</a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </td>
                                    <!-- <div class="modal fade" id="#deleteContent{{$content->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Are You Conform Delete this content?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="action-bar">
                                                    <ul>
                                                        <li>
                                                            <form action="{{route('content.destroy', $content->id)}}" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">Yes</button>

                                                            </form>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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