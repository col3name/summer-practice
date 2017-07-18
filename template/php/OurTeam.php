<?php

/**
 * Created by PhpStorm.
 * User: mikus_000
 * Date: 03.07.2017
 * Time: 7:50
 */
class OurTeam
{
    public $id;
    public $name;
    public $surname;
    public $position;
    public $photo;
    public $characteristic;
    public $date_birth;
    public $date_work_start;

    public function __construct($row)
    {
        $this->id = $row['id'];
//        print_r('$this->id' . $row['id']);
        $this->name = $row['name'];
        $this->surname = $row['surname'];
        $this->position = $row['position'];
        $this->photo = $row['photo'];
        $this->characteristic = $row['characteristic'];
        $this->date_birth = $row['date_birth'];
        $this->date_work_start = $row['date_work_start'];
    }

    public function printPerson()
    {

        echo '<br> Имя: ' . $this->name;
        echo '<br> Фамилия' . $this->surname;
        echo '<hr>';
    }
}