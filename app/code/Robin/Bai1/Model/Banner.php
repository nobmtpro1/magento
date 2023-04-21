<?php

namespace Robin\Bai1\Model;


class Banner extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init('Robin\Bai1\Model\ResourceModel\Banner');
    }
}
