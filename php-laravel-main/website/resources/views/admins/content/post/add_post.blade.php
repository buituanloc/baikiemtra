@extends('layout.adminLayoutPage')
@section('content')
    <div class="row">
        <div class="col-sm-12 ">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Bài viết</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="{{route('admin.post.new')}}" method="POST">
                        @csrf
                      <div class="row">
                          <div class=" col-sm-12 col-lg-6">
                              <div class="form-group">
                                  <label for="menuName">Title : </label>
                                  <input type="text" class="form-control" id="menuName" name="title" placeholder="Nhập tiêu đề">
                              </div>
                              <div class="form-group">
                                  <label for="menuName">Slug: </label>
                                  <input type="text" class="form-control" id="menuName" name="slug" placeholder="Nhập slug">
                              </div>
                              <div class="form-group">
                                  <label for="menuName">Image: </label>
                                  <div class="input-group">
                                      <input type="text" id="image_label" class="form-control" name="image"
                                             aria-label="Image" aria-describedby="button-image">
                                      <div class="input-group-append">
                                          <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="postContent">Mô tả ngắn</label> <br>
                                  <textarea style="width: 100%" id="post_description" name="description"
                                            placeholder="Nhập mô tả bài viết">
                            </textarea>
                              </div>
                          </div>
                          <div class="col-sm-12 col-lg-6">
                              <div class="form-group">
                                  <label for="menuName">SEO Title: </label>
                                  <input type="text" class="form-control" id="menuName" name="seo_title" placeholder="Nhập tiêu đề">
                              </div>
                              <div class="form-group">
                                  <label for="menuName">SEO Keywords</label>
                                  <input type="text" class="form-control" id="menuName" name="seo_keywords" placeholder="Nhập Keywords">
                              </div>
                              <div class="form-group">
                                  <label for="seoDescription">SEO Description: </label> <br>
                                  <textarea style="width: 100%" id="seoDescription" name="seo_description"
                                            placeholder="Nhập mô tả Seo">
                                  </textarea>
                              </div>
                          </div>
                      </div>
                    <div>
                        <div class="form-group">
                            <label for="postContent">Content</label> <br>
                            <textarea style="width: 100%" id="postContent" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn iq-bg-danger">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
