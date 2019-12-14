<!DOCTYPE html>
<html>
<head>
    <title>Indexing Launcher | SARA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sherly Zheng">
    <meta name="description" content="Index a webpage into our SARA search engine">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../stylesheets/layout.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="SHORTCUT ICON" href="../SARA-icon.png">
</head>
<nav class="topnav" id="topNav">
    <a class="logo" href="../home.html"><img src="../SARA-icon.png" alt="SARA" style="width:50px; height: 50px"></a>
    <div class="dropdown">
        <button class="dropbtn">Search
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../search-by/fixed-list.html">Fixed List</a>
            <a href="../search-by/from-file.html">From File</a>
            <a href="../search-by/google-api.html">Google API</a>
            <a href="../search-by/our-search-engine.html">Our Search Engine</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Course
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="https://learn.zybooks.com/zybook/CUNYCSCI355TeitelmanSpring2019" target="_blank">Zybook</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Browser
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../browser/navigator.html">Navigator</a>
            <a href="../browser/window.html">Window</a>
            <a href="../browser/screen.html">Screen</a>
            <a href="../browser/location.html">Location</a>
            <a href="../browser/geolocation.html">Geolocation</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">About
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../about/developer.html">Developer</a>
            <a href="../about/contact-us.php">Contact Us</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Admin
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="php/indexinglauncher.php" class="active">Indexing Launcher</a>
            <a href="../admin/searchhistory.php">Search History & Stats</a>
        </div>
    </div>
    <a href="javascript:void(0);" class="hamburger" onclick="navBarFunc()">
        <i class="fa fa-bars"></i>
    </a>
</nav>
<body>
<div class="adminpage">
    <div class="adminpagetitle">
        <h1>Indexing Launcher</h1>
        <p>Please enter a URL to index:</p>
    </div>
    <div class="searchbar">
        <form class="searchform" action="indexinglauncher.php" method="POST" onsubmit="return checkURL()">
            <input type="text" id="url" name="url" placeholder="https://www.google.com" autocomplete="off" required>
            <button type="submit" id="searchbtn" class="enterurlbtn">
                Go
            </button>
        </form>
    </div>
    <script src="js/webflow.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>
/*
require 'php/connection.php';

if(isset($_GET['searchquery'])) {
$query = $_GET['searchquery'];

$sql = $conn->query("SELECT page.url, page.title, page.description, page_word.freq
FROM page, word, page_word
WHERE page.pageId = page_word.pageId
AND word.wordId = page_word.wordId
AND word.wordName = '$query'
ORDER BY freq");

if ($sql->num_rows > 0)
{
while($row = $sql->fetch_assoc()) {
echo "<p>" . $row["title"] . "</p></li>\n";
echo "<p>" . $row["description"] . "</p>\n";
echo "<br>\n";

}

}

else {
echo "<p>0 results</p>";
}
*/