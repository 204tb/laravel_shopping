
<h2>Item Edit</h2>
<a href="{{route('admin.item.index')}}">商品一覧</a>

<form action="{{route('admin.item.update',$item->id)}}" method="post">
    @csrf

    <div>
        <label for="">{{__('item Name')}}</label>
        <input type="text" name="name" placeholder="{{$item->name}}">
    </div>

    <div>
        <label for="">{{__('item Code')}}</label>
        <input type="text" name="code" placeholder={{$item->code}}>
    </div>

    <div>
    <label for="">{{__('Price')}}</label>
        <input type="text" name="price" placeholder={{$item->price}}>
    </div>

    <label for="">{{__('label.stock')}}</label>
        <input type="text" name="stock" placeholder={{$item->stock}}>
    </div>

    <button style="background:lightskyblue;color:white">送信</button>

</form>