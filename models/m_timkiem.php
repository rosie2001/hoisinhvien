<?php
require_once ('database.php');
class m_timkiem extends database
{
    public function read_production()
    {
        $sql= "select * from sinh_vien_5_tot";
        $this->setQuery($sql);
        return $this ->loadAllRows();
    }
    public function read_production_thanh_pho()
    {
        $sql= "SELECT * FROM `sinh_vien_5_tot` WHERE thanh_pho ='1'";
        $this->setQuery($sql);
        return $this ->loadAllRows();
    }

}
