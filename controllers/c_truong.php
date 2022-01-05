<?php
class c_truong
{
    public function __construct()
    {
    }
    public function index()
    {
        include ("models/m_truong.php");
        $m_truong = new m_truong();
        $truong= $m_truong ->read_production();
        $view="views/v_truong.php";
        include ("templates/front-end/layout.php");
    }
    public function index2()
    {
        include ("models/m_truong.php");
        $m_truong = new m_truong();
        $truong= $m_truong ->read_production();
        $view="views/v_truong2.php";
        include ("templates/front-end/layout.php");
    }
    public function index3()
    {
        include ("models/m_truong.php");
        $m_truong = new m_truong();
        $truong= $m_truong ->read_production();
        $view="views/v_truong3.php";
        include ("templates/front-end/layout.php");
    }
    public function index4()
    {
        include ("models/m_truong.php");
        $m_truong = new m_truong();
        $truong= $m_truong ->read_production();
        $view="views/v_truong4.php";
        include ("templates/front-end/layout.php");
    }
    public function index5()
    {
        include ("models/m_truong.php");
        $m_truong = new m_truong();
        $truong= $m_truong ->read_production();
        $view="views/v_truong5.php";
        include ("templates/front-end/layout.php");
    }
    public function index6()
    {
        include ("models/m_truong.php");
        $m_truong = new m_truong();
        $truong= $m_truong ->read_production();
        $view="views/v_truong6.php";
        include ("templates/front-end/layout.php");
    }
}