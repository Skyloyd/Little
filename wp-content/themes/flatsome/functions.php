<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
function gui(){
    ?>
    <form action="http://localhost:8080/Little/thanh-toan-2" method="post" class="form_datve">
        <select class="option" name="loaive" id="loaive">
            <option value="">Chọn loại vé</option>
            <option value="giadinh">Gói gia đình</option>
            <option value="canhan">Gói cá nhân</option>
        </select>   
        <div style="display:flex;">
            <div class="soluong">
                <input type="number" name="soluong" placeholder="Số lượng vé">
            </div>
            <div class="ngay" style="margin-left: 5px;">
                <input required type="date" name="soluong" placeholder="Ngày sử dụng">
            </div>
        </div>
        <input required type="text" placeholder="Họ và tên">
        <input required type="tel" placeholder="Số điện thoại">
        <input required type="email" placeholder="Địa chỉ email">
        <div class="guidi">
        <button>Đặt vé</button>
        </div>
    </form>
    <?php
}
add_shortcode('gui', 'gui');
function thanhtoan(){
    ?>
       <form action="" method="post" class="form_datve">
            <div style="display:flex;">
                <div class="total">
                    <label for="">Số tiền thanh toán</label>
                    <input required type="text" name="tien" value="360.000 vnđ">
                </div>
                <div class="soluong" style="margin-left: 5px;">
                    <label for="">Số lượng vé</label>
                    <input required type="number" name="soluong" value="4">
                </div>
                <div class="ngay" style="margin-left: 5px;">
                    <label for="">Ngày sử dụng</label>
                    <input required type="date" name="ngay" value="15/08/2021">
                </div>
            </div>
            <div class="name"> 
                <label for="">Thông tin liên hệ</label>
                <input required type="text" value="Nguyễn Thị Ngọc Tuyền">
            </div>
            <div class="phone" >
                <label for="">Điện thoại</label>
                <input required type="tel" value="0123456789">
            </div>
            <div class="mail"> 
                <label for="">Email</label>
                <input required type="email" value="tuyen.nguyen@alta.com.vn">
            </div>
    </form>
    <?php
}
add_shortcode('thanhtoan', 'thanhtoan');
function thanhtoanthanhcong(){
    ?>
       <form action="http://localhost:8080/Little/thanh-toan-thanh-cong-2" method="post" class="form_datve">
            <div class="total">
                <label for="">Số thẻ</label>
                <input required type="text" name="tien" value="3641 4513 4369 7895">
            </div>
            <div class="name" style="width:100% !important;"> 
                <label for="">Chủ thẻ</label>
                <input required type="text" value="NGUYEN THI NGOC TUYEN">
            </div>
            <div class="ngay" style="">
<label for="">Ngày hết hạn</label>
                <input required type="date" name="ngay" value="05/2025">
            </div>
            <div class="CVV" >
                <label for="">CVV/CVC</label>
                <input required type="text" value="***">
            </div>
            <div class="guidi">
                <button>Thanh toán</button>
            </div>
    </form>
    <?php
}
add_shortcode('thanhtoanthanhcong', 'thanhtoanthanhcong');
function lienhe(){
    ?>
       <form action="#" id="myForm" method="post" class="form_datve">
            <div style="display:flex;">
                <div class="name">
                    <input required type="text" name="soluong" placeholder="Tên">
                </div>
                <div class="mail" style="margin-left: 5px;">
                    <input required type="email" name="soluong" placeholder="Mail">
                </div>
            </div>
            <div style="display:flex;">
                <div class="phone">
                    <input required type="tel" name="soluong" placeholder="Số điện thoại">
                </div>
                <div class="total" style="margin-left: 5px; width:50%;">
                    <input required type="text" placeholder="Địa chỉ">
                </div>
            </div>
            <textarea name="" id="" cols="3" rows="3" placeholder="Lời nhắn"></textarea>
            <div class="guidi" style="width:23%;  margin:0 auto;">
                <button >Gửi liên hệ</button>
            </div>
        </form>
        <div class="messenger" id="mess">
        <div class="alert bg" style="background-color: transparent; background-size: cover">
            <span class="closebtn text-danger h2" style="float: right;cursor: pointer;" onclick="offMess()">&times;</span> 
            <br>
            <h5 style="color: #000 !important;">Gửi liên hệ thành công</h5>
            <p style="color: #000 !important;">Chúng tôi sẽ phản hồi bạn sớm nhất có thể.</p>
        </div>
        <script>
            function offMess(e) {
                document.querySelector('#mess').style.display='none';
            }

            document.getElementById("myForm").addEventListener("submit", function(e) {          
                e.preventDefault();
                console.log(e);
                document.querySelector('#mess').style.display='block';             
            });
        </script>
    <?php
}
add_shortcode('lienhe', 'lienhe');
?>