<?php
function crawl_page($url, $depth = 5)
{
    static $seen = array();
    if (isset($seen[$url]) || $depth === 0) {
        return;
    }

    $seen[$url] = true;

    $dom = new DOMDocument('1.0');
    @$dom->loadHTMLFile($url);

    // Capturing all the words

    $text = file_get_contents($url);

    $stripped_text = strip_tags($text);

    $words = explode(" ", $stripped_text);

    foreach ($words as $word) {
        // saving to db

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $conn = new newsqli($servername, $username, $password);

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected Successfully";

        //$db = mysql_select_db($databasename);
        //mysql_query("write you query here");

    }

    // Taking the internal urls for next level of crawling

    $anchors = $dom->getElementsByTagName('a');
    foreach ($anchors as $element) {
        $href = $element->getAttribute('href');
        if (0 !== strpos($href, 'http')) {
            $path = '/' . ltrim($href, '/');
            if (extension_loaded('http')) {
                $href = http_build_url($url, array('path' => $path));
            } else {
                $parts = parse_url($url);
                $href = $parts['scheme'] . '://';
                if (isset($parts['user']) && isset($parts['pass'])) {
                    $href .= $parts['user'] . ':' . $parts['pass'] . '@';
                }
                $href .= $parts['host'];
                if (isset($parts['port'])) {
                    $href .= ':' . $parts['port'];
                }
                $href .= dirname($parts['path'], 1) . $path;
            }
        }
        crawl_page($href, $depth - 1);
    }
}