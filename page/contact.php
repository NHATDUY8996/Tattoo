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

    .contact-left .btnhover {
        border: 1px solid var(--color-primary) !important;
    }

    button.btnhover:hover {
        border: 1px solid var(--color-primary) !important;
    }

    .form-group {
        padding-left: 0 !important;
    }

    .contact-left h4 {
        font-size: 26px;
    }

    .contact-right .ctt {
        padding: 3px 6px;
        border-radius: 50%;
    }

    .fs1 {
        font-size: 20px;
        font-weight: 700;
    }

    .fs1 i {
        font-size: 15px;
        font-weight: 300;
    }

    .hva:hover {
        color: var(--color-primary);
    }

    .icon a {
        padding: 10px;
        font-size: 18px;
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
        <span class="cprimary">Liên hệ</span>
    </div>
</div>

<div class="contact row m0  bgw">
    <div class="mycontainer d-flex justify-content-center flex-column align-items-center">
        <div class="col-lg-12 col-sm-12 col-12 text-center">
            <h3 class="cblack text-uppercase mb-5">bản đồ cửa hàng</h3>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9062993046664!2d105.81333041098637!3d21.036434880533974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2bddedd8ff%3A0xde7c4fb8e272fabc!2zQ8O0bmcgdHkgQVZBIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1681899700598!5m2!1svi!2s"
                    width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-12 my-5  p0">
            <div class="text-center">
                <h3 class="cblack text-uppercase mb-5">liên hệ với chúng tôi</h3>
            </div>
            <div class="col-lg-6 col-sm-12 col-12 cblack contact-left">

                <div class=" mb-5">
                    <h4>THÔNG TIN LIÊN HỆ</h4>
                    <span class=>Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ
                        trả lời
                        bạn sau khi nhận được</span>
                </div>
                <div>
                    <fieldset class="form-group  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input placeholder="Họ tên:" type="text" class="form-control  form-control-lg" required=""
                            value="" name="contact[Name]">
                    </fieldset>
                    <fieldset class="form-group  col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input type="number" placeholder="Số điện thoại:" name="contact[phone]"
                            class="form-control form-control-lg" required="">
                    </fieldset>
                    <fieldset class="form-group  col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <input placeholder="Email:" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                            required="" id="email1" class="form-control form-control-lg" value="" name="contact[email]">
                    </fieldset>
                    <fieldset class="form-group  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea placeholder="Nội dung:" name="contact[body]" id="comment"
                            class="form-control content-area form-control-lg" rows="5" required=""></textarea>
                    </fieldset>
                </div>
                <div>
                    <button class="btnhover">Gửi tin nhắn</button>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-12 cblack contact-right">
                <h4 class="cblack">CỬA HÀNG XĂM HÌNH TATTOO THIÊN MINH</h4>
                <div class="my-3 cblack"><span class="bgprimary cwhite me-3 ctt"><i class="bi bi-geo-alt"></i></span>
                    Tầng
                    6 toà nhà Ladeco, 266 Đội Cấn, phường Liễu Giai, Hà Nội,</div>

                <div class=" my-3">
                    <a href="" class="cprimary fs1 hva">
                        <span class="cwhite bgprimary me-3 ctt"><i class="bi bi-telephone-fill"></i></span> 1800
                        6750</a>
                </div>
                <div class=" my-3">
                    <a href="" class="cblack my-3 hva">
                        <span class="ctt me-3  cwhite bgprimary"><i class="bi bi-envelope"></i></span>
                        support@sapo.vn</a>
                </div>
                <div class=" my-3">
                    <a href="" class="cblack my-3 hva"><span class="ctt me-3  cwhite bgprimary"><i
                                class="bi bi-envelope"></i></span> tattoothienminhsapo.net</a>

                </div>
                <div class="my-3 cblack"><span class="bgprimary ctt cwhite me-3"><i class="bi bi-stopwatch"></i></span>
                    Giờ
                    làm việc: Từ 9:00 đến 22:00 các ngày trong tuần từ Thứ 2 đến Chủ nhật</div>
                <span>Chia sẻ:</span>
                <div class="icon mt-5">
                    <a class="bgprimary me-3" href=""><i class="bi bi-youtube"></i></a>
                    <a class="bgprimary me-3" href=""><i class="bi bi-facebook"></i></a>
                    <a class="bgprimary me-3" href=""><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main -->

<script src="./public/js/script.js"></script>