<?php

namespace App\Models;

//require_once 'BaseElement.php';

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = 'project';
    public function getDurationAsString()
    {

       /*  $years = floor($this->month / 12);
        $extraMonth = $this->month % 12;

        if ($years > 0) {
            if ($extraMonth > 0) {
                return " Job duration $years years $extraMonth months";
            } else {
                return "Job duration $years years";
            }
        } else {
            return "Job duration $extraMonth months";
        } */
    }
}
