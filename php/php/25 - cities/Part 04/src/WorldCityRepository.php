<?php
declare(strict_types=1);

class WorldCityRepository {

    public function __construct(private PDO $pdo) {}

    public function fetchById(int $id): ?WorldCityModel {
        $stmt = $this->pdo->prepare('SELECT * FROM `worldcities` WHERE `id` = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $entry = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($entry)) {
            return new WorldCityModel(
                $entry['id'],
                $entry['city'],
                $entry['city_ascii'],
                (float) $entry['lat'],
                (float) $entry['lng'],
                $entry['country'],
                $entry['iso2'],
                $entry['iso3'],
                $entry['admin_name'],
                $entry['capital'],
                $entry['population']
            );
        }
        else {
            return null;
        }
    }

    public function fetch(): array {
        $stmt = $this->pdo->prepare('SELECT * 
            FROM `worldcities` 
            ORDER BY `population`
            DESC LIMIT 10');

        $stmt->execute();

        $models = [];
        $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($entries AS $entry) {
            $models[] = new WorldCityModel(
                $entry['id'],
                $entry['city'],
                $entry['city_ascii'],
                (float) $entry['lat'],
                (float) $entry['lng'],
                $entry['country'],
                $entry['iso2'],
                $entry['iso3'],
                $entry['admin_name'],
                $entry['capital'],
                $entry['population']
            );
        }

        return $models;
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