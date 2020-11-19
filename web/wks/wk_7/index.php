<!DOCTYPE html>
<html>
    <head>
        <title>Week 7 | CSE 341 - Back End Development II</title>
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
        <h1>Week 7 - Project 1 Submission</h1>
            <h2>Reading</h2>
                <p>This week was about authentication and user security. In PHP you are able to use password hashing to hash a password before it is stored on the server. This is something that is used often in smaller sites but larger sites will use other forms of password saving by sourcing out that portion to another site. However, in my opinion using more server side and client side options are better because I am able to manage the accounts directly versus having to go through another company.</p>
                <p>Now as far as AJAX is concerned, I am not that great with it and honestly this class as well as Front End II are the only classes that I have played with AJAX. THen again I have used jQuery which is something that I didn't use in my project because I found it easier to do everything in PHP. The same goes for JSON but because I am so far behind I did everything in PHP and nothing in Javascript.</p>
            <h2>Team Assignment</h2>
                <p>Our team this week ended up doing this assignment twice. Which isn't a problem its just that only Collin and I were able to meet Tuesday but the other two did could not meet. While I met with Collin it was difficult to follow what he was doing because he had already used what was being taught in the assignment on his project. So instead of making it simple for me to follow and understand he duplicated his content from his site and spent the better part of two hours altering while I could not follow along. The following Saturday the other members of the group met and I joined them so as to get a better understanding of how to use security authentication. I was able to use what I learned that day for my project.</p>                
                <p>Repository - <a href="https://github.com/Blake-Collin/cs313-php-Channel1/tree/master/07Teach">Here</a></p>
            
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
