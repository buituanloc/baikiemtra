@extends('layout.adminLayoutPage')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Input</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="{{route('admin.post.new')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="menuName">Name</label>
                            <input type="text" class="form-control" id="menuName" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="postContent">Content</label> <br>
                            <textarea style="width: 100%" id="post_description" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="menuParentId">Add Img</label>
                            <div class="input-group">
                                <input type="text" id="image_label" class="form-control" name="img"
                                       aria-label="Image" aria-describedby="button-image">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn iq-bg-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="iq-card ">
                <div id="fm" style="height: 400px;">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
