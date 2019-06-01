<?php
$this->load->view('header');
?>

<!-- *** LOGIN MODAL ***
_________________________________________________________ -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
                <form action="customer-orders.html" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email_modal" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_modal" placeholder="password">
                    </div>

                    <p class="text-center">
                        <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                    </p>

                </form>

                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

            </div>
        </div>
    </div>
</div>

<!-- *** LOGIN MODAL END *** -->

<section>
    <!-- *** HOMEPAGE CAROUSEL ***
_________________________________________________________ -->

    <div class="home-carousel">

        <div class="dark-mask"></div>

        <div class="container">
            <div class="homepage owl-carousel">
                <div class="item">
                    <div class="row" style="margin-right:auto;margin-left:auto">
                        <div class="col-sm-5 right">
                           
                            
                            <h2>أفادت الإحصائيات بأن حجم القمامة في العام 2000 كان 20 مليون طناً،
                                <br />ووصل إلى 30 مليوناً في العام 2016، وتبين الدراسات أن مصر تخسر 5 مليارات دولار سنوياً بسبب عدم تدوير القمامة.
                                
                                </h2>
                        </div>
                        <div class="col-sm-7">
                            <img class="img-responsive" src="<?= base_url()?>img/logo.png" alt=""style="height: 400px;width: 500px;">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row" style="margin-right:auto;margin-left:auto">

                        <div class="col-sm-7 text-center">
                            <img class="img-responsive" src="img/template-mac.png" alt="">
                        </div>

                        <div class="col-sm-5">
                            <h2>46 HTML pages full of features</h2>
                            <ul class="list-style-none">
                                <li>Sliders and carousels</li>
                                <li>4 Header variations</li>
                                <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                <li>+ 11 extra pages showing template features</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <div class="row" style="margin-right:auto;margin-left:auto">
                        <div class="col-sm-5 right">
                            <h1>Design</h1>
                            <ul class="list-style-none">
                                <li>Clean and elegant design</li>
                                <li>Full width and boxed mode</li>
                                <li>Easily readable Roboto font and awesome icons</li>
                                <li>7 preprepared colour variations</li>
                            </ul>
                        </div>
                        <div class="col-sm-7">
                            <img class="img-responsive" src="img/template-easy-customize.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row" style="margin-right:auto;margin-left:auto">
                        <div class="col-sm-7">
                            <img class="img-responsive" src="img/template-easy-code.png" alt="">
                        </div>
                        <div class="col-sm-5">
                            <h1>Easy to customize</h1>
                            <ul class="list-style-none">
                                <li>7 preprepared colour variations.</li>
                                <li>Easily to change fonts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.project owl-slider -->
        </div>
    </div>

    <!-- *** HOMEPAGE CAROUSEL END *** -->
</section>






<section class="bar background-white no-mb">
    <div class="container">

        <div class="col-md-12">
            <div class="heading text-center">
                <h2><a href="<?= base_url()?>Home/add_ad" class="ads">اضف اعلانك الان</a></h2>
            </div>

            

            <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->
            <?php foreach ($metals as $metal):  ?> 
            <div class="row" style="margin-right:auto;margin-left:auto">
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?= base_url()?>img/<?=$metal->ad_pic?>" alt="" class="img-responsive" style="height: 150px;width: 250px">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="<?= base_url()?>/Home/ad_details/<?=$metal->id?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> تفاصيل الاعلان</a>
                                </p>
                            </div>
                        </div>
                           <div class="content">
                               <h4><a href="<?= base_url()?>/Home/ad_details/<?= $metal->id?>"><?= $metal->ad_name?></a> <br> <?= $metal->status?></h4>
                            <p class="author-category"> <p>Price  <?= $metal->ad_price?> LE</p>  <p style="color: #009edf"> تاريخ الاعلان <?= $metal->date?></p>
                            </p>
                            <p class="intro"><?php echo substr($metal->ad_desc,0,100)?>..</p>
                            <p class="read-more"><a href="<?= base_url()?>/Home/ad_details/<?= $metal->id?>" class="btn btn-template-main">تفاصيل الاعلان</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- /.box-image-text -->


                </div>

                 <?php endforeach; ?>
                 <?php foreach ($blastic as $b):  ?> 
            <div class="row" style="margin-right:auto;margin-left:auto">
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?= base_url()?>img/<?=$b->ad_pic?>" alt="" class="img-responsive" style="height: 150px;width: 250px">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="<?= base_url()?>/Home/ad_details/<?= $b->id?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i>تفاصيل الاعلان</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="<?= base_url()?>/Home/ad_details/<?= $b->id?>"><?= $b->ad_name?></a><br> <?= $b->status?></h4>
                            <p class="author-category"> <p>Price  <?= $b->ad_price?> LE</p>  <p style="color: #009edf"> تاريخ الاعلان <?= $b->date?></p>
                            </p>
                            <p class="intro"><?php echo substr($b->ad_desc,0,100)?>..</p>
                            <p class="read-more"><a href="<?= base_url()?>/Home/ad_details/<?= $b->id?>" class="btn btn-template-main">تفاصيل الاعلان</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- /.box-image-text -->


                </div>

                 <?php endforeach; ?>
                 <?php foreach ($glasses as $glass):  ?> 
            <div class="row" style="margin-right:auto;margin-left:auto">
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?= base_url()?>img/<?=$glass->ad_pic?>" alt="" class="img-responsive" style="height: 150px;width: 250px">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="<?= base_url()?>/Home/ad_details/<?= $glass->id?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> تفاصيل الاعلان</a>
                                </p>
                            </div>
                        </div>
                       <div class="content">
                            <h4><a href="<?= base_url()?>/Home/ad_details/<?= $glass->id?>"><?= $glass->ad_name?></a><br> <?= $b->status?></h4>
                            <p class="author-category"> <p>Price  <?= $b->ad_price?> LE</p>  <p style="color: #009edf"> تاريخ الاعلان <?= $glass->date?></p>
                            </p>
                            <p class="intro"><?php echo substr($glass->ad_desc,0,100)?>..</p>
                            <p class="read-more"><a href="<?= base_url()?>/Home/ad_details/<?= $glass->id?>" class="btn btn-template-main">تفاصيل الاعلان</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- /.box-image-text -->


                </div>

                 <?php endforeach; ?>
                 <?php foreach ($paper as $p):  ?> 
            <div class="row" style="margin-right:auto;margin-left:auto">
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?= base_url()?>img/<?=$p->ad_pic?>" alt="" class="img-responsive" style="height: 150px;width: 250px">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="<?= base_url()?>/Home/ad_details/<?= $p->id?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> تفاصيل الاعلان</a>
                                </p>
                            </div>
                        </div>
                         <div class="content">
                            <h4><a href="<?= base_url()?>/Home/ad_details/<?= $p->id?>"><?= $p->ad_name?></a><br> <?= $p->status?></h4>
                            <p class="author-category"> <p>Price  <?= $p->ad_price?> LE</p>  <p style="color: #009edf"> تاريخ الاعلان <?= $p->date?></p>
                            </p>
                            <p class="intro"><?php echo substr($p->ad_desc,0,100)?>..</p>
                            <p class="read-more"><a href="<?= base_url()?>/Home/ad_details/<?= $p->id?>" class="btn btn-template-main">تفاصيل الاعلان</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- /.box-image-text -->


                </div>

                 <?php endforeach; ?>
                 <?php foreach ($used as $u):  ?> 
            <div class="row" style="margin-right:auto;margin-left:auto">
                <div class="col-md-3 col-sm-6 col-lg-3">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?= base_url()?>img/<?=$u->ad_pic?>" alt="" class="img-responsive" style="height: 150px;width: 250px">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="<?= base_url()?>/Home/ad_details/<?= $u->id?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> تفاصيل الاعلان</a>
                                </p>
                            </div>
                        </div>
                         <div class="content">
                            <h4><a href="<?= base_url()?>/Home/ad_details/<?= $u->id?>"><?= $u->ad_name?></a><br> <?= $u->status?></h4>
                            <p class="author-category"> <p>Price  <?= $u->ad_price?> LE</p>  <p style="color: #009edf"> تاريخ الاعلان <?= $u->date?></p>
                            </p>
                            <p class="intro"><?php echo substr($u->ad_desc,0,100)?>..</p>
                            <p class="read-more"><a href="<?= base_url()?>/Home/ad_details/<?= $u->id?>" class="btn btn-template-main">تفاصيل الاعلان</a>
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