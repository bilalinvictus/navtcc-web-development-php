<!DOCTYPE>
<html>

<head>
    <title>Testing</title>
</head>

<body>
    <?php require_once('data/posts.php'); ?>
    <?php require_once('includes/header.php'); ?>


    <?php
    // require_once('includes/header.php'); 
    ?>
    <?php
    // require('includes/header.php'); 
    ?>


    <?php include('./includes/sidebar.php'); ?>

    <!-- content section -->
    <section style="background-color: yellow;">
        <?php
        foreach ($posts as $post) {
        ?>
            <div>

                <h2>
                    <?php echo $post['title']; ?>
                </h2>
                <p>
                    <?php echo $post['description']; ?>
                </p>
            </div>

        <?php } ?>
    </section>
    <!-- End content section -->

    <?php include_once('./includes/footer.php'); ?>



</body>

</html>