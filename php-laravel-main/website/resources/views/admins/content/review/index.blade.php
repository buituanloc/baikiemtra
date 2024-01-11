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
                               <a href="{{route('admin.review.add')}}">
                                  <button type="button" class="btn btn-success mb-3">Add New</button>
                               </a>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Review Id</th>
                                        <th>Name</th>
                                        <th>User Id</th>
                                        <th>Category Id</th>
                                        <th>Preview Img</th>
                                        <th>Description</th>
                                        <th>Content</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reviews as $item)
                                    <tr class="hide">
                                        <td contenteditable="true"> {{$item->review_id}} </td>
                                        <td contenteditable="true"> {{$item->name}} </td>
                                        <td contenteditable="true"> {{$item->user_id}} </td>
                                        <td contenteditable="true"> {{$item->category_id}} </td>
                                        <td contenteditable="true"><img src="{{$item->preview_img}}" alt="" width="30px" height="30px">  </td>
                                        <td contenteditable="true"> {{$item->description}} </td>
                                        <td contenteditable="true"> {{$item->content}} </td>

                                        <td>
                                            <span class="table-remove">
                                                <button type="button" class="btn iq-bg-danger btn-rounded btn-sm my-0">
                                                    <a href="#">Sửa</a>
                                                </button>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="table-remove">
                                                 <a href="{{route('admin.review.remove',$item->review_id)}}">
                                                    <button onclick="return confirm('Bạn có muốn xóa không?');" type="button" class="btn iq-bg-danger btn-rounded btn-sm my-0">
                                                           Xóa
                                                    </button>
                                                </a>
                                            </span>
                                        </td>
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
@endsection
