<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'film_id';

    // Si la tabla no tiene created_at y updated_at
    public $timestamps = false;

    // Relación Muchos a Muchos con Actor
    public function actores() {
        return $this->belongsToMany(Actor::class, 'film_actor', 'film_id', 'actor_id');
    }

}