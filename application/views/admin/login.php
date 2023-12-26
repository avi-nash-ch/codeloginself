
<?php $this->load->view('admin/header') ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card p-4 bg-light">
                <?= form_open('Admin/login') ?>
                <h3 class="text-center">Login Panel</h3>

                <?php if ($error = $this->session->flashdata('message')): ?>
                    <?php if ($msg_class = $this->session->flashdata('msg_class')): ?>
                        <div class="<?= $msg_class ?> form-control">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($msg2 = $this->session->flashdata('error')): ?>
                        <div class=" alert bg-danger form-control">
                            <?= $msg2 ?>
                        </div>
                <?php endif; ?>

                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email">
                    <?= form_error('email') ?>
                </div>

                <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Password">
                    <?= form_error('password') ?>
                </div>

                <div class="d-flex mt-2">
                    <button type="submit" class="btn btn-primary btn-block m-auto">Login</button>
                </div>
                    
                <div class="text-center mt-2">
                    <a href="<?= base_url('Admin/signup') ?>" style="text-decoration: none;">Create an account?</a>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php $this->load->view('admin/footer') ?>
