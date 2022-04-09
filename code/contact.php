<!DOCTYPE>
<html>

<head>
    <title>Testing</title>
</head>

<body>
    <?php require_once('data/posts.php'); ?>
    <?php include('includes/header.php'); ?>

    <?php include('./includes/sidebar.php'); ?>

    <!-- content section -->
    <section style="background-color: yellow;">
        <div>
            <?php foreach ($contact_details as $key => $detail) { ?>
                <li><?= $key ?> : <?php echo $detail; ?></li>
            <?php } ?>
        </div>
    </section>
    <!-- End content section -->

    <!-- Footer -->
    <footer style=" background-color: green;">
        <ul>
            <li>Home</li>
            <li>Contact</li>
            <li>About</li>
        </ul>
    </footer>
    <!-- End Footer -->

    <?php include('./includes/footer.php'); ?>

</body>

</html>