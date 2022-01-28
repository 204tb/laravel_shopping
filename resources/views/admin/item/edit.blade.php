@extends("layouts.app")
@section("content")
<h2>Item Edit</h2>


<form action="{{route('admin.item.update',$item->id)}}" class="form" method="post">
    @csrf

    <div>
        <label for="name">{{__('item Name')}}</label>
        <input class="form-control" type="text" name="name" placeholder="{{$item->name}}" id="name">
    </div>

    <div>
        <label for="code">{{__('item Code')}}</label>
        <input class="form-control" type="text" name="code" id="code" placeholder={{$item->code}}>
    </div>

    <div>
    <label for="price">{{__('Price')}}</label>
        <input class="form-control" type="text" name="price" id="price" placeholder={{$item->price}}>
    </div>

    <label for="stock">{{__('label.stock')}}</label>
        <input class="form-control" type="text" name="stock" id="stock" placeholder={{$item->stock}}>
    </div>

    <button class="btn btn-primary mt-3">送信</button>

</form>