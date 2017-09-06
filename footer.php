            </main>            
            <footer class="site-footer">
                <section class="footer-section site-footer__widgets">
                    <?php
                        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") )
                    ?>
                </section>
                <section class="footer-section site-footer__social-links">
                    <a href="#" class="site-footer__social-link">
                        <svg version="1.1" class="social-link__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
                            <defs>
                                <mask id="fb-mask">
                                    <rect fill="white" width="100%" height="100%"/>
                                    <path fill="black" d="M95.1367,29H32.8638C30.7295,29,29,30.729,29,32.8638v62.2729
                                        C29,97.2705,30.7295,99,32.8638,99h33.5249V71.8926h-9.1221v-10.565h9.1221v-7.7905c0-9.0415,5.5224-13.9648,13.5888-13.9648
                                        c3.8623,0,7.1827,0.2876,8.1504,0.4165v9.4487l-5.5927,0.0024c-4.3877,0-5.2364,2.0845-5.2364,5.1431v6.7446h10.461l-1.3623,10.565
                                        h-9.0987V99h17.8379C97.2705,99,99,97.2705,99,95.1367V32.8638C99,30.729,97.2705,29,95.1367,29z"/>
                                </mask>
                            </defs>
                            <circle cx="64" cy="64" r="64" mask="url(#fb-mask)" class="social-link__path"/>
                        </svg>
                    </a>
                    <a href="#" class="site-footer__social-link">
                    <svg version="1.1" class="social-link__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
                        <defs>
                            <mask id="twitter-mask">
                                <rect fill="white" width="100%" height="100%"/>
                                <path fill="black" d="M99.8398,41.7695c-2.6367,1.17-5.4707,1.96-8.4462,2.3155
                                    c3.0351-1.8204,5.3681-4.7022,6.4658-8.1363c-2.8408,1.6851-5.9883,2.9097-9.3379,3.5689
                                    c-2.6826-2.8584-6.5049-4.6436-10.7344-4.6436c-8.123,0-14.7065,6.584-14.7065,14.7051c0,1.1533,0.1303,2.2754,0.3808,3.3516
                                    c-12.2221-0.6133-23.0581-6.4678-30.311-15.3648c-1.2661,2.1714-1.9912,4.6978-1.9912,7.3931c0,5.1015,2.5962,9.6025,6.542,12.2397
                                    c-2.4107-0.0757-4.6783-0.7378-6.6607-1.8393c-0.0014,0.0615-0.0014,0.123-0.0014,0.1855c0,7.125,5.0693,13.0684,11.7968,14.4199
                                    c-1.2343,0.336-2.5337,0.5157-3.8745,0.5157c-0.9477,0-1.8691-0.0928-2.7671-0.2637c1.8716,5.8418,7.3023,10.0937,13.7378,10.2119
                                    c-5.0332,3.9453-11.374,6.2959-18.2646,6.2959c-1.187,0-2.357-0.0693-3.5073-0.2051c6.5083,4.1729,14.2377,6.6065,22.5429,6.6065
                                    c27.0498,0,41.8418-22.4082,41.8418-41.8418c0-0.6377-0.0146-1.2715-0.0429-1.9024C95.375,47.3086,97.8691,44.7188,99.8398,41.7695
                                    z"/>
                            </mask>
                        </defs>
                        <circle cx="64" cy="64" r="64" mask="url(#twitter-mask)" class="social-link__path"/>
                    </svg>
                    </a>
                    <a href="#" class="site-footer__social-link">
                        <svg version="1.1" class="social-link__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
                            <defs>
                                <mask id="yt-mask">
                                    <rect fill="white" width="100%" height="100%"/>
                                    <path fill="black" d="M99.8398,78.3359c0,5.6309-4.6084,10.2403-10.2402,10.2403H38.3994
                                        c-5.6318,0-10.2392-4.6094-10.2392-10.2403V49.6641c0-5.6328,4.6074-10.2403,10.2392-10.2403h51.2002
                                        c5.6318,0,10.2402,4.6075,10.2402,10.2403V78.3359z M56.5967,72.793l19.3681-10.0352L56.5967,52.6523V72.793z"/>
                                </mask>
                            </defs>
                            <circle cx="64" cy="64" r="64" mask="url(#yt-mask)" class="social-link__path"/>
                        </svg>
                    </a>
                </section>
                <section class="footer-section site-footer__copyright">
                    <p class="footer-copyright__text">All rights reserved. © 2017 Team Mercury</p>
                </section>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>