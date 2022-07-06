<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Penyakit extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'kode',
        'nama',
        'penyebab'
    ];

    public $timestamps = false;

    protected static $logAttributes = ['nama', 'kode'];

    protected static $igonoreChangedAttributes = ['updated_at'];

    protected static $recordEvents = ['created', 'updated', 'deleted'];

    protected static $logOnlyDirty = true;

    protected static $logName = 'penyakit';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "You have {$eventName} penyakit";
    }

    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class)->withPivot('value_cf');
    }
}
