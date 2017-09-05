            </main>            
            <footer>
                <section class="footer-section" id="footer-widgets">
                    <?php
                        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") )
                    ?>
                </section>
                <section class="footer-section" id="social-links">
                    <a href="#" class="social-link" id="facebook"><?php include 'images/facebook.svg'; ?></a>
                    <a href="#" class="social-link" id="twitter"><?php include 'images/twitter.svg'; ?></a>
                    <a href="#" class="social-link" id="youtube"><?php include 'images/youtube.svg'; ?></a>
                </section>
                <section class="footer-section" id="copyright">
                    <p>All rights reserved. © 2017 Team Mercury</p>
                </section>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>