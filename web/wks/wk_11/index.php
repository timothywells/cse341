<!DOCTYPE html>
<html>
    <head>
        <title>Week 11 | CSE 341 - Back End Development II</title>
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
        <h1>Week 11</h1>
        <h2>Milestone 2</h2>
            
        <h3>Project title / one sentence description:</h3>
            <p>Google Book API access using a external web server.</p>

        <h3>Copy and paste the URL for your site at Heroku:</h3>
            <p><a href="https://floating-ravine-61841.herokuapp.com/">Book Finder App</a></p>

        <h3>Copy and paste the URL for your source code repository (e.g., GitHub):</h3>
            <p><a href="https://github.com/timothywells/nodejs_bookfinder">Github Repository</a></p>

        <h3>Describe the component that you completed from end-to-end:</h3>
            <p>I have the AJAX cal sending a request and I am receiving a response but it is not putting the information on the page and is not returning the right API request. I keep getting undefined for each of the search paramaters. However, if I setup only the front end to call to the Google Books API it works just fine.</p>

        <h3>Please select the category you feel best describes your assignment:</h3>
            <p>1 - Some attempt was made</p>
            <p>2 - Developing, but significantly deficient</p>
            <p>3 - Slightly deficient, but still mostly adequate</p>
            <p><b>4 - Meets requirements</b></p>
            <p>5 - Shows creativity and excels above and beyond requirements</p>

        <h3>Provide a brief justification (1-2 sentences) for selecting that category.</h3>
            <p>I honestly feel I put in a great amount of effort but because I couldn't get the AJAX call to work per the requirements of this Milestone then I cannot say I showed creativity or that I excel at the project.<p>

        <h3>Please list any questions you have for the instructor regarding this assignment or this week's topic.</h3>
            <p>Why is AJAX so prominently used in this class when it feels like there isn't enought documentation or that AJAX goes hand in hand with jQuery?</p>
    	    <p>Also why aren't we working on industry wide and used js libraries like Angular, React, Vue and axios?</p>
    </main>
</div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>
    </footer>
    <script src="/js/main.js"></script>
</html>
