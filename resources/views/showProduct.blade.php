@extends('layouts.app')

@section('title', '商品')

@section('content')
    @forelse ($products as $product)
        <div class="border-y-2 border-dashed">
            <div>
                <p class="text-xl font-bold mb-2">商品名稱 : {{ $product->name }}</p>
            </div>
            <div>
                <p class="mb-2">售價 : {{ $product->price }}</p>
            </div>
            <div>
                <p class="mb-2">分類 : {{ $product->type }}</p>
            </div>
            <div>
                <p class="mb-2">{{ $product->description }}</p>
            </div>
            <div>
                <p class="text-sm text-right mb-2">詳細 >></p>
            </div>
        </div>
    @empty
        <div>找不到商品</div>
    @endforelse
@endsection
