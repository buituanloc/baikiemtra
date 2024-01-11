@foreach($menus as $menu)
    <tr class="hide">
        <td contenteditable="true"> {{$menu->menu_id}} </td>
        <td contenteditable="true"> {{str_repeat('++++',$repeat).$menu->menu_name}} </td>
        <td contenteditable="true"> {{$menu->menu_parent_id}} </td>
        <td contenteditable="true"> {{$menu->menu_url}} </td>
        <td>
            <span class="table-remove">
                <a href="{{route('admin.menu.edit',$menu->menu_id)}}">
                    <button type="button" class="btn mb-3 btn-success">
                        <i class="fa-solid fa-pen-to-square m-0"></i>
                    </button>
                </a>
            </span>
            <span class="table-remove">
                <a href="{{route('admin.menu.remove',$menu->menu_id)}}">
                    <button onclick="return confirm('Bạn có muốn xóa không?')" type="button" class="btn mb-3 btn-danger">
                        <i class="fa-solid fa-trash-can m-0"></i>
                    </button>
                </a>
            </span>
        </td>
    </tr>
    @if($menu->childs)
        @include('admins.content.menu.menu_row_table',['menus'=>$menu->childs,'repeat'=>$repeat+1])
    @endif
@endforeach
