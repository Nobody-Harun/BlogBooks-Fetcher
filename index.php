<?php
    $url = "https://blogbooks.net/wp-json/wp/v2/posts?_fields=title,excerpt,author,link&per_page=".$_GET['json_number'];
    var_dump(file_get_contents($url));