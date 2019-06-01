<?php
$this->load->view('header');
?>















<section class="bar background-white no-mb">
    <div class="container">

        <div class="col-md-12">
            <div class="heading text-center">
                <h2><a href="<?= base_url()?>Home/add_ad" class="ads">اضف اعلانك الان</a></h2>
            </div>


            <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->
            <?php foreach ($ads as $ad):  ?> 
            <div class="row" style="margin-right:auto;margin-left:auto">
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?= base_url()?>img/<?=$ad->ad_pic?>" alt="" class="img-responsive" style="height: 150px;width: 250px">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="<?= base_url()?>/Home/ad_details/<?= $ad->id?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                       <div class="content">
                            <h4><a href="<?= base_url()?>/Home/ad_details/<?= $ad->id?>"><?= $ad->ad_name?></a><br> <?= $ad->status?></h4>
                            <p class="author-category"> <p>Price  <?= $ad->ad_price?> LE</p>  <p style="color: #009edf"> تاريخ الاعلان <?= $ad->date?></p>
                            </p>
                            <p class="intro"><?php echo substr($ad->ad_desc,0,100)?>..</p>
                            <p class="read-more"><a href="<?= base_url()?>/Home/ad_details/<?= $ad->id?>" class="btn btn-template-main">تفاصيل الاعلان</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- /.box-image-text -->


                </div>

                 <?php endforeach; ?>
                
                </div>
           
            </div>
        
            <!-- /.row -->

            <!-- *** BLOG HOMEPAGE END *** -->

        </div>

    </div>
    <!-- /.container -->
</section>
<!-- /.bar -->




<!-- *** GET IT ***
_________________________________________________________ -->


<!-- *** GET IT END *** -->


<?php
$this->load->view('footer');
?>