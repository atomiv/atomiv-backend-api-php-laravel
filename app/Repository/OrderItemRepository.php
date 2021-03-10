<?php


namespace App\Repository;

use App\OrderItem;
use App\Repository\Interfaces\OrderitemRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class OrderItemRepository implements OrderitemRepositoryInterface
{
    private $orderItemModel;

    public function __construct(OrderItem $orderItemModel)
    {
        $this->orderItemModel = $orderItemModel;
    }

    public function find(int $id): Model
    {
        return $this->orderItemModel->find($id);
    }

    public function insert(OrderItem $orderItem): Model
    {
       $orderItem->save();

       return $orderItem;
    }

    public function update(OrderItem $orderItem): Model
    {
        $orderItem->save();

        return $orderItem;
    }

}
