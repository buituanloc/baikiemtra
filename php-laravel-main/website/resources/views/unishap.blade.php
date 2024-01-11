<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laracoding.com TinyMCE Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<table class="table table-bordered table-responsive-md table-striped text-center">
    <thead>
    <tr>
        <th> STT </th>
        <th>Tên Sách</th>
        <th>Tác Giả</th>
        <th>Loại sách</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($book as $item)
        <tr class="hide">
            <td contenteditable="true"> {{$item->id}} </td>
            <td contenteditable="true">{{$item->name}} </td>
            <td contenteditable="true">{{$item->author}} </td>
            <td contenteditable="true">{{$item->type->name}} </td>
            <td>
                <span class="table-remove">
                    <a href="#">
                        <button type="button" class="btn mb-3 btn-success">
                            <i class="fa-solid fa-pen-to-square m-0"></i>
                        </button>
                    </a>
                </span>
                <span class="table-remove">
                    <a href="#">
                        <button onclick="return confirm('Bạn có muốn xóa không?')" type="button"
                                class="btn mb-3 btn-danger">
                            <i class="fa-solid fa-trash-can m-0"></i>
                        </button>
                    </a>
                </span>
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
</body>
</html>
