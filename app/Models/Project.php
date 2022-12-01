<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $guarded = [];


    public function groups() {
        return $this->belongsToMany(Group::class, 'group_project');
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
