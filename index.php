<?php
    $url = "https://blogbooks.net/wp-json/wp/v2/posts?_fields=title,excerpt,author,link&per_page=100";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, urlencode($url));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    var_dump($html);
    curl_close($ch);