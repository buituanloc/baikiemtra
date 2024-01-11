@foreach($menus as $menu)
    <option value="{{$menu->menu_id}}">{{str_repeat('---',$repeat).$menu->menu_name}}</option>
    @if($menu->childs)
        @include('admins.content.menu.add_menu_option',['menus'=>$menu->childs,'repeat'=>$repeat+1])
    @endif
@endforeach
