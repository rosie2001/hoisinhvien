<?php
include("models/m_timkiem.php");
$m_timkiem = new m_timkiem();
$arrTruong = $m_timkiem->read_production();
$arrThanhpho = $m_timkiem->read_production_thanh_pho();
$idName = isset($_POST["idName"]) ? $_POST["idName"] : null;
$idSv5t = isset($_POST["idSv5t"]) ? $_POST["idSv5t"] : 0;
$arrSearch = [];
$i = 0;
if ($idName != "" or $idName != null) {
    if ($idSv5t == 0) {
        foreach ($arrTruong as $key => $value) {
            if (strpos($value->ho_ten, $idName) or $value->ho_ten == $idName) {
                $arrSearch[$i]["id"] = $value->id;
                $arrSearch[$i]["ho_ten"] = $value->ho_ten;
                $arrSearch[$i]["lop"] = $value->lop;
                $arrSearch[$i]["khoa"] = $value->khoa;
                $arrSearch[$i]["anh_1"] = $value->anh_1;
                $i++;
            }
        }
    } else {
        foreach ($arrThanhpho as $key => $value ) {
            if (strpos($value->ho_ten, $idName) or $value->ho_ten == $idName) {
                $arrSearch[$i]["id"] = $value->id;
                $arrSearch[$i]["ho_ten"] = $value->ho_ten;
                $arrSearch[$i]["lop"] = $value->lop;
                $arrSearch[$i]["khoa"] = $value->khoa;
                $arrSearch[$i]["anh_1"] = $value->anh_1;
                $i++;
            }
        }
    }
}
$output='';
$output.='';
if($i!=0)
{   foreach ($arrSearch as $key =>$value)
    $output .= '
   
                                    <div class="aurel_tiny">
                                        <div class="row aurel_pf_fullwidth">
                                            <div class="col col-12 aurel_pl_30 aurel_pr_30">
                                                <div class="aurel_widget_pm_grid_gallery">
                                                    <div class="aurel_widget_container">
                                                        <div class="aurel_front_end_display">
                                                            <div class="aurel_grid_wrapper aurel_photoswipe_wrapper aurel_grid_007" data-uniqid="007" data-perload="4">
                                                                <div  class="aurel_grid_inner aurel_isotope_trigger is_masonry grid_columns4 hover_type_solid_plus side_paddings_off" data-perload="5" data-pad="30" style="margin: 5px" >
                                                                    <div class="grid-item element grid_b2p" style="margin: 5px">
                                                                        <div class="grid-item-inner" >
                                                                            <a href="canhan.php?id='.$value["id"].'">
                                                                                <img src="'.urldecode($value["anh_1"]).'" class="grid_thmb" alt=""/>
                                                                                    <div class="grid-item-overlay aurel_js_bg_color" data-bgcolor="rgba(17,17,17,0.3)">
                                                                                        <p style="margin-left: 15px; color: #FFFFFF;">'.$value["ho_ten"].'</p>
                                                                                        <p  style="margin-left: 15px;  color: #FFFFFF;">'. $value["lop"].'</p>
                                                                                        <p  style="margin-left: 15px;  color: #FFFFFF;">'.$value["khoa"].'</p>
                                                                                    </div>
                                                                            </a>
                                                                            <div class="aurel-img-preloader"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
  ';
}
else
{
    $output='<h4>Không tìm thấy kết quả</h4>';
}

echo $output;

