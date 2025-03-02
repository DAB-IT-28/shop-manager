@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Просмотр заказа #{{ $order->id }}</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Продукт:</strong>
                <p>{{ $order->product->name }}</p>
            </div>

            <div class="mb-3">
                <strong>Количество:</strong>
                <p>{{ $order->quantity }}</p>
            </div>

            <div class="mb-3">
                <strong>Статус:</strong>
                <p>
                    @if($order->status == 'pending')
                        <span class="badge bg-warning">В обработке</span>
                    @elseif($order->status == 'completed')
                        <span class="badge bg-success">Завершен</span>
                    @endif
                </p>
            </div>

            <div class="mb-3">
                <strong>Общая стоимость:</strong>
                <p>{{ number_format($order->quantity * $order->product->price, 2) }} ₽</p>
            </div>

            <div class="mb-3">
                <strong>Дата создания:</strong>
                <p>{{ $order->created_at->format('d.m.Y H:i') }}</p>
            </div>

            <div class="d-flex justify-content-between">
                <div>
                    @if($order->status == 'pending')
                        <form action="{{ route('orders.complete', $order->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success">Завершить заказ</button>
                        </form>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
                        </form>
                    @endif
                </div>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Назад к списку</a>
            </div>
        </div>
    </div>
@endsection 