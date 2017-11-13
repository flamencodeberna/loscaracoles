<?php include('include/header.html'); ?>

<?php include('include/navigation.html'); ?>

<section class="contact-form-section py-5">
    <div class="container">
        <h1>Kontakt</h1>
        <p>Peña Flamenca los Caracoles</p>

        <div class="row">
            <div class="col-md-4 contact-info-section">
                <div class="contact-widget office-location wow slideInLeft animated" data-wow-delay="0.4s"
                     style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                    <h2>Briefadresse</h2>
                    <address>
                        <i class="fa fa-map-marker icon-box icon-xs"></i>Los Caracoles c/o Daniel Zihler<br>Heitern 477A<br>CH-3176
                        Neuenegg/BE<br>
                        <i class="fa fa-phone icon-box icon-xs"></i> + 41 (0)76 708 22 59<br>

                    </address>
                </div>
                <div class="contact-widget office-location wow slideInLeft animated" data-wow-delay="0.4s"
                     style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                    <h2>E-Mail-Adressen</h2>
                    <address>
                        <p>Allgemeines, Administration: <a href="mailto:#"><i
                                        class="fa fa-envelope icon-box icon-xs"></i>info@loscaracoles.ch</a></p>
                        <p>Mitglieder, Kasse, Buchhaltung:<br> Andreas&nbsp;Stettler<br><a href="mailto:#"><i
                                        class="fa fa-envelope icon-box icon-xs"></i>mitgliederverwaltung@loscaracoles.ch</a>
                        </p>
                    </address>
                </div>
                <div class="contact-widget social-contact wow slideInLeft animated" data-wow-delay="0.4s"
                     style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                    <h2>Social Links</h2>
                    <a href="#"><i class="fa fa-facebook icon-round icon-xs"></i></a>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1 contact-form contact-info-section">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form"
                      data-toggle="validator" novalidate="true">
                    <div class="form-group wow slideInRight animated" data-wow-delay="0.3s"
                         style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" placeholder="Your Name" id="name" class="form-control contact-control"
                               name="name" required="" data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group wow slideInRight animated" data-wow-delay="0.4s"
                         style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" placeholder="Your Email" id="email" class="form-control contact-control"
                               name="email" required="" data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group wow slideInRight animated" data-wow-delay="0.5s"
                         style="visibility: visible;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                        <label for="subject" class="sr-only">Subject</label>
                        <input type="text" placeholder="Your Subject" id="msg_subject"
                               class="form-control contact-control" name="subject" required=""
                               data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group wow slideInRight animated" data-wow-delay="0.6s"
                         style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                        <label for="message" class="sr-only">Message</label>
                        <textarea placeholder="Your Message" rows="7" id="message" class="form-control" name="message"
                                  required="" data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <button class="btn btn-common btn-lg wow bounceInUp disabled animated" data-wow-delay="0.8s"
                            type="submit" id="form-submit"
                            style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
                        <i class="fa fa-envelope"></i> Senden
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.html'); ?>


