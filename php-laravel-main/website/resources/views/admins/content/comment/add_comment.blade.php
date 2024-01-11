@extends('layout.adminLayoutPage')
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Input</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route('admin.comment.post')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="content">Content Input</label>
                    <input type="text" class="form-control" id="content" name="content" placeholder="Enter Content">
                </div>
                <div class="form-group">
                    <label for="menuParentId">Parent Id</label>
                    <select class="form-control" id="menuParentId" name="parent_id">
                        <option value="0">Không chọn</option>
                        @include('admins.content.comment.add_comment_option',['comments'=>$comments,'repeat'=>0])
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"> Submit </button>
                <button type="submit" class="btn iq-bg-danger"> Cancel </button>
            </form>
        </div>
    </div>
@endsection
