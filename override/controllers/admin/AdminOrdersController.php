<?php
/**
 * Do linku zamówienia dodajemy &pp_del={ilość do skasowania}.
 */
class AdminOrdersController extends AdminOrdersControllerCore
{
    public function ppDeleteOrders($limit = 99)
    {
        $rows = Order::getAll($limit);

        foreach ($rows as $row) {
            $order = new Order($row['id_order']);
            $order->delete();
        }
    }

    public function initProcess()
    {
        parent::initProcess();

        if ($count = Tools::getValue('pp_del')) {
            $this->ppDeleteOrders($count);
        }
        /*
         * ...
         */
    }
}
