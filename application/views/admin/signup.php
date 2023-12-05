<?php $this->load->view('admin/header') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card p-4 bg-light">
            <?= form_open(base_url('Admin/signup')) ?>

                <h3 class="text-center">Register Panel</h3>

                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email">
                    <?= form_error('email') ?>
                </div>

                <div class="form-group mt-2">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" id="full_name" value="<?= set_value('full_name') ?>" class="form-control" placeholder="Full Name">
                    <?= form_error('full_name') ?>
                </div>

                <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <?= form_error('password') ?>
                </div>

                <div class="d-flex mt-2">
                    <button class="btn btn-primary btn-block m-auto">Signup</button>
                </div>

                <div class="text-center mt-2">
                    <a href="<?= base_url('Admin/login') ?>" style="text-decoration: none;">Already have an account?</a>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php $this->load->view('admin/footer') ?>
