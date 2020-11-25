<!DOCTYPE html>
<html>
    <head>
        <title>Project 2 | CSE 341 - Back End Development II</title>
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
        <h2>Project 2 Proposal</h2>
            <h3>Project Description</h3>
                <p>I will be creating a book finding application that will run off of the Google Book API. My reasoning behind this is that the documentation behind making such a web application is very common, has been done a number of ways and has a guide that was created by Google to get a simple search done. The aspects that I will be adding on to that process include saving favorites to local storage, searching by author, publisher, isbn and with some luck, genre. Ideally this will only take four weeks in total and is possible but with the school/work load will prove challenging.</p>
            <h3>Data Layer</h3>
                <p>Still a little unclear on what the Data Layer consists of but I can assume that it has to deal with how the information is retrieved, stored, used and deleted as necessary. I will need to setup at least two tables one for the user login and one for the books the user decides to save to their favorites list. I believe there is a way to connect the Google Books API to my users but that will be more of a stretch goal.</p>
            <h3>Web service endpoints</h3>
                <p>In this case I will be using heroku and node along with the Google Book API as my end points.</p>
            <h3>User Interface</h3>
                <img src="./bookSearchScreen1.png" alt="Book Web App Screen 1">
                <br>
                <img src="./bookSearchScreen2.png" alt="Book Web App Screen 1">
                <br>
                <p>I am not sure how I will be using AJAX. I have tried to familiarize myself with it but I have gotten better at JavaScript as it is in its current state. However, some of the upcoming assignments will cover that.</p>
            <h3>User Accounts / Sessions</h3>
                <p>I will try and implement a simple username, password and email system like the one that I have for my other project but done locally and verified on the server. Part of this system is to allow the user the opportunity to save books to a favorites list.</p>    
    </main>
</div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>
    </footer>
    <script src="/js/main.js"></script>
</html>
