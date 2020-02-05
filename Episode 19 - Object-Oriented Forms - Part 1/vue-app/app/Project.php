<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public static function getAllProjects() {
        $projects = DB::select('select * from projects');

        return $projects;
    }

    public static function createProject($project) {
        
        return DB::insert('insert into projects (name, description) values (?, ?)', [$project['name'], $project['description']]);
    }
}
