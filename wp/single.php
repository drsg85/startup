<article class="post">
    <div class="post__image"><?php the_post_thumbnail( 'full' ) ?></div>
    <div class="post__content">
        <div class="post__header">
            <div class="post__date">
                <!-- <p class="post__date-number">18</p>
                <p class="post__date-month">Oct</p> -->
                <time class="post__time" datetime="2020-01-01T12:50"><?php the_time('F jS, Y') ?></time>
            </div>
            <div class="post__caption">
                <h4 class="post__title"><?php the_title() ?></h4>
                <p class="post__author">By <span>Khalil</span> Uddin in <span>Development</span></p>
            </div>
        </div>
        <p class="post__text"><?php the_excerpt() ?></p><a class="post__button smooth-trigger" href="index.html">Read more</a>
    </div>
</article>