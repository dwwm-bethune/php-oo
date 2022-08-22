<?php

class Continent
{
    private $countries;

    public function __construct($file)
    {
        $this->countries = json_decode(file_get_contents($file), true);
    }

    public function getCapitals()
    {
        foreach ($this->countries as $country) {
            echo '<p>'.$country['capital'].' est la capitale de '.$country['country'].'</p>';
        }
    }

    public function getCountry($city)
    {
        foreach ($this->countries as $country) {
            if ($country['capital'] == $city) {
                return $country['country'];
            }
        }
    }

    public function getCapital($country)
    {
        foreach ($this->countries as $c) {
            if ($c['country'] == $country) {
                return $c['capital'];
            }
        }
    }
}
