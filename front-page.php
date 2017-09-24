<?php get_header(); ?>
    <section class="landing-section landing-section--grabber" id="jump"> <!-- Grabber text -->
        <p class="landing-section__text-body landing-section__text-body--no-margin">
            Team Mercury (1089) inspires students to pursue careers in science and technology by creating partnerships with parents, sponsors, and community members. Students will employ teamwork and organizational skills to simulate the environment of a small business. Through the development and presentation of a FIRST (For Inspiration and Recognition of Science and Technology) competition robot, Team Mercury will engage the community by participating in local outreach events. Lastly, the team will exemplify the spirit of gracious professionalism in its communication with all parties influenced by its projects, and have a blast while doing it!
        </p>
    </section>
    <section class="landing-section landing-section--team-display"> <!-- "OUR TEAMS" -->
        <h2 class="landing-section__header">
            OUR TEAMS
        </h2>
        <div class="landing-section__team-column">
            <img class="team-column__logo" src="<?php echo get_template_directory_uri() ?>/images/1089logo.png"/>
            <h2 class="team-column__team">FRC 1089</h2>
        </div>
        <div class="landing-section__team-column">
            <img class="team-column__logo" src="<?php echo get_template_directory_uri() ?>/images/3944logo.png"/>
            <h2 class="team-column__team">FTC 3944</h2>
        </div>
        <div class="landing-section__team-column">
            <img class="team-column__logo" src="<?php echo get_template_directory_uri() ?>/images/FLLlogo.png"/>
            <h2 class="team-column__team">OUR FLL TEAMS</h2>
        </div>
    </section>
    <section class="landing-section parallax landing-section--light landing-section--sponsorbg"> <!-- "SPONSORS" -->
        <h2 class="landing-section__header">SPONSORS</h2>
        <p class="landing-section__text-body">
            Find what we do interesting? Want to give us a hand in helping our team to achieve greatness? Become our sponsor today!
        </p>
        <a href="#" target="_blank" class="button landing-section__button landing-section__button--light">SPONSOR US</a>
    </section>
    <section class="landing-section"> <!-- "JOIN US" -->
        <h2 class="landing-section__header">JOIN US</h2>
        <p class="landing-section__text-body">
            Are you a student looking to join a FIRST robotics team? Look no further! We are always looking for new students to join our teams!
        </p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe3UGBnHzwgEufM4HYTq2zWJq_tYcaEVFNWHFp5d2Zw9sVdag/viewform?c=0&w=1" target="_blank" class="button landing-section__button" id="call">SIGN UP</a>
    </section>
<?php get_footer(); ?>