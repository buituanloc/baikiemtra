@extends('layout.adminLayoutPage')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Editable Table</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                            <span class="table-add float-right mb-3 mr-2">
                                <a href="{{route('admin.menu.add')}}">
                                    <button type="button" class="btn btn-success mb-3">Add New</button>
                                </a>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Menu Id</th>
                                        <th>Menu Name</th>
                                        <th>Menu Parent Id</th>
                                        <th>Menu Url</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @include('admins.content.menu.menu_row_table',['menus'=>$menus, 'repeat'=>0])
                                </tbody>
                            </table>
                                {{$menus->links('vendor.pagination.bootstrap-4 ')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
