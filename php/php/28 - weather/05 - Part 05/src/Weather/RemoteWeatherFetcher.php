<?php

namespace App\Weather;

class RemoteWeatherFetcher implements WeatherFetcherInterface {

    public function fetch(string $city): WeatherInfo {
        $fp = fsockopen("ssl://downloads.codingcoursestv.eu", 443, $errno, $errstr, 30);
        if (!$fp) {
            echo "$errstr ($errno)<br />\n";
        } else {
            $out = "GET /056%20-%20php/weather/weather.php?" . http_build_query(['city' => $city]) . " HTTP/1.1\r\n";
            $out .= "Host: downloads.codingcoursestv.eu\r\n";
            $out .= "Connection: Close\r\n\r\n";
            fwrite($fp, $out);
            $response = [];
            while (!feof($fp)) {
                $response[] = fgets($fp, 128);
            }
            fclose($fp);
            $responseStr = implode($response);
            $splittedResponse = explode("\r\n\r\n", $responseStr);

            $data = json_decode($splittedResponse[1], true);
            return new WeatherInfo($data['city'], $data['temperature'], $data['weather']);
        }
    }
}