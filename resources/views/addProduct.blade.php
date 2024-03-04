@extends('layouts.app')

@section('title', '新增商品')

@section('content')
<form method="POST" action="">
    <div>
        <label>商品名稱 :</label>
        <input text="text" name="productName" id="productName"/>
    </div>
    <div>
        <label>商品類別 :</label>
        <select name="productType" id="productType">
            <option value="">請選擇</option>
            <option value="book">書籍</option>
            <option value="stationery">文具</option>
            <option value="dailyuse">日用品</option>
            <option value="clothes">衣服</option>
            <option value="3C">3C</option>
            <option value="food">美食</option>
        </select>
        <input text="text" name="productName" id="productName"/>
    </div>
    <div>
        <label>商品描述 :</label>
        <textarea text="text" name="productDescription" id="productDescription" rows="5"></textarea>
    </div>

</form>
<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
@endsection
