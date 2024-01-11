@foreach($categories as $category)
    @if($category->category_id === $item->category_parent_id)
        <option value="{{$category->category_id}}" selected>{{str_repeat("----", $level).$category->category_name}}</option>
    @endif
        <option value="{{$category->category_id}}">{{str_repeat("----", $level).$category->category_name}}</option>
    @if($category->childs)
        @include('admins.content.category.category_option', ["categories" =>$category->childs, 'level' => $level+1,"item"=>$item])
    @endif
@endforeach
