<?php
namespace App\Models;

// require_once 'BaseElement.php';
// require_once 'Printable.php';

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table='jobs';

    /* public function __construct($title,$description)
    {
        $newTitle='Job '.$title;
        //parent::__construct($newTitle,$description);  
        $this->title=$newTitle; 
    } */

    public function getDurationAsString()
    {

        $years = floor($this->month / 12);
        $extraMonth = $this->month % 12;

        if ($years > 0) {
            if ($extraMonth > 0) {
                return " Job duration $years years $extraMonth months";
            } else {
                return "Job duration $years years";
            }
        } else {
            return "Job duration $extraMonth months";
        }
    }

    
}
