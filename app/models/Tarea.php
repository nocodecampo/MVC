<?php

namespace Formacom\models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = "tasks";
    protected $primaryKey = "tasks_id";

    public $timestamps = false; // Si la tabla no tiene created_at y updated_at

}
