 <?php get_header(); ?>
 <div class="main">
     <div class="container-fluid wraper">
         <div class="row">
             <div class="breadcrumbs">
                 <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
             </div>
         </div><!-- /.row -->
     </div>
     <section class="main-ewents-info">
         <div class="container-fluid wraper">
             <div class="row">
                 <div class="col-md-12">
                     <h3><?php the_title(); ?></h3>

                     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                         <?php ale_part('postfull');?>



                     <?php endwhile; else: ?>
                         <?php ale_part('notfound')?>
                     <?php endif; ?>
                 </div>
             </div><!-- /.row -->
             <div class="row">
                 <div class="col-md-4 col-sm-4">
                     <a href="#" class="btn-green">Розклад Програми</a>
                 </div>
                 <div class="col-md-4 col-sm-4">
                     <a href="#event_f" class="btn-red-light popap_c">Реєструватись</a>
                 </div>
                 <div class="col-md-4 col-sm-4">
                     <div class="data-ewents-content">
                         <p class=""><?php echo get_post_meta($post->ID, 'data', true) ;?></p>
                         <p class=""><?php echo get_post_meta($post->ID, 'time', true) ;?></p>
                     </div>
                 </div>
             </div><!-- /.row -->
             <div class="row">
                 <div class="col-md-4 col-sm-4">
                     <div class="ewents-info-box">
                         <div class="ewents-info-img">

                             <?php $image = get_post_meta($post->ID, 'ewent_img_1', true); ?>
                             <?php if($image !== '') { ?>
                                 <img src="http://localhost/svitlica/wp-content/uploads/2016/service-info/<?php echo $image ?>" />
                             <?php }
                             else { ?>
                                 <img src="http://placehold.it/299x291<?php echo $image ?>" alt="Изображение отсутствует"/>
                             <?php } ?>

                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4">
                     <div class="ewents-info-box">
                         <div class="ewents-info-img">
                             <?php $image = get_post_meta($post->ID, 'ewent_img_2', true); ?>
                             <?php if($image !== '') { ?>
                                 <img src="http://localhost/svitlica/wp-content/uploads/2016/service-info/<?php echo $image ?>" />
                             <?php }
                             else { ?>
                                 <img src="http://placehold.it/299x291<?php echo $image ?>" alt="Изображение отсутствует"/>
                             <?php } ?>

                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4">
                     <div class="ewents-info-box">
                         <div class="ewents-info-img">
                             <?php $image = get_post_meta($post->ID, 'ewent_img_3', true); ?>
                             <?php if($image !== '') { ?>
                                 <img src="http://localhost/svitlica/wp-content/uploads/2016/service-info/<?php echo $image ?>" />
                             <?php }
                             else { ?>
                                 <img src="http://placehold.it/299x291<?php echo $image ?>" alt="Изображение отсутствует"/>
                             <?php } ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </div><!-- /.main -->
 <div class="hidden">
     <div class="event_f" id = "event_f" >
         <form  action="mail.php" >
             <label >
                 <span>Кількість гостей</span>
                 <input type="text" placeholder="50 дорослих" name="adults" required/>
             </label>
             <label >
                 <span>П.І.П</span>
                 <input type="text" placeholder="Байда Андрій Тарасович" name="last_name" required/>
             </label>

             <label >
                 <span>Телефон</span>
                 <input type="text" placeholder="+38 (093) 00 00 0000" name="phone" required/>
             </label>
             <label >
                 <span>E-MAIL</span>
                 <input type="text" placeholder="youremail@mail.com" name="email" required/>
             </label>
             <label >
                 <span class="textarea_c">Коментар</span>
                 <textarea placeholder="Ваш Коментар" name="comment"></textarea>
             </label>
             <div class=" reqert_s">
                 <input class="btn-red-light" type="submit" value="Бронювати">
             </div>
         </form>
     </div>
 </div>
<?php get_footer(); ?>