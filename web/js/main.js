/*Navigation*/
var weekNav = document.querySelector(".wk_nav");
var wkllbls = [
    "Home",
    "Project 1",
    "Project 2",
    "Week 1",
    "Week 2",
    "Week 3",
    "Week 4",
    "Week 6",
    "Week 7",
    "Week 8",
    "Week 9",
    "Week 10",
    "Week 11",
    "Week 12",
    "Week 13",
    "Week 14",
];
var wklnks = [
    "/index.php",
    "/wks/prjct_1/index.php",
    "/wks/prjct_2/index.php",
    "/wks/wk_1/index.php",
    "/wks/wk_2/index.php",
    "/wks/wk_3/index.php",
    "/wks/wk_4/index.php",
    "/wks/wk_5/index.php",
    "/wks/wk_6/index.php",
    "/wks/wk_7/index.php",
    "/wks/wk_8/index.php",
    "/wks/wk_9/index.php",
    "/wks/wk_10/index.php",
    "/wks/wk_11/index.php",
    "/wks/wk_12/index.php",
    "/wks/wk_13/index.php",
    "/wks/wk_14/index.php",
];
for (i=0; i < wkllbls.length; i++) {
    var weekLine = document.createElement ("li");
    var a = document.createElement ("a");
    var link = document.createTextNode (wkllbls[i]);
    a.title = wkllbls[i];
    a.href = wklnks[i];

    a.appendChild(link);
    weekLine.appendChild(a);
    weekNav.appendChild(weekLine);
}
/*Copy Right Date*/
//document.getElementById('year').appendChild(document.createTextNode(new Date().getFullYear()))




/*document.getElementById("head") = headInfo;
var headInfo = {
    <meta name="author" content="Timothy Wells">
    <meta charset="utf-8">
    <html lang="en-US"></html>
    <meta name="keywords" content="HTML, CSS, JavaScript, WDD 330, Front End Development">
    <link rel="stylesheet" href="/web/css/stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
}*/