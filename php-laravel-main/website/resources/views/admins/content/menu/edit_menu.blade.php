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
            <form action="{{route('admin.menu.update',$edit_menu->menu_id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="menuName">Menu Name Edit</label>
                    <input type="text" class="form-control" id="menuName" name="menu_name"  value="{{$edit_menu->menu_name}}">
                </div>
                <div class="form-group">
                    <label for="menuUrl">Menu Url Edit</label>
                    <input type="text" class="form-control" id="menuUrl" name="menu_url"  value="{{$edit_menu->menu_url}}">
                </div>
                <div class="form-group">
                    <label for="menuParentId">Menu Parent Id</label>
                    <select class="form-control" id="menuParentId" name="menu_parent_id" >
                        <option value="0">Không có cha</option>
                        @include("admins.content.menu.edit_menu_select",['menus'=> $menus,'repeat' => 0,'edit_menu' => $edit_menu])
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn iq-bg-danger">Cancel</button>
            </form>
        </div>
    </div>
    @endsection

