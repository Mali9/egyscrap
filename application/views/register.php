<?php
$this->load->view('header');
?>








<div style="margin-top: 50px;margin-bottom: 100px;">
    <center>
        <h1><?php
            if (!empty($this->session->flashdata('logged_in'))) {
                echo $this->session->flashdata('logged_in');
            }
            if (!empty(validation_errors())) {
                echo validation_errors();
            }
            ?></h1>
        <h1 style="color: #3498db">
            login
        </h1>
<?php
$csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
);
?>

        <form  action="<?php echo base_url(); ?>Admin/register" method="post">

            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

            <p>email</p><input type="text" class="form-control" value="<?php if (!empty($email)) {echo $email;}?>"  style="margin-top: 20px;width: 300px;" name="email" placeholder="email" autocomplete="off" required="">
            <p>password</p><input type="password" class="form-control"value="<?php if (!empty($password)) {echo $password;}?>"  style="margin-top: 20px;width: 300px;" name="password" placeholder="password" autocomplete="off" required="">
            <p>username</p><input type="text" class="form-control" value="<?php if (!empty($username)) {echo $username;}?>"  style="margin-top: 20px;width: 300px;" name="username" placeholder="username" autocomplete="off" required="">
            <p>phone</p><input type="text" class="form-control" value="<?php if (!empty($phone)) {echo $phone;}?>" style="margin-top: 20px;width: 300px;" name="phone" placeholder="phone" autocomplete="off" required="">
            <p>address</p><input type="text" class="form-control" value="<?php if (!empty($address)) {echo $address;}?>"  style="margin-top: 20px;width: 300px;" name="address" placeholder="address" autocomplete="off" required="">

            <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 10px" value="Register" name="submit">

        </form>
    </center>
</div>
<?php $this->load->view('footer'); ?>


