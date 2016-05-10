<!-- Blog Item -->
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
                        <p class="">Сб, 22 Грудня</p>
                        <p class="">11:30 - 16:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="ewents-description">
                <h4><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
                <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
            </div><!-- /.ewents-description -->
            <div class="btn_grup">
                <a href="#" class="btn-red-light">
                    Зареєструватись
                </a><!-- /.btn-red-light -->

                <a href="<?php the_permalink(); ?>" class="btn-grey">
                    Дізнатись більше
                </a><!-- /.btn-gre -->
            </div>
        </div>
    </div>
</div><!-- /.ewents-box-wrap -->