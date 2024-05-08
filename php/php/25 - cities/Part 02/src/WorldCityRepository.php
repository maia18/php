<?php

class WorldCityRepository {

    public function __construct(private PDO $pdo) {}

    public function fetch(): array {
        $stmt = $this->pdo->prepare('SELECT 
            `id`, `city`, `lat`, `lng`, `country`, 
            `iso2`, `iso3`, `capital`, `population` 
            FROM `worldcities` 
            ORDER BY `population`
            DESC LIMIT 10');

        $stmt->execute();
        $entries = $stmt->fetchAll(PDO::FETCH_CLASS, 'WorldCityModel');

        return $entries;
    }

/*
    public function fetch(): array  {
        $budapest = new WorldCityModel();
        $budapest->city = 'Budapest';
        $budapest->country = 'Hungary';
        $budapest->population = 1200000;

        $berlin = new WorldCityModel();
        $berlin->city = 'Berlin';
        $berlin->country = 'Germany';
        $berlin->population = 2000000;

        $nyc = new WorldCityModel();
        $nyc->city = 'New York City';
        $nyc->country = 'USA';
        $nyc->population = 8000000;

        $entries = [
            $budapest,
            $berlin,
            $nyc
        ];
        return $entries;
    }
*/
}