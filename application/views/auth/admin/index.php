<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <img src="assets/img/kojima-logo.png" alt="" class="img-fluid" width="150px">
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">
                <div class="flash-login" data-flashlogin="<?= $this->session->flashdata('logmess'); ?>"></div>

                <form class="row g-3 pt-4 pb-2" method="post" action="<?= base_url('auth'); ?>" autocomplete="off">

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="username" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" id="yourUsername" autocomplete="off" placeholder="Masukan Username..." value="<?= set_value('username'); ?>">
                      <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Kata Sandi</label>
                    <div class="input-group">
                      <button class="btn btn-outline-success toggle-password" type="button" data-target="password">
                        <i class="bi bi-eye-slash"></i>
                      </button>
                      <input type="password" name="password" id="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" autocomplete="off" placeholder="Masukan Kata Sandi...">
                      <?= form_error('password', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-success w-100" type="submit">Masuk</button>
                  </div>
                </form>

              </div>
            </div>

            <div class="credits text-center">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              <small>&copy; Copyright <strong><span>PT Kojima Auto Technology Indonesia </span></strong>. All Rights Reserved</small>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->