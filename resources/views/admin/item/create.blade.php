@extends("layouts.app")
@section("content")

<h2>商品入力</h2>


<form action="{{route('admin.item.add')}}" method="post">
    @csrf
    <!--
        
        クロスサイトリクエストフォージェリ

        他サイトからの不正なリクエストを処理してしまう脆弱性の事
        @CSRFをつけることで送信の正当性を証明してくれるため、419エラーを回避できる
    -->


    <div>
        <label for="name">{{__('item Name')}}</label>
        <input class="form-control" type="text" name="name" id="name">
    </div>

    <div>
        <label for="code">{{__('item Code')}}</label>
        <input class="form-control" type="text" name="code" id="code">
    </div>

    <div>
    <label for="price">{{__('Price')}}</label>
        <input class="form-control" type="text" name="price" id="price">
    </div>

    <div>
    <label for="stock">{{__('Stock')}}</label>
        <input class="form-control" type="text" name="stock" id="stock">
    </div>
    

    <button class="btn btn-primary mt-3">送信</button>

</form>