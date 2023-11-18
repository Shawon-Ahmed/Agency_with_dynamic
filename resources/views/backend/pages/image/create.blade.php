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
                            <form class="needs-validation" method="POST" action="{{route('image.store')}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Location Name</label>
                                    <input type="text" class="form-control" id="useremail" autocomple="off" name="location">
                                </div>
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Photo Size</label>
                                    <input type="text" class="form-control" id="useremail" autocomple="off" name="size">
                                </div>
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Upload Photo</span></label>
                                    <input type="file" class="form-control" id="useremail" name="image">
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