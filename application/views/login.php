<?php
$this->load->view('header');
?>








<div style="margin-top: 50px;margin-bottom: 100px;">
<center>
    <h1><?php
    if(!empty($this->session->flashdata('logged_in')))
    {
        echo $this->session->flashdata('logged_in');
    }
    if(!empty(validation_errors()))
    {
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
    
    <form  action="<?php echo base_url(); ?>Admin/login" method="post">
        
        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

        <h3 style="margin-top: 10px">email</h3><input type="text" class="form-control"  style="margin-top: 20px;width: 300px;" name="email" placeholder="email" autocomplete="off" required="">
        <h3 style="margin-top: 10px">password</h3><input type="password" class="form-control" style="margin-top: 20px;width: 300px;" name="password" placeholder="password" autocomplete="off" required="">
        <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 10px" value="login" name="submit">

    </form>
</center>
</div>
<?php $this->load->view('footer'); ?>


