<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'commentaire', 'contactAuteur','note', 'version','active', 'user_create','user_update','etablissement_id', 'created_at', 'updated_at'
    ];}
