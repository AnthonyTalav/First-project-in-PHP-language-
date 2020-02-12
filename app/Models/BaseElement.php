<?php

namespace App\Models;
//require 'Printable.php';

class BaseElement implements Printable
{
    protected $title;
    public $description;
    public $visible = true;
    public $month;


    public function __construct($title, $description)
    {
        $this->setTitle($title);
        $this->description = $description;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if ($title == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $title;
        }
    }

    function getDurationAsString()
    {

        $years = floor($this->month / 12);
        $extraMonth = $this->month % 12;

        if ($years > 0) {
            if ($extraMonth > 0) {
                return " $years years $extraMonth months";
            } else {
                return "$years years";
            }
        } else {
            return " $extraMonth months";
        }
    }
    public function getDescription()
    {
        return $this->description;
    }
}
