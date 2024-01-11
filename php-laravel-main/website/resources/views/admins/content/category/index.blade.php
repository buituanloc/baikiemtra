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
                               <a href="{{route('admin.category.add')}}">
                                  <button type="button" class="btn btn-success mb-3">Add New</button>
                               </a>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include("admins.content.category.row_table",["categories"=>$categories, "level"=>0])
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
