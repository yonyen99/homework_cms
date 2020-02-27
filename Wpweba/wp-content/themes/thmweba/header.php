<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">

            <header>
                <h1 style="color:white"><?php bloginfo('name'); ?></h1>
                <span style="color:white"> <?php bloginfo('description'); ?> </span>
                <div class="seach">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <?php wp_nav_menu(); ?>
               
            </header>



        </div>
        <div class="col-1"></div>
    </div>

</body>