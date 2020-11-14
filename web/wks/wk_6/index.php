<!DOCTYPE html>
<html>
    <head>
        <title>Week 6 | CSE 341 - Back End Development II</title>
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
        <h1>Week 6 - Database update</h1>
        <h2>Reading</h2>
            <p>This week we learned about how to access, select, insert, update and change our databases. Which is a major portion of finishing the project but getting it all to work took far longer than I expected.</p>
        <h2>Team Activity</h2>
            <p>This week the team worked on setting up PHP files to access the database so that the sciptures that we entered the week before could be searched by the user and be brought back to them to read.</p>
            <p>Repository - <a href="https://github.com/Blake-Collin/cs313-php-Channel1/tree/master/06Teach">Here</a></p>
        <h2>Assignment - Database Update</h2>
            <h3>Assignment Links</h3>
                <p>Talon Air Website - <a href="https://morning-inlet-48465.herokuapp.com/wks/prjct_1/talonair/">Here</a></p>
                <p>Repository - <a href="https://github.com/timothywells/cse341/tree/master/web/wks/prjct_1/talonair">Here</a></p>
            <h3>Briefly list and describe the elements of the application that are functioning. Include any special instructions about how to login and/or use your application.</h3>
                <p>I would say that 80% of what I want working is working but 100% of what is done meets the requirements for this week. You can go through the registration and login process as well as change the profile information such as Name, Address and Phone Number. You also have the ability to sign out. I do not have the profile switch statement setup yet to allow you to switch to your profile as soon as you register but that is ok, it is kind of a way to be more secure. Another aspect that is working is the messages. You can write one from the homepage and it will send the messages to the server and they are served up to the admin profile. As far as the admin profiles, if you sign in you can’t access it unless you are registered as an admin. This can only happen if you are registered and I go onto the server directly and change the admin clearance from the default of false to true.</p>
            <h3>Briefly describe any pieces of the assignment that are not yet working correctly.</h3>
                <p>The portions of the site that are not working as intended include the ability to write a review, change the password, username, email and the review. Other things that I wanted but are not implemented is getting the user registered and logged in at the same time. Which when registering I wanted the user to go from registering to their profile. When writing the review the idea is that the user has to be logged in to do it. If they do write a review they would need to fully register with their name, address and phone number. When writing the review their first name and last name’s first initial as well as the review date would be automatically set. However there would be an option to select the username as an alternative. All the user would need to do is fill out the subject line and the review text box. Once the review is submitted it can be seen on their profile page and subsequently updated. The last thing is I have an admin system setup but it has not been setup to be fully functional.</p>
            <h3>Briefly describe the "coolest" thing you learned while completing this assignment.</h3>
                <p>Honestly the coolest thing was learning how to make the switch statements work and be able to do security checks. It wasn’t the hardest to learn but they are extremely important if you plan on having a login and customer information saved on the server.</p>
            <h3>What is a benefit of having a foreign key constraint?</h3>
                <p>As far as a foreign key, it is a column or a group of columns in a table that reference the primary key of another table. I did try to set this up but that would entail even more time that I just don’t have. The plan that I have is to setup a review section that a customer can go to and write a review IF they sign in. What will happen is if the customer registers and then decides to write a review, the review will have the username, date and review. Which then would be posted to the reviews section as soon as the admin accepts it. However, their review will be available to the customer on their profile. Also the admin will be able to write the customer a message that will show as a response IF it is a question an not a review. But I digress, this is something I WANT to do but will have to wait until after the semester.</p>
            <h3>Please select the category you feel best describes your assignment:</h3>
                <ol>
                    <li>Some attempt was made</li>
                    <li>Developing, but significantly deficient</li>
                    <li>Slightly deficient, but still mostly adequate</li>
                    <li>Meets requirements</li>
                    <li><b>Shows creativity and excels above and beyond requirements</b></li>
                </ol>
            <h3>Provide a brief justification (1-2 sentences) for selecting that category.</h3>
                <p>Honestly I put a ton of work into it to make sure that it looks fantastic and that the flow feels natural and is almost mobile friendly. There are just a few things I really want to have done but it turned out pretty awesome in my opinion. The only code that I didn’t use was JavaScript but I plan on using it to validate entries before submission such as usernames, passwords, messages and so on.</p>

    </main>
</div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>
    </footer>
    <script src="/js/main.js"></script>
</html>
