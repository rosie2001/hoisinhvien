<?php
require_once ('database.php');
class m_thanhpho extends database
{
    public function read_production()
    {
        $sql= "SELECT * FROM `sinh_vien_5_tot` WHERE thanh_pho ='1'";
        $this->setQuery($sql);
        return $this ->loadAllRows();
    }
}
