
<!-- Content -->
<div class="aurel_main_wrapper aurel_top_padding_no aurel_bottom_padding_no">
    <div class="aurel_container">
        <div class="aurel_content_wrapper row aurel_no_sidebar">
            <div class="aurel_content col col-12">
                <div class="aurel_tiny">
                    <div class="row aurel_js_bg_image aurel_js_min_height aurel_bg_center_center aurel_bg_size_cover aurel_pf_fullwidth aurel_mb_40">
                        <div class="col col-12 push-middle thumb-box">
                            <img src="public/layout/images/banner.jpg" class="grid_thmb" alt=""/>
                        </div>
                    </div>
                    <div class="row aurel_pf_fullwidth">
                        <div class="col col-12 aurel_pl_30 aurel_pr_30">
                            <div class="aurel_widget_pm_grid_gallery">
                                <div class="aurel_widget_container">
                                    <div class="aurel_front_end_display">
                                        <div class="aurel_grid_wrapper aurel_photoswipe_wrapper aurel_grid_007" data-uniqid="007" data-perload="4">
                                            <div class="aurel_grid_inner aurel_isotope_trigger is_masonry grid_columns4 hover_type_solid_plus side_paddings_off" data-perload="4" data-pad="30">
                                                <!-- Item 1 -->
                                                <?php
                                                foreach ($thanhpho as $key =>$value) {?>
                                                    <div class="grid-item element grid_b2p">
                                                        <div class="grid-item-inner">
                                                            <a href="canhan.php?id=<?php echo $value-> id?>">
                                                                <img src="<?php echo urldecode($value-> anh_1)?>" class="grid_thmb" alt=""/>
                                                                <div class="grid-item-overlay aurel_js_bg_color" data-bgcolor="rgba(17,17,17,0.3)">
                                                                    <p style="margin-left: 15px; color: #FFFFFF;"><?php echo $value-> ho_ten?></>
                                                                    <p  style="margin-left: 15px;  color: #FFFFFF;"><?php echo $value-> lop?></p>
                                                                    <p  style="margin-left: 15px;  color: #FFFFFF;"><?php echo $value-> khoa?></p>
                                                                </div>
                                                            </a>
                                                            <div class="aurel-img-preloader"></div>
                                                        </div>
                                                    </div>
                                                <?php }?>
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
</div>
</div>
<audio autoplay loop  id="playAudio">
    <source src="public/layout/audio/BaiCaSinhVien.mp3">
</audio>