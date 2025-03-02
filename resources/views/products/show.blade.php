@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Просмотр продукта</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Название:</strong>
                <p>{{ $product->name }}</p>
            </div>

            <div class="mb-3">
                <strong>Описание:</strong>
                <p>{{ $product->description ?: 'Нет описания' }}</p>
            </div>

            <div class="mb-3">
                <strong>Цена:</strong>
                <p>{{ number_format($product->price, 2) }} ₽</p>
            </div>

            <div class="mb-3">
                <strong>Категория:</strong>
                <p>{{ $product->category->name }}</p>
            </div>

            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Редактировать</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
                    </form>
                </div>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад к списку</a>
            </div>
        </div>
    </div>
@endsection 