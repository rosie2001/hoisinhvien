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
                    <div class="aurel_cs_shortcode_wrapper">
                        <form id="search_form" name="search_form" method="POST"  >
                            <div>
                                <input type="text" name="name" id="idName" form="cs_form" placeholder="Họ và tên" size="100" required style="color: black;">
                            </div>
                            <p class="error" style="color: #ff0000; margin: 5px 5px 5px 5px; "> </p>
                            <div>
                                <select style="color: black;" id="idSv5t" name="idSv5t">
                                    <option value="0">Cấp Trường</option>
                                    <option value="1">Cấp Thành Phố</option>
                                </select>
                            </div>
                            <input  value="Tìm kiếm" type="button" id="submit" name="submit">
                        </form>
                    </div>
                    <div id="item" >

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script >
    $(document).ready(function () {
        $("#submit").click(function(){
            var idName=$('#idName').val()
            var idSv5t=$('#idSv5t').val()
            if(!idName.trim())
            {
                $(".error").html("Không được bỏ trống tên")
            }
            else {
                $(".error").html("")
                $.ajax({
                    method: "POST",// phương thức dữ liệu được truyền đi
                    url: "search.php",// gọi đến file server show_data.php để xử lý
                    data: {idName:idName , idSv5t: idSv5t},//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                    success : function(data){//kết quả trả về từ server nếu gửi thành công
                        $("#item").html(data)
                    }
                });
            }
        });
    })

    // alert("1230")
</script>
