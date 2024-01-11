@foreach($categories as $item)
    <tr class="hide">
        <td contenteditable="true"> {{$item->category_id}}</td>
        <td contenteditable="true"> {{str_repeat("----", $level).$item->category_name}}</td>
        <td contenteditable="true"> {{$item->category_slug}}</td>
        <td>
             <span class="table-remove">
                  <a href="{{route('admin.category.edit',$item->category_id )}}">
                        <button type="button" class="btn mb-3 btn-success"><i class="ri-bill-fill"></i>
                           Sửa
                        </button>
                  </a>
            </span>
            <span class="table-remove">
                 <a href="{{route('admin.category.destroy',$item->category_id )}}">
                     <button onclick="return confirm('Bạn có muốn xóa không?')"  type="button" class="btn mb-3 btn-danger">
                         <i class="ri-delete-bin-2-fill pr-0"></i>
                            Xóa
                    </button>
                </a>
            </span>
        </td>
    </tr>
    @if($item->childs)
        @include('admins.content.category.row_table', ["categories"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach
