<?php include 'snippets/header.php' ?>

<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-close"><i class="fa fa-times"></i></div>
    <div class="modal-content">
        <div class="form-messages"></div>
        <form action="careers-mailer.php" method="post" id="careers-form" class="careers-form" enctype="multipart/form-data">
            <div class="form__fields">
                <div class="form-row">
                    <input type="text" id="name" name="name" required placeholder="Name">
                    <input type="tel" id="phone" name="phone" required placeholder="Phone">
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>

                <div class="form-row">
                    <input type="text" id="position" name="position" requird placeholder="Position">
                </div>

                <div class="form-row">
                    <textarea name="message" id="message" required placeholder="Message"></textarea>
                </div>

                <div class="form-row">
                    <input id="file" name="file" type="file" />
                </div>

                <div class="form-row">
                    <div class="g-recaptcha" data-sitekey="6LfIzx8UAAAAAKN0Xfw-vToPJNjiW7VgzZ7iNade"></div>
                </div>
            </div>

            <button type="submit" class="submit">Send Message</button>
        </form>
    </div>
</div>

    <div class="careers">
        <div class="careers__content">
            <h1>Careers</h1>
            <div class="careers-grid">
                <figure>
                    <a href="#0" class="modal-trigger">
                        <figcaption>
                            <h3>Site <br> Superintendent</h3>
                            <h6>Apply Now</h6>
                        </figcaption>
                    </a>
                </figure>

                <!-- End Project Category -->

                <figure>
                    <a href="#0" class="modal-trigger">
                        <figcaption>
                            <h3>Project Manager</h3>
                            <h6>Apply Now</h6>
                        </figcaption>
                    </a>
                </figure>

                <!-- End Project Category -->

                <figure>
                    <a href="#0" class="modal-trigger">
                        <figcaption>
                            <h3>Labourer</h3>
                            <h6>Apply Now</h6>
                        </figcaption>
                    </a>
                </figure>

                <!-- End Project Category -->
            </div>
        </div>
    </div>

<?php include 'snippets/footer.php' ?>
