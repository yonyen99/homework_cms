<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<?php get_header();?>
<body>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">

            <!-- condition post -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <a class="ex1" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    <br>
                    The Date:<?php the_time('F j, Y');?>&nbsp  Post by <?php the_author();?>

                    <!-- category  -->
                    <?php $caters = get_the_category();
                            $output = "";
                            if ($caters) {
                                foreach ($caters as $cater) {
                                    $output = '<a href = "' . get_category_link($cater->term_id) . '">' . $cater->cat_name . '</a>';
                                }
                            }
                            echo $output;
                            ?>





                    <div class="content">
                        <!-- excerpt -->
                        <?php the_excerpt(); ?>

                        <!-- set feature images -->
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>

                        <?php else : echo "not  found"; ?>
                        <?php endif; ?>
                    </div>
                <br>
                   <p>
                    <a  href="<?php the_permalink(); ?>" class="btn btn-lg btn-primary" type="button">
                            read more ...
                        </a>
                    </p>
                    <!-- <button type="button" class="btn btn-primary">Primary</button> -->

                <?php endwhile; ?>
            <?php else : echo "No found"; ?>
            <?php endif; ?>
            
            <div class="footer">
            <?php get_footer();
            ?>
            </div>
           

            

            <div class="col-1"></div>
        </div>

</body>