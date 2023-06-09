    <footer>
        <div class="container">
            <div class="top">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt=""></a>
                    <div class="linha"></div>
                    <p>Aqui você dá um boost na sua carreira.</p>
                </div>
                <div class="menu">
                    <h6>Menu</h6>
                    <?php
                        $args = array(
                            'menu' => 'Header Principal',
                            'theme_location' => 'header-principal',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>
                <div class="contatos">
                    <h6>Fale conosco</h6>
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=5585992364455&text=Ol%C3%A1%2C%20tenho%20d%C3%BAvida%20sobre" target="_blank"><i class="fa-brands fa-whatsapp fa-lg"></i>Whatsapp</a></li>
                        <li><a href="mailto:contato@devboost.com.br"><i class="fa-regular fa-envelope fa-lg" target="_blank"></i>Suporte@devboost.com.br</a></li>
                    </ul>
                </div>
                <div class="transparencia">
                    <h6>Transparência</h6>
                    <ul>
                        <li><a href="<?php echo get_permalink(get_page_by_path('termos-de-uso'))?>" target="_blank">Termos de uso</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('politica-de-privacidade'))?>" target="_blank">Política de privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="line"></div>
            <div class="bottom">
                <p>2023 © DevBoost - Todos os direitos reservados.</p>
                <div class="social">
                    <ul>
                        <li><a href="https://www.youtube.com/@dev_boost" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/dev_boost/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/devboostbr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.facebook.com/devboostbr" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href="https://discord.com/invite/zjyJMyV5Yz" target="_blank"><i class="fa-brands fa-discord"></i></a></li>
                        <li><a href="https://open.spotify.com/playlist/3MpdyNRrzipeAh9vgweDQO?si=b394114a619844cc&utm_medium=share&utm_source=linktree&nd=1" target="_blank"><i class="fa-brands fa-spotify"></i></a></li>
                        <li><a href="https://twitter.com/DevBoostbr" target="_blank"><i class="fa-brands fa-twitter fa-lg"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/dev-boost/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri()?>/node_modules/aos/dist/aos.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/node_modules/imask/dist/imask.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/86be5174-9064-472f-8602-bc0ef7ad9aca-loader.js" ></script>
    
    <?php wp_footer(); ?>
</body>
</html>