@foreach($menus as $menu)
    @if($menu->menu_id == $edit_menu->menu_parent_id)
        <option value="{{$menu-> menu_id}}" selected>  {{str_repeat('+++',$repeat).$menu-> menu_name}}</option>
    @else
        <option value="{{$menu-> menu_id}}"> {{str_repeat('+++',$repeat).$menu-> menu_name}}</option>
    @endif
    @if($menu->childs)
        @include('admins.content.menu.edit_menu_select',['menus'=>$menu->childs,'repeat'=> $repeat + 1,'edit_menu'=> $edit_menu])
    @endif
@endforeach
