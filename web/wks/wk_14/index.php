<!DOCTYPE html>
<html>
    <head>
        <title>Week 14 | Finals Week | CSE 341 - Back End Development II</title>
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
        <h1>Week 14</h1>
        <h2>Final Project</h2>
            <h3>Project title / one sentence description:</h3>
                <p>Google Book API access using a external web server.</p>

            <h3>Copy and paste the URL for your site at Heroku:</h3>
                <p><a href="https://floating-ravine-61841.herokuapp.com/">Book Finder App</a></p>

            <h3>Copy and paste the URL for your source code repository (e.g., GitHub):</h3>
                <p><a href="https://github.com/timothywells/nodejs_bookfinder">Github Repository</a></p>

            <h3>Please provide a brief description of what your project does and how to use the application. Make sure to include any required information like a username and password.</h3>
                <p>My application isn’t particularly difficult to use. I went with a fairly simple but complicated app for some one of my caliber of understanding. That is I created a web search application that gets information from the Google Books API. With this particular setup the request of the user goes from the client side to the server side to process the request. The whole point of that is to help protect people’s anonymity while perusing through books provided through the Google Book Web API. All you have to do is choose your parameters like All books, by Author or by Title. Then enter in the desired information and click the search button. I forgot to set my eventlistener to have an or statement that allows a keypress.</p>

            <h3>Briefly describe any pieces of the assignment that are not yet working correctly.</h3>
                <p>As far as the application goes, it is complete compared to the requirements, just not to a point I am fully satisfied. In its current state the app works just fine. The thing that was the biggest pain and is not working is the APIkey. While the APIkey is not necessarily needed to actually use the search engine it does allow me to keep track of visits. I had planned other functionality but as the semester progressed I had to axe some things.</p>

        <h2>Project Self-assessment</h2>
            <h3>For each of the following requirements, please replace the "(YES/NO)" with either "YES" or "NO" as to whether or not your work met this requirement.</h3>
                <h4>Requirements</h4>
                    <ol>
                        <li><b>YES</b> | Your web application is running in Heroku.</li>
                        <li><b>YES</b> | Your latest source code is in GitHub.</li>
                        <li><b>YES</b> | Your web application is hosted on Node.js.</li>
                        <li><b>YES</b> | Your web application exposes one or more web services in Node.js.</li>
                        <li><b>YES</b> | Your web application consumes one or more of your web services from the browser.</li>
                        <li><b>YES</b> | Your web application has a data layer of either a database or third-party web service.</li>
                    </ol>
            <h3>For each of the following criteria, please replace the "(1-5)" with either the "1", "2", "3", "4", or "5" category you feel best describes your work.</h3>
                <h4>Categories</h4>
                    <ol>
                        <li>Some attempt was made</li>
                        <li>Developing, but significantly deficient</li>
                        <li>Slightly deficient, but still mostly adequate</li>
                        <li>Meets requirements</li>
                        <li>Shows creativity and excels above and beyond requirements</li>
                    </ol>
                <h4>Criteria</h4>
                    <ul>
                        <li>5 - Professional look and feel.</li>
                        <li>5 - Accomplishes a meaningful/interesting task.</li>
                        <li>5 - Demonstrates skill with HTML, CSS, and JavaScript.</li>
                        <li>5 - Demonstrates skill with Node.js.</li>
                        <li>5 - Demonstrates skill with Express.</li>
                        <li>5 - Demonstrates skill with web services.</li>
                        <li>5 - Demonstrates skill with client/server communication.</li>
                        <li>5 - Overall project evaluation.</li>
                    </ul>
            <h3>Finally, please provide an overall description/justification of the categories you selected.</h3>
                <p>Honestly it is hard to give myself a hard grade. I always get that back of the mind little voice that sounds like your mom or someone that says I am being prideful for giving myself a grade high grade. However, what I was able to accomplish this semester while working full time as well as a pandemic and doing two classes that are similar enough in code ro get things crossed. Is just one reason. Others include the fact that I haven’t touched PHP, JS or any server language in several years but I was able to get through both courses and I learned a whole lot more than I expected. I am still a little foggy on some subjects but at least I have a foundational knowledge that I can move on with and try to hone my skills. Those are some of the many reasons that I feel that the score I gave myself is justifiable.</p>
    </main>
</div>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>
    </footer>
    <script src="/js/main.js"></script>
</html>
