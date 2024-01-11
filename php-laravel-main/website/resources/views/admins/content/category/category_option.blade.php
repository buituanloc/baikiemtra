@foreach($categories as $category)
    <option value="{{$category->category_id}}">{{str_repeat("----", $level).$category->category_name}}</option>
    @if($category->childs)
        @include('admins.content.category.category_option', ["categories" =>$category->childs, 'level' => $level+1])
    @endif
@endforeach
