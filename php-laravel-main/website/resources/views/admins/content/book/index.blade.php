@extends('layout.adminLayoutPage')
@section('content')

    <table id="datatable" class="table table-striped table-bordered">

        <h3>Mã Đơn Hàng: </h3>
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên Sản Phẩm </th>
            <th>Số Lượng</th>
            <th>Giá</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders->detail as $item)
        <tr>
            <td>{{$loop->index}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->pivot->quantity}}</td>
            <td>{{number_format($item->price).'VND'}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection


