<div class="aurel_main_wrapper aurel_top_padding_yes aurel_bottom_padding_yes">
    <div class="aurel_container">
        <div class="aurel_single_post aurel_content_wrapper row aurel_no_sidebar">
            <div class="aurel_content col col-12">
                <div class="row aurel_js_bg_image aurel_js_min_height aurel_bg_center_center aurel_bg_size_cover aurel_pf_fullwidth aurel_mb_40">
                    <div class="col col-12 push-middle thumb-box">
                        <img src="public/layout/images/banner.jpg" class="grid_thmb" alt=""/>
                    </div>
                </div>
                <?php
                foreach ($canhan as $key =>$value) {
                    switch ($value->id)
                    {
                        case "14": $idNhac= "public/layout/audio/Nam.mp3"; break;
                        case "127": $idNhac= "public/layout/audio/Ha.mp3"; break;
                        case "147": $idNhac= "public/layout/audio/Loan.mp3"; break;
                        case "227": $idNhac= "public/layout/audio/Dieu.mp3"; break;
                        case "226": $idNhac= "public/layout/audio/Chinh.mp3"; break;
                        case "246": $idNhac= "public/layout/audio/Ly.mp3"; break;

                        default: $idNhac="public/layout/audio/BaiCaSinhVien.mp3";
                    }
                    ?>
                <!-- Post Title -->
                <h1 class="aurel_post_title"><a href="<?php echo urldecode($value-> link_ca_nhan)?>"><?php echo $value -> ho_ten?></a> </h1>
                <!-- Post Meta -->
                <div class="aurel_post_meta">
                    <div class="aurel_post_meta_item"><?php echo $value -> lop?></div>
                    <div class="aurel_post_meta_item">
                        <?php echo $value->khoa?>
                    </div>
                </div>
                    <div class="aurel_tiny" style="margin-top: 25px;">
                        <div class="aurel_widget_pm_grid_gallery aurel_mb_15">
                            <div class="aurel_widget_container">
                                <div class="aurel_front_end_display">
                                    <div class="aurel_grid_wrapper aurel_photoswipe_wrapper aurel_grid_7645" data-uniqid="7645" data-perload="2">
                                        <div class="aurel_grid_inner aurel_isotope_trigger grid_columns4 hover_type_gradient_caption side_paddings_on aurel_ml_-10" data-perload="2">
                                            <!-- Item 1 -->
                                            <div class="grid-item element grid_b2p aurel_pb_10 aurel_pl_10">
                                                <div class="grid-item-inner">
                                                    <img src="<?php echo urldecode($value-> anh_1)?>" alt=""/>
                                                </div>
                                            </div>
                                            <!-- Item 2 -->
                                            <div class="grid-item element grid_b2p aurel_pb_10 aurel_pl_10">
                                                <div class="grid-item-inner">
                                                    <img src="<?php echo urldecode($value-> anh_2)?>" alt=""/>
                                                </div>
                                            </div>
                                            <!-- Item 3 -->
                                            <div class="grid-item element grid_b2p aurel_pb_10 aurel_pl_10">
                                                <div class="grid-item-inner">
                                                    <img src="<?php echo urldecode($value-> anh_3)?>" alt=""/>
                                                </div>
                                            </div>

                                            <!-- Item 4 -->
                                            <div class="grid-item element grid_b2p aurel_pb_10 aurel_pl_10">
                                                <div class="grid-item-inner">
                                                    <img src="<?php echo urldecode($value-> anh_4)?>" alt=""/>
                                                </div>
                                            </div>
                                            <div class="grid-item element grid_b2p aurel_pb_10 aurel_pl_10">
                                                <div class="grid-item-inner">
                                                    <img src="<?php echo urldecode($value-> anh_5)?>" alt=""/>
                                                </div>
                                            </div>
                                            <div class="grid-item element grid_b2p aurel_pb_10 aurel_pl_10">
                                                <div class="grid-item-inner">
                                                    <img src="<?php echo urldecode($value-> anh_6)?>" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <!-- Post Content -->
            </div>
        </div>
    </div>
</div>
</div>
<audio autoplay loop  id="playAudio">
    <source src="<?php echo urldecode($idNhac)?>">
</audio>