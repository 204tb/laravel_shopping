<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<!--Routeで指定したnameで遷移先を設定-->
<div class="container">

    <h2 class="pb-4">商品一覧</h2>   
    <a class = "btn-link" href="{{route('admin.item.create')}}">商品追加</a>

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
</div>