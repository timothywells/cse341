<!DOCTYPE html>
<html>
    <head>
        <title>Project 1 | CSE 341 - Back End Development II</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/common/head.php'; ?>
    </head>
    <header>
        <h1>CSE 341 - Back End Web Development II</h1>
    </header>
<div class="row">
    <nav>
        <ul class="wk_nav"></ul>
    </nav> 

    <main>
        <h2>Project 1 Proposal</h2>
            <h3>Project Description</h3>
                <p>The idea is to take my family’s HVAC company site and have a place for people to visit, sign up/in have access to their invoice, input their contact and home information, send messages via email/text and leave a review. This will all be accessible by the Admin as a phone book/contact page.</p>
            <h3>Design Overview</h3>
                <p>There will be a few screens, I think. One for sign up, sign in, the user’s homepage and the admin homepage. As mentioned the user will have a profile and the admin will have access to everyone’s profile information so that the admin can contact the user about their unit.</p>
            <h3>Database</h3>
                <p>User Information Table - User and Admin information including hashed passwords.</p>
                <p>Invoice Table - Relates to User Table and includes a PDF of their invoices.</P>
                <p>Rewview Table - Will contain a option for the user to leave a review or comment that can be seen and/or used by the company on the website.</P>
            <h3>Database Retrieval</h3>
                <p>Retrieve the User/Admin information to be displayed on a profile page.</P>
                <p>Retrieve the invoice through a link on the user's profile to each of the invoices associated to that user.</P>
                <p>Retrieve the user's review of their experience to be displayed to the user and/or on the site.</P>
            <h3>Database Update</h3>
                <p>User can create a profile and be presented with a profile page.</P>
                <p>User is able to enter in a review for the services completed.</P>
                <p>Admin is able to add invoice to user's account.</P>
            <h3>Project Access Link</h3>
            <a href="https://morning-inlet-48465.herokuapp.com/wks/prjct_1/talonair/index.php">Talon Air Site</a>

            <h2>Project 1 Submission</h2>
            
                <h3>Project Title / One sentence description:</h3>
                    <p>Home website for Talon Air, Inc. I created the site as part of my senior practicum but it was not that great. I grabbed that file and and had that as my starting point. The rest came along quite well once I was able to figure out how to acutally do the PHP and PostgreSQL.</p>

                <h3>The Heroku URL for your web application:</h3>
                    <p>Talon Air Website - <a href="https://morning-inlet-48465.herokuapp.com/wks/prjct_1/talonair/">Here</a></p>

                <h3>The GitHub URL for your source code repository:</h3>
                    <p>Repository - <a href="https://github.com/timothywells/cse341/tree/master/web/wks/prjct_1/talonair">Here</a></p>

                <h3>A link to the SQL file that contains the commands used to create your tables (e.g. a link to the myDb.sql file at GitHub, or something similar).</h3>
                    <p>Database - <a href="https://github.com/timothywells/cse341/blob/master/web/wks/prjct_1/talonair/db1.SQL">Here</a></p>

                <h3>Please provide a brief description of what your project does and how to use the application. Make sure to include any required information like a username and password.</h3>
                Please provide a brief description of what your project does and how to use the application. Make sure to include any required information like a username and password.
                    <p>The idea of the project was mentioned mostly in last week's assignment but the short is the site is the landing site for my step-father's HVAC company. On the site is a way for anyone to contact him with a message and not be signed in. However, if you want to leave a review you can register to the site and leave a review. I had intended on setting up the review section as well as everything else but that became to daunting. Fortunately I have been able to logically figure it out so I plan on setting the review section up so that it works correctly.</p>
                    <p>As far as other part of the site. The registration works great. I am able to hash the passwords and create the user. When the user logs in they will be taken to their profile page. On that page their information will be presented. If this is their fist time then only the username and email will be displayed. If the user desires to change some of that information they can select update profile. Upon submission the page will reload and the information will be updated.</h4>
                    <p>Now as far as another option that can be looked at and tested is the admin profile. I was able to finally get the thing to work right so now I have an admin profile page that can be accessed to see that information can be saved to the database. The credentials were sent to another person to access. On the admin page you can review messages from customers as well as reviews and the client list. All of these listst either have or will have a way to delete the row from the table with the information in it. Also I probaly could have seperated them all out into thier own pages instead of having everything on one page but didn't take the time to do it that way.</p>

                <h3>Briefly describe any pieces of the assignment that are not yet working correctly.</h3>
                    <p>To keep it brief, I wanted to have the reviews section setup but couldn't find enough information that makes sense to me when using foreighn keys to add the review written to the Reviews page. I also wanted to have the customer's review linked to their account so they could see their review and see if there is a message. Which I wan to move my Messages from the home to the profile. Another thing I wanted was the ability to change the email and password.  But again that is something I didn't have time for but saved some notes to work on it later.</p>

                <h2>External Links</h2>
                    <p>Database - <a href="https://github.com/timothywells/cse341/blob/master/web/wks/prjct_1/talonair/db1.SQL">Here</a></p>
                    <p>Talon Air Website - <a href="https://morning-inlet-48465.herokuapp.com/wks/prjct_1/talonair/">Here</a></p>
                    <p>Repository - <a href="https://github.com/timothywells/cse341/tree/master/web/wks/prjct_1/talonair">Here</a></p>
    </main>
</div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>
    </footer>
    <script src="/js/main.js"></script>
</html>
