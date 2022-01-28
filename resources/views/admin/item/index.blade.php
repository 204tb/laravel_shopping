@extends("layouts.app")
@section("content")
    <h2 class="pb-4">商品一覧</h2>   


    <table class="table table-striped">
        <tr>
            <th></th>
            <th>{{__('Item Name')}}</th>
            <th>{{__('Item Code')}}</th>
            <th>{{__('Item Price')}}</th>
            <th>{{__('Item Stock')}}</th>
            <th>{{__('商品編集')}}</th>
        </tr>

        @if($items)
        @foreach($items as $item)
            <p>
                <tr>
                    <td></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->stock}}</td>
                    <th class="pl-5"><a href="{{route('admin.item.edit',$item)}}">編集</a></th>
                </tr>

            </p>
        @endforeach
        @endif
    </table>
