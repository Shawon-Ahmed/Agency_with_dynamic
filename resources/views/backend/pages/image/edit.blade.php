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
                        <div class="p-2 mt-4">
                            <form class="needs-validation" type="text" method="POST" action="{{route('image.update', $image->id)}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Update Image</label>
                                    <input type="file" class="form-control" id="useremail" value="{{$image->image}}" autocomple="off" name="image">
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.includes.footer')
</div>
@endsection