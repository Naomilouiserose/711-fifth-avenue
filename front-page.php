<?php
/**
 * Template Name: Home
 * The template for displaying the homepage
 *
 *
 *
 *
 */
 get_header(); ?>

<main id="main" class="page-container">
  <section class="home-section-one landing">
    <aside id="parallax-bg-1" class="parallax-bg" data-speed=".7">
    <h1 id="tagline" class="tagline safari-only-tagline box"><?php the_field('landing_tagline'); ?></h1>
  </aside>
  <aside id="parallax-bg-2" class="parallax-bg" data-speed=".4">
    <img id="bg-2-1" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/smoke_left.png'); ?>" alt="smoke-effect">
    <img id="bg-2-2" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/smoke_right.png'); ?>" alt="smoke-effect">
  </aside>
  </section>

  <section class="home-section-two">
    <?php if (get_field('feature_image_one')):
            $featureImage1 = get_field('feature_image_one');
      ?>
      <div class="feature-image feature-image-one safari-only-feature-img box" style="background-image: url(<?php echo $featureImage1 ?>)">
      </div>
    <?php endif; ?>
    <?php if (get_field('feature_image_two')):
            $featureImage2 = get_field('feature_image_two');
      ?>
      <div class="feature-image feature-image-two safari-only-feature-img box" style="background-image: url(<?php echo $featureImage2 ?>)">
      </div>
    <?php endif; ?>
  </section>

  <?php
 $homeSectionThree = get_field('about_the_building');
 if ($homeSectionThree) :
 ?>
 <?php endif; ?>
 <section id="the-building" class="home-section-three-content">
   <div class="left-side">
    <aside id="parallax-bg-3-a">
      <img class="image-left" src="<?php echo esc_url($homeSectionThree['image_one']); ?>" alt="building-image">
      <aside id="parallax-bg-3-b" class="smoke-scroll-1">
          <img class="smoke smoke-one" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/smoke_right.png'); ?>" alt="smoke-effect">
          <img class="smoke smoke-two" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/smoke_right.png'); ?>" alt="smoke-effect">
      </aside>
    </aside>
  </div>
    <div class="text safari-only-text ">
      <h2 class="lazyLoad" data-loader="lazyLoader"><?php echo$homeSectionThree['about_subtitle'] ?></h2>
      <div class="paragraph-text lazyLoad" data-loader="lazyLoader">
        <?php echo$homeSectionThree['about_text'] ?>
        <img class="drop-cap" src="<?php echo esc_url($homeSectionThree['drop_cap_image']); ?>" alt="drop-cap"/>
      </div>
    </div>

    <div class="right-side">
    <aside id="parallax-bg-4-a">
        <img class="image-right" src="<?php echo esc_url($homeSectionThree['image_two']); ?>" alt="building-image"/>
        <aside id="parallax-bg-4-b" class="smoke-scroll-2">
          <img class="smoke smoke-three" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/smoke_right.png'); ?>" alt="smoke-effect">
          <img class="smoke smoke-four" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/smoke_right.png'); ?>" alt="smoke-effect">
        </aside>
    </aside>
    </div>
</section>
</main>

<?php get_footer(); ?>
