<?php
    //Template name: Newsletter
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/img/favicon.svg" type="image/x-icon">
    <title><?php wp_title() ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <section class="page-newsletter">
        <div class="newsletter" id="newsletter">
            <div class="container">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() ?>/img/email_newsletter.png" alt="">
                </div>
                <div class="text">
                    <h4>Cadastre-se e fique atualizado sobre o mundo da tecnologia ✌️</h4>
                    <p>Dicas e novidades direto no seu e-mail.</p>
                </div>
                <form method="POST" onsubmit="redirectNewsletter(event)">
                    <input type="email" name="email" id="email" placeholder="nome@seuemail.com" required>
                    <button class="btn" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </section>

    <script src="<?php echo get_template_directory_uri()?>/node_modules/imask/dist/imask.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/86be5174-9064-472f-8602-bc0ef7ad9aca-loader.js" ></script>

    <?php wp_footer(); ?>
</body>
</html>