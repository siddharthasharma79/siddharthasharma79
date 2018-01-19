<?php

    /**
    * Show a PHP page showing current currency conversation rates
    * from SGD to USD, HKD, EUR using API from http://fixer.io/
    *
    * @ author Siddhartha Sharma (siddharthasharma79@gmail.com)
    * @ created on 18 Jan 2018
    */

    // query parameters
    $base_currency = "SGD";
    $query_curreny_list= "USD,HKD,EUR";

    // Fixer api related parameters
    $api_host = "https://api.fixer.io";
    $api_endpoint = "/latest";
    $api_query_string = "base=$base_currency&symbols=$query_curreny_list";

    // Building fixer api query url
    $query_url = $api_host . $api_endpoint . '?' . $api_query_string;

    // calling fixer api
    echo "<pre>";
    try {
        if($response_json = file_get_contents($query_url)) {
            $response_array = json_decode($response_json, true);
        } else {
            throw new Exception();
        }
    } catch (Exception $e) {
        print_r($e);
    }
    print_r($response_array);
