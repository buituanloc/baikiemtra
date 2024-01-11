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
                                <a href="{{route('admin.post.add')}}">
                                    <button type="button" class="btn btn-success mb-3">Add New</button>
                                </a>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th> STT </th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)
                                <tr class="hide">
                                    <td contenteditable="true"> {{$loop->index}} </td>
                                    <td contenteditable="true">{{$item->title}} </td>
                                    <td contenteditable="true">{!! $item->description !!} </td>
                                    <td contenteditable="true">
                                        <img src="{{$item->image}}" width="100px" height="150px" alt="">
                                    </td>
                                    <td contenteditable="true">{!! $item->content !!} </td>
                                    <td>
                                        <span class="table-remove" title="Xem chi tiet Seo">
                                            <a href="#">
                                                <button type="button" class="btn mb-3 btn-info"  data-toggle="modal"
                                                        data-target=".bd-example-modal-xl" id="postSeo{{$item->id}}">
                                                    <i class="fa-solid fa-receipt m-0"></i>
                                                </button>
                                            </a>
                                            {{--  Modal--}}
                                            @include('admins.content.post.modal_seo')
                                            {{--   End Modal--}}
                                        </span>
                                        <span class="table-remove" title="Xem bài viết">
                                            <a href="#" >
                                                <button type="button" class="btn mb-3 btn-primary" data-toggle="modal"
                                                        data-target=".bd-example-modal-xl" id="postContent({{$item->id}})"  >
                                                    <i class="fa-solid fa-newspaper m-0"></i>
                                                </button>
                                            </a>
                                            {{-- Modal--}}
                                            @include('admins.content.post.modal')
                                            {{-- End Modal --}}
                                        </span>
                                        <span class="table-remove" title="Sửa">
                                            <a href="{{route('admin.post.edit',$item->id)}}">
                                                <button type="button" class="btn mb-3 btn-success">
                                                    <i class="fa-solid fa-pen-to-square m-0"></i>
                                                </button>
                                            </a>
                                        </span>
                                        <span class="table-remove" title="Xóa">
                                            <a href="{{route('admin.post.remove',$item->id)}}">
                                                <button onclick="return confirm('Bạn có muốn xóa không?')" type="button"
                                                        class="btn mb-3 btn-danger">
                                                    <i class="fa-solid fa-trash-can m-0"></i>
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
