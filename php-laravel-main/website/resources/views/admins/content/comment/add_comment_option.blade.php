@foreach($comments as $comment)
    <option value="{{$comment->id}}">{{str_repeat('---',$repeat).$comment->content}}</option>
    @if($comment->childs)
        @include('admins.content.comment.add_comment_option',['comments'=>$comment->childs,'repeat'=> $repeat + 1])
    @endif
@endforeach
