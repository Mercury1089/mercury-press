            </main>            
            <footer class="footer">
                <section class="footer__section footer__section--type--widgets">
                    <?php
                        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") )
                    ?>
                </section>
                <?php 
                    include 'php/footer/social-links.php'; 
                ?>
                <section class="footer__section footer__section--type--copyright">
                    <p class="footer-copyright__text">All rights reserved. © 2017 Team Mercury</p>
                </section>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>