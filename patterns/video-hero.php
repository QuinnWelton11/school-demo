<?php
/**
 * Title: Video Hero Section
 * Slug: school-demo/video-hero
 * Categories: banners
 * Block Types: core/post-content
 * Description: A cover block with background video and two paragraphs
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/media/students-working.mp4' ); ?>","hasParallax":false,"dimRatio":50,"isDark":false} -->
<div class="wp-block-cover">
    <video autoplay muted loop playsinline>
        <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/students-working.mp4' ); ?>" type="video/mp4">
    </video>
    <div class="wp-block-cover__inner-container">
        <!-- wp:paragraph -->
        <p>Student Success</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>Find out more about what our school has to offer.</p>
        <!-- /wp:paragraph -->
    </div>
</div>
<!-- /wp:cover -->
