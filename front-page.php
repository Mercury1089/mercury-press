<?php get_header(); ?>
    <section class="text text--dark text--align--center content__section content__section--background-color--dark" id="jump"> <!-- Grabber text -->
        <!-- <h2>ABOUT US</h2> -->
        <!-- <p>
            Team Mercury (1089) inspires students to pursue careers in science and technology by creating partnerships with parents, sponsors, and community members. 
            Students will employ teamwork and organizational skills to simulate the environment of a small business. 
            Through the development and presentation of a FIRST (For Inspiration and Recognition of Science and Technology) competition robot,
            Team Mercury will engage the community by participating in local outreach events. 
            Lastly, the team will exemplify the spirit of gracious professionalism in its communication with all parties influenced by its projects, 
            and have a blast while doing it!
        </p> -->
        <p class="text text--dark text--font-family--h3">
            HIGHTSTOWN HIGH SCHOOL’S TEAM MERCURY IS A DEDICATED GROUP OF STUDENTS INTERESTED IN SCIENCE, ENGINEERING, MECHANICS, COMPUTERS, TECHNOLOGY, 
            AND A PLETHORA OF OTHER DISCIPLINES. WITH THE HELP OF OUR GRACIOUS SPONSORS, MENTORS, COACHES, AND PARENTS, TEAM MERCURY IS ANNUALLY ABLE TO COMPETE 
            IN THE INTERNATIONAL FIRST ROBOTICS COMPETITION.
        </p>
    </section>
    <section class="grid content__section"> <!-- "OUR TEAMS" -->
        <h2 class="text text--align--center grid__item">
            OUR TEAMS
        </h2>
        <p class="text text--align--center grid__item">
            Team Mercury has various teams for every age and interest. No matter who you are, Team Mercury has a home for every kind of student!
        </h5>
        <div class="grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <img class="team-column__logo" src="<?php echo get_template_directory_uri() ?>/images/1089logo.png"/>
            <h3 class="team-column__team">FRC 1089</h3>
            <p class="landing-section__text-body">
                Mercury 1089 is the number of our FRC team. With over 50 members and blah blah blah yea yea yea something something something.
            </p>
        </div>
        <div class="grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <img class="team-column__logo" src="<?php echo get_template_directory_uri() ?>/images/3944logo.png"/>
            <h3 class="team-column__team">FTC 3944</h3>
            <p class="landing-section__text-body">
                Mercury 3944 is the number of our FTC team. With over 50 members and blah blah blah yea yea yea something something something.
            </p>
        </div>
        <div class="grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <img class="team-column__logo" src="<?php echo get_template_directory_uri() ?>/images/FLLlogo.png"/>
            <h3 class="team-column__team">OUR FLL TEAMS</h3>
            <p class="landing-section__text-body">
                Team Mercury has also helped to startup some FLL teams within the Hightstown region. Check em out cuz I need more money.
            </p>
        </div>
    </section>
    <section class="grid content__section content__section--width--full">
        <section class="grid__item grid__item--col-l--6 grid__item--col-m--9 grid__item--col-s--6"> <!-- "JOIN US" -->
            <h2 class="text text--align--center text--dark">STUDENTS</h2>
            <p class="text text--align--center text--dark">
                Are you a Hightstown student looking to join a FIRST robotics team? Look no further! We are always looking for new students to join our teams!
            </p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe3UGBnHzwgEufM4HYTq2zWJq_tYcaEVFNWHFp5d2Zw9sVdag/viewform?c=0&w=1" target="_blank" class="button landing-section__button landing-section__button--light" id="call">SIGN UP</a>
        </section>
        <section class="grid__item grid__item--col-l--6 grid__item--col-m--9 grid__item--col-s--6"> <!-- "SPONSORS" -->
            <h2 class="text text--align--center text--dark">SPONSORS</h2>
            <p class="text text--align--center text--dark">
                Find what we do interesting? Want to give us a hand in helping our team to achieve greatness? Become our sponsor today!
            </p>
            <a href="#" target="_blank" class="button landing-section__button landing-section__button--light">SPONSOR US</a>
        </section>
    </section>
<?php get_footer(); ?>