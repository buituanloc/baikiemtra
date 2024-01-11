@foreach($comments as $comment)
    <tr class="hide">
        <td contenteditable="true"> {{$comment->id}} </td>
        <td contenteditable="true"> {{$comment->parent_id}} </td>
        <td contenteditable="true"> {{str_repeat('+++',$repeat).$comment->content}} </td>
        <td contenteditable="true"> {{$comment->review_id}} </td>
        <td contenteditable="true"> {{$comment->user_id}} </td>
        <td>
            <span class="table-remove">
                <a href="#" title="Sửa">
                    <button type="button" class="btn mb-3 btn-success">
                        <i class="fa-solid fa-pen-to-square m-0"></i>
                    </button>
                </a>
            </span>
            <span class="table-remove">
                <a href="#" title="Xóa">
                    <button onclick="return confirm('Bạn có muốn xóa không?')" type="button" class="btn mb-3 btn-danger">
                        <i class="fa-solid fa-trash-can m-0"></i>
                    </button>
                </a>
            </span>
        </td>
    </tr>
    @if($comment->childs)
        @include('admins.content.comment.comment_row',['comments'=>$comment->childs,'repeat'=>$repeat + 1,])
    @endif
@endforeach
