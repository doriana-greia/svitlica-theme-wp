<?php 
/**
 * Template Name: Template Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
<?php /*?>
    <!-- Content -->
    <div class="contacts-center">
        <div class="content">

            <div class="h2" ><?php the_title(); ?></div>

            <div class="contact-content">
                <div class="left">
                    <div class="contacts">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>

                    <p class="info">
                        <?php echo ale_get_meta('descr1'); ?>
                    </p>
                </div>

                <div class="right">
                    <form method="post" action="<?php the_permalink();?>">
                        <?php if (isset($_GET['success'])) : ?>
                            <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
                        <?php endif; ?>
                        <?php if (isset($error) && isset($error['msg'])) : ?>
                            <p class="error"><?php echo $error['msg']?></p>
                        <?php endif; ?>
                    <form method="post" id="contact-form" action="contacts.html" onsubmit="">
                        <div class="form-left">
                            <input name="contact[name]" type="text" placeholder="Your Name (required)" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            <input name="contact[email]" type="email" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            <input name="contact[phone]" type="text" placeholder="Phone" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" id="contact-form-phone" />
                            <input name="contact[location]" type="text" placeholder="Event location" value="<?php echo isset($_POST['contact']['location']) ? $_POST['contact']['location'] : ''?>" id="contact-form-location" />
                            <input name="contact[date]" type="text" placeholder="Event date" value="<?php echo isset($_POST['contact']['date']) ? $_POST['contact']['date'] : ''?>" id="contact-form-date" />
                        </div>

                        <div class="form-right">
                            <input name="contact[how]" type="text" placeholder="How did you hear about us?" value="<?php echo isset($_POST['contact']['how']) ? $_POST['contact']['how'] : ''?>" id="contact-form-how" />
                            <textarea name="contact[message]"  placeholder="Your Message (required)"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            <input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>"/>
                        </div>
                        <?php wp_nonce_field() ?>
                    </form>
                </div>
            </div>


            <div class="line"></div>

            <div class="contact-footer">
                <p>
                    <?php echo ale_get_meta('descr2'); ?>
                </p>
            </div>

        </div>
    </div>
 <?php */?>


    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div><!-- /.row -->
        </div>
        <section class="main-contact">
            <div class="container-fluid wraper">
                <div class="row">

                    <div class="col-md-6">
                        <h2>Напишіть нам</h2>

                            <form class="contact-form" method="post" id="contact-form" action="<?php the_permalink();?>" onsubmit="">
                                <textarea name="contact[message]"  placeholder="Ваш коментар або ваші побажання"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                                <input name="contact[email]" type="email" placeholder="Email" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                                <input name="contact[phone]" type="text" placeholder="Телефон" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" id="contact-form-phone" />
                                <input type="submit" class="submit btn-red-light" value="Надіслати"/>

                                <?php wp_nonce_field() ?>
                            </form>

                    </div>
                    <div class="col-md-6">
                        <div class="contact-inform">
                            <h2>наші контакти</h2>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; endif; ?>

                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>
        <section class="contact-map">
            <div class="container-fluid ">
                <div class="row">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2569.4899512173874!2d23.940882615711786!3d49.90837837940424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473adeddf138d9d9%3A0x7ad661ee084328df!2z0LLRg9C7LiDQqNC40YDQvtC60LAsIDQsINCR0YDRjtGF0L7QstC40YfRliwg0JvRjNCy0ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1460564256115"  style="border:0" allowfullscreen></iframe>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </div><!-- /.main -->
    </section><!-- /.contact-map -->


<?php get_footer(); ?>