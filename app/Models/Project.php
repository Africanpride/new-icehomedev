<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'description', // Added a 'description' attribute
        'status', // Added a 'status' attribute
        'budget', // Added a 'budget' attribute
        'project_manager', // Added a 'project_manager' attribute
        'team_members', // Added a 'team_members' attribute
        'tasks', // Added a 'tasks' attribute
        'milestones', // Added a 'milestones' attribute
        'documents', // Added a 'documents' attribute
        'dependencies', // Added a 'dependencies' attribute
        'priority', // Added a 'priority' attribute
        'location', // Added a 'location' attribute
        'resources', // Added a 'resources' attribute
        'client_contact', // Added a 'client_contact' attribute
        'notes', // Added a 'notes' attribute
        'tags', // Added a 'tags' attribute
        'archived', // Added an 'archived' attribute
    ];

    // You may also define relationships with other models here.
}
