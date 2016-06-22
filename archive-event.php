<?php get_header(); ?>
<div class="main">
    <div class="container-fluid wraper">
        <div class="row">
            <div class="breadcrumbs">
                <a href="#">Головна</a>
                <div class="arow">></div>
                <a href="#">Події</a>
            </div>
        </div><!-- /.row -->
    </div>
    <section class="main-ewents">
    <div class="container-fluid wraper">
    <div class="row">
<?php global $query_string; query_posts($query_string.'&posts_per_page=-1');?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="ewents-box-wrap">
        <div class="ewents-box clearfix">
            <div class="col-md-4 col-sm-4 pl-0">
                <div class="ewents-img">
                    <?php if(get_the_post_thumbnail($post->ID,'post-blogsize')){
                        echo get_the_post_thumbnail($post->ID,'post-blogsize');
                    }else{?>
                        <img src="http://placehold.it/299x291" alt="ewent-img">
                    <?php }?>

                    <div class="data-ewents">
                        <div class="data-ewents-content">
                            <p class=""><?php echo get_post_meta($post->ID, 'data', true) ;?></p>
                            <p class=""><?php echo get_post_meta($post->ID, 'time', true) ;?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="ewents-description">
                    <h4><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                    <?php echo wp_trim_words( get_the_content(), 30 ); ?>
                </div><!-- /.ewents-description -->
                <div class="btn_grup">
                    <a href="#event_f" class="btn-red-light popap_c">
                        Зареєструватись
                    </a><!-- /.btn-red-light -->

                    <a href="<?php the_permalink(); ?>" class="btn-grey">
                        Дізнатись більше
                    </a><!-- /.btn-gre -->
                </div>
            </div>
        </div>
    </div><!-- /.ewents-box-wrap -->


<?php endwhile;  endif;  ?>

    </div><!-- /.row -->
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