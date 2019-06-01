<?php

$this->load->view('header');
?>
<?php foreach ($ads as $ad): ?>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-xs-4 item-photo">
            <a href="<?= base_url()?>img/<?= $ad->ad_pic?>" target="_blank"><img style="max-width:100%;" src="<?= base_url()?>img/<?= $ad->ad_pic?>" /></a>
        </div>
        <div class="col-xs-5" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
            <h3><?= $ad->ad_name?></h3>    
            <h4><p>الحاله   <?= $ad->status?></p></h4>

            <!-- Precios -->
           
            <h3 style="margin-top:0px;">Price  <?= $ad->ad_price?> LE</h3>

            <!-- Detalles especificos del producto -->
            
            <div class="section" style="padding-bottom:5px;">
                <h4 class="title-attr" style="color: #009edf"><?= $ad->ad_desc?></h4>                    
                <div>
                    
                </div>
            </div>   
               
<?php endforeach; ?>            

            <!-- Botones de compra -->
            <div class="section" style="padding-bottom:20px;">
                <button id="detail" class="btn btn-success"><span style="margin-right:20px"  aria-hidden="true"></span> رؤيه تفاصيل صاحب الاعلان</button>
               
            </div>                                        
        </div>                              
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="display: none; " id="det">
            <?php foreach ($user as $use): ?>
            <h3 style="color: #286090">
                name : <?= $use->username?><br>
                email : <?= $use->email?><br>
                phone : <?= $use->phone?><br>
                address : <?= $use->address?><br>
            </h3>
        
        </div>		
    </div>
        </div>
    <?php endforeach; ?>
</div>        

<?php

$this->load->view('footer');
?>