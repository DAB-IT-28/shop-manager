<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository
{
    protected $model;
    public const ITEMS_PER_PAGE = 15;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function getAllPaginated(int $perPage = null): LengthAwarePaginator
    {
        $perPage = $perPage ?? self::ITEMS_PER_PAGE;
        return $this->model->with('category')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    public function findById(int $id): ?Product
    {
        return $this->model->find($id);
    }

    public function create(array $data): Product
    {
        return $this->model->create($data);
    }

    public function update(Product $product, array $data): bool
    {
        return $product->update($data);
    }

    public function delete(Product $product): bool
    {
        return $product->delete();
    }

    public function getByCategory(int $categoryId): LengthAwarePaginator
    {
        return $this->model->where('category_id', $categoryId)
            ->with('category')
            ->orderBy('created_at', 'desc')
            ->paginate(self::ITEMS_PER_PAGE);
    }
}