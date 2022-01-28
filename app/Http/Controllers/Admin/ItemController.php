<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;//モデルの読み込み

class ItemController extends Controller
{
    //商品一覧ページの表示
    public function index()
    {
        $items = Item::get();//Itemからデータを取得
        $data = ['items' => $items];
        return view("admin.item.index",$data);//
    }
    
    //商品入力
    public function create(){
        return view("admin.item.create");
    }

    //商品追加
    public function add(Request $req){
        $posts = $req->all();//受け取ったデータを変数に代入
        //dd($posts);//データ内容をページ上に表示
        Item::create($posts);//データベースに受け取ったデータを登録
        return redirect("/admin/item/");//商品一覧にリダイレクト

    }

    public function edit(Request $request,$id){
        $item = Item::find($id);//うけとったidで検索
        $data = ["item" => $item];
        return view("admin.item.edit",$data);
    }

    public function update(Request $request,$id){
        $posts = $request->all();//受け取ったリクエストを代入
        Item::find($id)->update($posts);//リクエストから受け取ったデータで更新
        return redirect()->route("admin.item.index");//商品一覧に飛ばす
    }
    
}
