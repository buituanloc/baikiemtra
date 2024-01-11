@extends('layout.adminLayoutPage')
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Input</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="menuName">Menu Name Input</label>
                    <input type="text" class="form-control" id="menuName" name="menu_name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="menuUrl">Menu Url Input</label>
                    <input type="text" class="form-control" id="menuUrl" name="menu_url" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                    <label for="menuParentId">Menu Parent Id</label>
                    <select class="form-control" id="menuParentId" name="menu_parent_id">
                        <option value="0">Không chọn</option>
                        @include('admins.content.menu.add_menu_option',['menus'=>$menus,'repeat'=>0])
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn iq-bg-danger">Cancel</button>
            </form>
        </div>
    </div>
@endsection
