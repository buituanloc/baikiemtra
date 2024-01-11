@extends('layout.adminLayoutPage')
@section('content')
    <div class="col-sm-12 col-lg-6 ">
        <div class="iq-card">
            @csrf
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm Mới</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form  action="" method="POST">
                    <div class="form-group">
                        <label for="categoryName">Name</label>
                        <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="categorySlug">Slug</label>
                        <input type="text" class="form-control" id="categorySlug" name="category_slug" placeholder="Enter Slug">
                    </div>
                    <div class="checkbox mb-3">
                        <select id="categoryParentId" name="category_parent_id">
                            <label for="categoryParentId">User ID</label>
                            <option value="0">Không chọn</option>
                        </select>
                    </div>
                    <div class="checkbox mb-3">
                        <select id="categoryParentId" name="category_parent_id">
                            <label for="categoryParentId">Category ID</label>
                            <option value="0">Không chọn</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn iq-bg-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
