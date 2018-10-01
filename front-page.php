<?php get_header(); ?>
    <section class="text text--color--light text--align--center content__section content__section--background-color--dark" id="jump"> <!-- Grabber text -->
        <!-- <h2>ABOUT US</h2> -->
        <!-- <p>
            Team Mercury (1089) inspires students to pursue careers in science and technology by creating partnerships with parents, sponsors, and community members. 
            Students will employ teamwork and organizational skills to simulate the environment of a small business. 
            Through the development and presentation of a FIRST (For Inspiration and Recognition of Science and Technology) competition robot,
            Team Mercury will engage the community by participating in local outreach events. 
            Lastly, the team will exemplify the spirit of gracious professionalism in its communication with all parties influenced by its projects, 
            and have a blast while doing it!
        </p> -->
        <p class="text text--font-family--roboto-mono">
            HIGHTSTOWN HIGH SCHOOL’S TEAM MERCURY IS A DEDICATED GROUP OF STUDENTS INTERESTED IN SCIENCE, ENGINEERING, MECHANICS, COMPUTERS, TECHNOLOGY, 
            AND A PLETHORA OF OTHER DISCIPLINES. WITH THE HELP OF OUR GRACIOUS SPONSORS, MENTORS, COACHES, AND PARENTS, TEAM MERCURY IS ANNUALLY ABLE TO COMPETE 
            IN THE INTERNATIONAL FIRST ROBOTICS COMPETITION.
        </p>
    </section>
    <section class="grid content__section fadeable"> <!-- "OUR TEAMS" -->
        <h2 class="text text--align--center grid__item">
            OUR TEAMS
        </h2>
        <p class="text text--align--center text--contain grid__item">
            Team Mercury has various teams for every age and interest. No matter who you are, Team Mercury has a home for every kind of student!
        </h5>
        <div class="container container--direction--col container--align--center grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <img class="image image--size--thumbnail-s image--fit--contain" src="<?php echo get_template_directory_uri() ?>/images/logos/1089logo.png"/>
            <h4 class="text text--align--center">FRC 1089</h4>
            <p class="text text--align--center">
                The FRC team competes in the FIRST Robotics Competition. With over 70 members, the team handles everything from Spirit, Media, & Public Relations to designing, building, & programming a fully-functioning competition robot.
            </p>
        </div>
        <div class="container container--direction--col container--align--center grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <img class="image image--size--thumbnail-s image--fit--contain" src="<?php echo get_template_directory_uri() ?>/images/logos/3944logo.png"/>
            <h4 class="text text--align--center">FTC 3944</h4>
            <p class="text text--align--center">
                The FTC team competes in the FIRST Tech Challenge. This close-knit group of around 10 members dedicates their time to designing, building, & programming their robot. They track their progress using an Engineering Notebook.
            </p>
        </div>
        <div class="container container--direction--col container--align--center grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <img class="image image--size--thumbnail-s image--fit--contain" src="<?php echo get_template_directory_uri() ?>/images/logos/FLLlogo.png"/>
            <h4 class="text text--align--center">OUR FLL TEAMS</h4>
            <p class="text text--align--center">
                Students from the FRC team mentor several FLL (FIRST Lego League) Teams. Mentors guide kids grades 4-8 in the designing, building & programming of Lego EV3 robots for competition, as well as a mini-research project.
            </p>
        </div>
    </section>
    <section class="grid content__section no-padding">
        <section class="invite invite--members container container--direction--col container--align--center"> <!-- "JOIN US" -->
            <h2 class="text text--align--center text--color--light">BECOME A MEMBER</h2>
            <p class="text text--contain text--align--center text--color--light">
                Are you a Hightstown student looking to join a FIRST robotics team? 
                <br>
                Look no further! We are always looking for new students to join our team!
            </p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe3UGBnHzwgEufM4HYTq2zWJq_tYcaEVFNWHFp5d2Zw9sVdag/viewform?c=0&w=1" target="_blank" class="button button--align--bottom button--color--white" id="call">SIGN UP</a>
        </section>
        <section class="invite invite--sponsors container container--direction--col container--align--center"> <!-- "SPONSORS" -->
            <h2 class="text text--align--center text--color--light">SPONSOR THE TEAM</h2>
            <p class="text text--contain text--align--center text--color--light">
                Want to fund our team? Want your brand's logo on the robot and on our site? 
                <br>
                Become our sponsor today!
            </p>
            <a href="#" target="_blank" class="button button--align--bottom button--color--white">LEARN MORE</a>
        </section>
    </section>
<?php get_footer(); ?>