<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="http://localhost:8888/KolomDesa/public/" class="text-decoration-none">
                <span class="h1 text-uppercase text-danger bg-whith px-2">KOLOM</span>
                <span class="h1 text-uppercase text-secondary bg-success px-2 ml-n1">DESA </span>
            </a>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">KATEGORI</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Internasional"><i class="fa fa-angle-right mr-2"></i>Internasional</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Nasional"><i class="fa fa-angle-right mr-2"></i>Nasional</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Daerah"><i class="fa fa-angle-right mr-2"></i>Daerah</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Jajanan"><i class="fa fa-angle-right mr-2"></i>Jajanan</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Tradisi"><i class="fa fa-angle-right mr-2"></i>Tradisi</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Analisa"><i class="fa fa-angle-right mr-2"></i>Analisa</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Desa_Wisata"><i class="fa fa-angle-right mr-2"></i>Desa Wisata</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Tokoh_Desa"><i class="fa fa-angle-right mr-2"></i>Tokoh Desa</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Bum_Desa"><i class="fa fa-angle-right mr-2"></i>BUM Desa</a>
                        <a class="text-secondary mb-2" href="<?= base_url() ?>/Kabar_Desa"><i class="fa fa-angle-right mr-2"></i>Kabar Desa</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">HUBUNGI</h5>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">

                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-success py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Follow Us</h5>
                    <div class="d-flex">
                        <a class="btn btn-success btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-success btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-success btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-success btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-success" href="#">Domain</a>. All Rights Reserved. Designed
                by
                <a class="text-success" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="<? base_url('assets5') ?>production/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets5') ?>/lib/easing/easing.min.js"></script>
<script src="<?= base_url('assets5') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="<?= base_url('assets5') ?>/mail/jqBootstrapValidation.min.js"></script>
<script src="<?= base_url('assets5') ?>/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url('assets5') ?>/js/main.js"></script>
</body>

</html>

<?= $this->renderSection('content'); ?>