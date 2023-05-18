<title>Đặt lịch hẹn</title>

<style type="text/css">
    .banner {
        padding: 20px;
        font-family: "Oswald", sans-serif;
    }

    .banner img {
        width: 366px;
    }

    .banner span {
        font-size: 16px;
        margin: 4px;
    }

    .banner a:hover {
        color: var(--color-primary);
        scale: 1.1;
    }

    .fieldset input {
        margin: 10px !important;
    }

    .form-control {
        padding: 30px;
        color: var(--color-black);
        font-weight: 500;
        font-size: 16px;
    }

    .btnhover {
        padding: 20px 40px;
        margin: 20px 0;
    }

    strong {
        font-weight: 700;
        font-size: 26px;
    }

    .service_booking {
        background-image: url(/img/background/bg-booking.png);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    @media (max-width: 767px) {
        .banner img {
            display: block;
        }
    }
</style>


    <!-- main -->
    <div class="banner row m0 d-flex justify-content-center text-center">
        <img src="./img/logo/logo_slider_1.png" alt="">
        <h3>VỀ CHÚNG TÔI</h3>
        <div class="text d-flex justify-content-center align-items-center">
            <a href="index.html"><span>Trang chủ</span></a>
            <span style="font-size: 15px;"><i class="bi bi-chevron-right"></i></span>
            <span class="cprimary">Đặt lịch hẹn</span>
        </div>
    </div>

    <div class="appointment row m0  bgw">
        <div class="mycontainer d-flex justify-content-center flex-column align-items-center">
            <div class="col-lg-8 col-12 text-center my-5">
                <a class="title pRl cblack" href="">ĐẶT LỊCH</a>
                <p class="textservice cblack">Hãy để lại thông tin đặt lịch đầy đủ sẽ được sắp xếp sớm hơn, không phải
                    chờ đợi</p>
                <div class="form-appointment d-flex flex-wrap my-5">
                    <fieldset class="col-lg-6 col-sm-12 col-12 my-4">
                        <input placeholder="Họ tên:" type="text" class="form-control  form-control-lg" required=""
                            value="" name="contact[Name]">
                    </fieldset>
                    <fieldset class="col-lg-6 col-sm-12 col-12 my-4">
                        <input placeholder="Dịch vụ xăm:" type="text" required="" id="content"
                            class="form-control form-control-lg" name="contact[Dịch vụ xăm]">
                    </fieldset>
                    <fieldset class="col-lg-6 col-sm-12 col-12 my-4">
                        <input type="number" placeholder="Số điện thoại:" name="contact[phone]"
                            class="form-control form-control-lg" required="">
                    </fieldset>
                    <fieldset class="col-lg-6 col-sm-12 col-12 my-4">
                        <input class="tourmaster-datepicker input-date form-control hasDatepicker" type="date"
                            value="Ngày/Tháng/Năm:" placeholder="Ngày/Tháng/Năm:" data-date-format="dd MM yyyy">
                    </fieldset>
                    <fieldset class="col-lg-6 col-sm-12 col-12 my-4">
                        <input placeholder="Email:" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                            required="" id="email1" class="form-control form-control-lg" value="" name="contact[email]">
                    </fieldset>
                    <fieldset class="col-lg-6 col-sm-12 col-12 my-4"><select name="contact[Giờ]" id="guiest_id1"
                            class="select-drop form-control">
                            <option>Giờ:</option>
                            <option value="7h">7h</option>
                            <option value="8h">8h</option>
                            <option value="9h">9h</option>
                            <option value="10h">10h</option>
                            <option value="11h">11h</option>
                            <option value="14h">14h</option>
                            <option value="15h">15h</option>
                            <option value="16h">16h</option>
                            <option value="17h">17h</option>
                        </select></fieldset>
                    <fieldset class="col-lg-12 col-sm-12 col-12 my-4">
                        <textarea placeholder="Nội dung:" name="contact[body]" id="comment"
                            class="form-control content-area form-control-lg" rows="5" required=""></textarea>
                    </fieldset>
                </div>

                <a href="" class="bgprimary cwhite btnhover my-5">Gửi thông tin</a>
                <p class="cblack my-5">Hoặc liên hệ theo hotline: <strong class="cprimary">1800 6750</strong></p>

                <div class="service_booking d-flex flex-wrap p-5">
                    <div class="col-lg-4 col-12 col-sm-12 my-4">
                        <img src="./img/icon/service_booking_1.png" alt="">
                        <h3 class="cprimary text-uppercase">Ý tưởng sáng tạo</h3>
                        <span class="summary_service cwhite1">Chúng tôi sẽ giúp các bạn biến những ý tưởng vô hình của
                            mình thành những hình xăm tuyệt vời nhất</span>
                    </div>
                    <div class="col-lg-4 col-12 col-sm-12 my-4">
                        <img src="./img/icon/service_booking_2.png" alt="">
                        <h3 class="cprimary text-uppercase">Sạch sẽ và an toàn</h3>
                        <span class="summary_service cwhite1">Chúng tôi tạo ra một môi trường thân thiện với tiêu chuẩn
                            vệ sinh cao nhất khi bạn ghé thăm, cho dù để sở hữu hình xăm đầu tiên hay thêm một hình xăm
                            mới vào bộ sưu tập của mình</span>
                    </div>
                    <div class="col-lg-4 col-12 col-sm-12 my-4">
                        <img src="./img/icon/service_booking_3.png" alt="">
                        <h3 class="cprimary text-uppercase">Nghệ sĩ đạt giải thưởng</h3>
                        <span class="summary_service cwhite1">Các nghệ sĩ đoạt giải thưởng với nhiều phong cách khác
                            nhau, tiêu chuẩn vệ sinh cao nhất và đội ngũ trợ lý nói tiếng Anh thân thiện</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->

    <script src="./public/js/script.js"></script>
