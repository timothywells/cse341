<!DOCTYPE html>
<html>
    <head>
        <title>Project 1 | CSE 341 - Back End Development II</title>
        <meta name="description" content="WDD 330 - Front End Development Home Page designed and developed by Tim Wells">
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
    </main>
</div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>
    </footer>
    <script src="/js/main.js"></script>
</html>
