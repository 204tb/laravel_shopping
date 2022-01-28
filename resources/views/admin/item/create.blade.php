<h2>商品入力</h2>
<a href="{{route('admin.item.index')}}">商品一覧</a>

<form action="{{route('admin.item.add')}}" method="post">
    @csrf
    <!--
        
        クロスサイトリクエストフォージェリ

        他サイトからの不正なリクエストを処理してしまう脆弱性の事
        @CSRFをつけることで送信の正当性を証明してくれるため、419エラーを回避できる
    -->


    <div>
        <label for="">{{__('item Name')}}</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="">{{__('item Code')}}</label>
        <input type="text" name="code">
    </div>

    <div>
    <label for="">{{__('Price')}}</label>
        <input type="text" name="price">
    </div>

    <div>
    <label for="">{{__('Stock')}}</label>
        <input type="text" name="stock">
    </div>
    

    <button style="background:lightskyblue;color:white">送信</button>

</form>