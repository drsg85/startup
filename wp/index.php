<?php get_header() ?>

<section class="services" id="services">
    <div class="services__header">
        <header class="section-header">
            <h2 class="section-header__title"><?php the_field('first-section__title'); ?></h2>
            <p class="section-header__subtitle"><?php the_field('first-section__subtitle'); ?></p>
        </header>
    </div>
    <div class="services__content">
        <?php
        $first_section_block1 = get_field('first_section_block1');
        
        if( $first_section_block1 ): ?>

            <div class="services__item">
                <div class="sevices__logo sevices__logo--item-1" style="background-image: url('<?php echo $first_section_block1['block1_image']; ?>')"></div>
                <style>
                    .sevices__logo--item-1 {
                        background-color: <?php echo $first_section_block1['block1_bg']; ?>;
                    }
                </style>
                <p class="services__name"><?php echo $first_section_block1['block1_title']; ?></p>
                <p class="services__description"><?php echo $first_section_block1['block1_text']; ?></p>
            </div>
        <?php endif; ?>


        <?php
        $first_section_block2 = get_field('first_section_block2');
        
        if( $first_section_block2 ): ?>

            <div class="services__item">
                <div class="sevices__logo sevices__logo--item-2" style="background-image: url('<?php echo $first_section_block2['block2_image']; ?>')"></div>
                <style>
                    .sevices__logo--item-2 {
                        background-color: <?php echo $first_section_block2['block2_bg']; ?>;
                    }
                </style>
                <p class="services__name"><?php echo $first_section_block2['block2_title']; ?></p>
                <p class="services__description"><?php echo $first_section_block2['block2_text']; ?></p>
            </div>
        <?php endif; ?>


        <?php
        $first_section_block3 = get_field('first_section_block3');
        
        if( $first_section_block3 ): ?>

            <div class="services__item">
                <div class="sevices__logo sevices__logo--item-3" style="background-image: url('<?php echo $first_section_block3['block3_image']; ?>')"></div>
                <style>
                    .sevices__logo--item-3 {
                        background-color: <?php echo $first_section_block3['block3_bg']; ?>;
                    }
                </style>
                <p class="services__name"><?php echo $first_section_block3['block3_title']; ?></p>
                <p class="services__description"><?php echo $first_section_block3['block3_text']; ?></p>
            </div>

        <?php endif; ?>
    </div>
</section>


<section class="aboutus" id="aboutus">
    <div class="aboutus__container">
        <div class="aboutus__header">
            <header class="section-header">
                <h2 class="section-header__title"><?php the_field('second-section__title'); ?></h2>
                <p class="section-header__subtitle"><?php the_field('second-section__subtitle'); ?></p>
            </header>
        </div>
        <div class="aboutus__content">
            <div class="aboutus__introduction">
                <p class="aboutus__text"><?php the_field('second_section_tl'); ?></p>
                <p class="aboutus__text"><?php the_field('second_section_tr'); ?></p>
            </div>
            <div class="aboutus__staff">
                <div class="my-slider">

                    <?php if( have_rows('second_section_slider') ): while ( have_rows('second_section_slider') ) : the_row(); ?>

                    <div class="staff-member">
                        <div class="staff-member__photo"><img src="<?php the_sub_field('slider_image_1'); ?>" alt="Фотография сотрудника компании" />
                            <div class="staff-member__socials">
                                <div class="social">
                                    <div class="social__item"><a class="social__icon icon--facebook" href="<?php the_sub_field('slider_1_facebook'); ?>" target="_blank"></a></div>
                                    <div class="social__item"><a class="social__icon icon--twitter" href="<?php the_sub_field('slider_1_twitter'); ?>" target="_blank"></a></div>
                                    <div class="social__item"><a class="social__icon icon--instagram" href="<?php the_sub_field('slider_1_inst'); ?>" target="_blank"></a></div>
                                    <div class="social__item"><a class="social__icon icon--vk" href="<?php the_sub_field('slider_1_vk'); ?>" target="_blank"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="staff-member__data">
                            <p class="staff-member__name"><?php the_sub_field('slider_1_name'); ?></p>
                            <p class="staff-member__position"><?php the_sub_field('slider_1_position'); ?></p>
                        </div>
                    </div>

                    <?php endwhile; endif; ?>


                </div>
            </div>
            <div class="my-slider__nav"><button class="my-slider__arrow my-slider__arrow--left"></button><button class="my-slider__arrow my-slider__arrow--right"></button></div>
        </div>
    </div>
</section>
<section class="works" id="works">
    <div class="works__header">
        <header class="section-header">
            <h2 class="section-header__title"><?php the_field('third-section__title'); ?></h2>
        </header>
    </div>
    <div class="works__content">
        <nav class="works__menu">
            <ul class="works-list">
                <li class="works-list__item works-list__item--active" data-class="all">All</li>
                <li class="works-list__item" data-class="brand">Branding</li>
                <li class="works-list__item" data-class="design">Design</li>
                <li class="works-list__item" data-class="dev">Development</li>
                <li class="works-list__item" data-class="strategy">Strategy</li>
            </ul>
        </nav>
        <div class="works__gallery">
            <div class="gallery">

                <?php if( have_rows('works_gallery') ): while ( have_rows('works_gallery') ) : the_row(); ?>


                <div class="gallery__item" data-class="<?php the_sub_field('gallery_category'); ?>">
                    <div class="gallery__image"><img src="<?php the_sub_field('gallery_image'); ?>" alt="" /></div>
                    <div class="gallery__caption">
                        <h3 class="gallery__title"><?php the_sub_field('gallery_image_tilte'); ?></h3>
                        <p class="gallery__category"><?php the_sub_field('gallery_subtitle'); ?></p><a class="gallery__button smooth-trigger" href="index.html">View</a>
                    </div>
                </div>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </div>
</section>
<section class="banner">
    <div class="banner__content">
        <p class="banner__cta"><?php the_field('banner_title'); ?></p>
    </div>
    <div class="banner__button"><a class="button smooth-trigger" href="#contact"><?php the_field('banner_button'); ?></a></div>
</section>
<section class="blog" id="blog">
    <div class="blog__header">
        <header class="section-header">
            <h2 class="section-header__title"><?php the_field('fourth-section__title'); ?></h2>
            <p class="section-header__subtitle"><?php the_field('fourth-section__subtitle'); ?></p>
        </header>
    </div>
    <div class="blog__content">

        <?php if (have_posts()) { while (have_posts()) {the_post(); ?>

            <?php }
        }   ?>

        <!-- <article class="post">
            <div class="post__image"><img src="./img/post-image2.jpg" alt="Изображение картинки из блока" /></div>
            <div class="post__content">
                <div class="post__header">
                    <div class="post__date">
                        <p class="post__date-number">18</p>
                        <p class="post__date-month">Oct</p>
                    </div>
                    <div class="post__caption">
                        <h4 class="post__title">Using interface desigining elements</h4>
                        <p class="post__author">By <span>Khalil</span> Uddin in <span>Development</span></p>
                    </div>
                </div>
                <p class="post__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod teduntlabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et erebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor idunt ut labore et dolore aliquyam</p><a class="post__button smooth-trigger" href="index.html">Read more</a>
            </div>
        </article> -->
    </div>
</section>
<section class="clients" id="clients">
    <div class="clients__container">
        <ul class="clients__list">

        <?php if( have_rows('fifth_section_images') ): while ( have_rows('fifth_section_images') ) : the_row(); ?>

        <li class="clients__brand"><a class="clients__item" href="<?php the_sub_field('fifth_section_link'); ?>"><img src="<?php the_sub_field('fifth_section_image'); ?>" alt="Логотип бренда deorham" /></a></li>

        <?php endwhile; endif; ?>

        </ul>
        <div class="clients__slider">
            <div class="clients-slider">

                <?php if( have_rows('fifth_section_slider') ): while ( have_rows('fifth_section_slider') ) : the_row(); ?>
                <div class="clients-slider__item">
                <p class="clients__text">"<?php the_sub_field('fifth_slider_text'); ?>”</p>
                <p class="clients__name"><?php the_sub_field('fifth_slider_signature'); ?></p>
                </div>
                <?php endwhile; endif; ?>

                
            </div>
            <div class="clients__dots"><button class="clients__dots-item"></button><button class="clients__dots-item"></button><button class="clients__dots-item"></button></div>
        </div>
    </div>
</section>
<section class="contactus" id="contact">
    <div class="contactus__header">
        <header class="section-header">
            <h2 class="section-header__title">Get in touch</h2>
            <p class="section-header__subtitle">Lorem ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
        </header>
    </div>
    <div class="contactus__content">
        <div class="contactus__data">
            <div class="contactus__data-item">
                <p class="contactus__data-title">Address</p>
                <p class="contactus__data-content">312, 7th Ave, New York <br>NY 101200, United States of America</p>
            </div>
            <div class="contactus__data-item contactus__data-item--hotline">
                <p class="contactus__data-title">Hotline (24x7)</p><a class="contactus__data-content" href="tel:+650052300">+65 0052 300, </a><a class="contactus__data-content" href="tel:+6588251210">+65 88251 210 </a><a class="contactus__data-content" href="tel:+8801723511340">+88&nbsp;01723&nbsp;511&nbsp;340</a>
            </div>
            <div class="contactus__data-item contactus__data-item--email">
                <p class="contactus__data-title">E-mail</p><a class="contactus__data-content" href="mailto:shapedtheme@gmail.com">shapedtheme@gmail.com </a><a class="contactus__data-content" href="mailto:khalilkode@gmail.com">khalilkode@gmail.com</a>
            </div>
        </div>
        <div class="contactus__form">
            <form class="contactus-form form" id="contactus-form" action="">
                <div class="contactus-form__content">
                    <div class="contactus-form__group"><input class="contactus-form__input" type="text" name="fullname" placeholder="Your name" required="required" pattern="^[A-z|А-я][a-z|а-я]{2,}$" /><input class="contactus-form__input" type="text" name="subject" placeholder="Your subject" required="required" pattern="^[A-z|А-я][a-z|а-я]{2,}$" /></div>
                    <div class="contactus-form__group"><input class="contactus-form__input" type="email" name="email" placeholder="Your e-mail" required="required" /><input class="contactus-form__input" type="text" name="company" placeholder="Company name" /></div><textarea class="contactus-form__text" name="text" cols="30" rows="10" placeholder="Write your message" required="required"></textarea>
                </div>
                <div class="contactus-form__footer">
                    <div class="contactus-form__button"><input class="contactus-form__submit button" type="submit" value="Send messsage" /></div>
                    <p class="contactus-form__details"><span>*</span> We'll contact you as soon as possible. We don'treply on monday.</p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer() ?>