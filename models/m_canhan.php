<?php
require_once ('database.php');
class m_canhan extends database
{
    public function read_production()
    {
        if(isset($_REQUEST["id"])) {
            $id = $_REQUEST["id"];

            $sql= "select * from sinh_vien_5_tot WHERE id=$id";
            $this->setQuery($sql);
            return $this ->loadAllRows();
        }
    }
}
?>
