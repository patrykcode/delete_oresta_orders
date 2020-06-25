<?php

class Order extends OrderCore
{
    //pobieranie listy zamówień
    public function getAll($limit = 10)
    {
        return Db::getInstance()->executeS('SELECT id_order FROM ps_orders WHERE 1 ORDER BY id_order DESC LIMIT '.$limit);
    }
}
