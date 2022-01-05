<body class="aurel_drag_protection" >
<div class="aurel_site_wrapper static_header_footer fadeOnLoad">

    <!-- Header -->
    <header class="aurel_main_header aurel_logo_left aurel_border_off aurel_sticky_menu_on">
        <div class="aurel_main_header_wrapper">
            <!-- <div class="aurel_header_left_part aurel_header_logo_part">
                <div class="aurel_logo_cont">
                    <a class="aurel_image_logo aurel_dp aurel_no_select aurel_retina" href="./shool.html"></a>
                </div>
            </div> -->

            <div class="aurel_header_middle_part aurel_header_menu_part">
                <nav class="aurel_nav">
                    <ul class="aurel_menu">
                        <li class="menu-item-has-children <?php if(strpos($view , "truong") ) echo "current-menu-ancestor";?>">
                            <a href="truong.html">Sinh viên 5 tốt cấp Trường</a>
                        </li>
                        <li class="menu-item-has-children <?php if($view == "views/v_thanhpho.php") echo "current-menu-ancestor";?>">
                            <a href="thanhpho.html">Sinh viên 5 tốt cấp Thành phố</a>
                        </li>
                        <li class="menu-item-has-children <?php if($view == "views/v_timkiem.php") echo "current-menu-ancestor";?>">
                            <a href="timkiem.html">Tìm kiếm</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <a class="aurel_header_mobile_menu_toggler" href="javascript:void(0)">
					<span class="aurel_mmt_icon">
						<span class="aurel_mmt_line01"></span>
						<span class="aurel_mmt_line02"></span>
						<span class="aurel_mmt_line03"></span>
					</span>
            </a>
        </div>

        <!-- Mobile Menu -->
        <div class="aurel_mobile_menu_wrapper">

            <nav class="aurel_mobile_nav">
                <ul class="aurel_menu">
                    <li class="menu-item-has-children <?php if($view == "views/v_truong.php") echo "current-menu-ancestor";?>">
                        <a href="truong.html">Sinh viên 5 tốt cấp Trường</a>
                    </li>
                    <li class="menu-item-has-children <?php if($view == "views/v_thanhpho.php") echo "current-menu-ancestor";?>">
                        <a href="thanhpho.html">Sinh viên 5 tốt cấp Thành phố</a>
                    </li>
                    <li class="menu-item-has-children <?php if($view == "views/v_timkiem.php") echo "current-menu-ancestor";?>">
                        <a href="timkiem.html">Tìm kiếm</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>