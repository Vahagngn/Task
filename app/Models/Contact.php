<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected function index(){
    $filleble=['name','email','subject','message'];
  }  
}
