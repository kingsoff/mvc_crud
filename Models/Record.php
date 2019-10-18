<?php

class Record
{
    private $id;
    private $name;
    private $birthYear;
    private $nationality;

    public function __construct($record_data = [])
    {
        if (isset($record_data['id'])) {
            $this->id = $record_data['id'];
            $this->name = @$record_data['name'];
            $this->birthYear = @$record_data['birth_year'];
            $this->nationality = @$record_data['nationality'];
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getBirthYear()
    {
        return $this->birthYear;
    }

    public function setBirthYear($birthYear)
    {
        $this->birthYear = $birthYear;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function toArray () {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(),
            "birth_year" => $this->getBirthYear(),
            "nationality" => $this->getNationality()
        ];
    }
}