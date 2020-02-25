<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


</head>

<body>
    <header>
        <h1 style="color:white"><?php bloginfo('name'); ?></h1>
        <span style="color:white"> <?php bloginfo('description'); ?> </span>
        <?php wp_nav_menu(); ?>
    </header>


    <!-- condition post -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <?php the_title(); ?>;
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
                <?php the_excerpt(); ?>
            </div>

            <?php the_date(); ?>
            Written by <?php the_author(); ?> Date <?php the_date(); ?><br>

        <?php endwhile; ?>
    <?php else : echo "No found"; ?>
    <?php endif; ?>


</body>