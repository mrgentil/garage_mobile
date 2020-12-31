<div class="location-popup"></div>
<div class="location-popup-content">
    <button type="button" class="location-popup-content_close">
        <span class="ti-close"></span>
    </button>
    <div class="row no-gutters">
        <div class="location-popup__wrapper">
            <div id="google-map" class="location-popup__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd"
                    style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
            </div>
            <div class="location-popup__text">
                <div class="contact-items">
                    <h5 class="heading">Showroom</h5>
                    <div class="contact">
                        <span class="contact-info">FairView Ave, El Monte <br> California 91732 </span>
                    </div>
                </div>
                <div class="main-btn-wrap padding-top-40">
                    <a href="#" class="main-btn black uppercase">open in map</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--location-popup-->

<div class="message-popup"></div>
<div class="message-popup-content">
    <button type="button" class="message-popup-content_close">
        <span class="ti-close"></span>
    </button>
    <div class="row no-gutters">
        <div class="message-popup__wrapper">
            <div class="message-popup__thumb" style="background-image: url({{ asset('assets/img/modal/01.png') }});">
                <div class="message-popup__text">
                    <h5 class="heading">You have a quotation for us?</h5>
                    <div class="contact">
                            <span class="contact-info">leave your message below <br> or email us at
                                info@autoshop.com</span>
                    </div>
                </div>
            </div>
            <div class="message-popup__form">
                <form action="https://codingeek.net/html/coche/index.html" class="contact-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" cols="10" rows="4" id="message"></textarea>
                            </div>
                            <div class="main-btn-wrap">
                                <input class="main-btn black" type="submit" value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--message-popup-->

<div class="contact-popup"></div>
<div class="contact-popup-content">
    <button type="button" class="contact-popup-content_close">
        <span class="ti-close"></span>
    </button>
    <div class="row no-gutters">
        <div class="contact-popup__wrapper">
            <div class="contact-popup__thumb" style="background-image: url({{ asset('assets/img/modal/02.png') }});"></div>
            <div class="contact-popup__info__wrap">
                <div class="contact-items">
                    <h5 class="heading">Opening Hour</h5>
                    <div class="contact">
                        <span class="contact-info">Monday to Friday </span>
                        <span class="contact-info">7:00 - 21:00 </span>
                        <span class="contact-info">Saturday</span>
                        <span class="contact-info">7:00 - 16:00 </span>
                    </div>
                </div>
                <div class="contact-items padding-top-20">
                    <h5 class="heading">Phone</h5>
                    <div class="contact">
                        <span class="contact-info">(+88) 0172 570051 <br> (+88) 0172 570051</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact-popup-->
