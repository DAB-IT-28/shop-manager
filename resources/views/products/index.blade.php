@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Продукты</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить продукт</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Цена</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ number_format($product->price, 2) }} ₽</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Просмотр</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Редактировать</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <div class="text-muted">
            Показано {{ $products->firstItem() ?? 0 }} - {{ $products->lastItem() ?? 0 }} из {{ $products->total() }} продуктов
        </div>
        <div>
            {{ $products->links() }}
        </div>
    </div>
@endsection