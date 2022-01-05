<?php
require_once ('database.php');
class m_truong extends database
{
    public function read_production()
    {
        $sql= "SELECT * FROM sinh_vien_5_tot";
        $this->setQuery($sql);
        return $this ->loadAllRows();
    }
}