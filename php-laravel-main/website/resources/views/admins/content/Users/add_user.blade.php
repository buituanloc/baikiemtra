@extends('layout.adminLayoutPage')
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Input</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
            <form action="{{route('admin.user.post')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="userName">Name Input</label>
                    <input type="text" class="form-control" id="userName" name="name"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="userPhone">Phone Input</label>
                    <input type="text" class="form-control" id="userPhone" name="phone"  placeholder="Enter Phone">
                </div>
                <div class="form-group">
                    <label for="userEmail">Email Input</label>
                    <input type="text" class="form-control" id="userEmail" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="userPassword">Password Input</label>
                    <input type="text" class="form-control" id="userPassword" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="userAvatar">Avatar</label>
                    <input type="text" class="form-control" id="userAvatar" name="avatar"  placeholder="Enter Link Avatar">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn iq-bg-danger">Cancel</button>
            </form>
        </div>
    </div>
@endsection
