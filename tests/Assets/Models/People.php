<?php

namespace Sfneal\Observables\Tests\Assets\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sfneal\Observables\Tests\Assets\Factories\PeopleFactory;
use Sfneal\Observables\Tests\Assets\Mocks\PeopleCreatedEvent;

class People extends Model
{
    use HasFactory;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

    protected $table = 'people';
    protected $primaryKey = 'person_id';

    protected $fillable = [
        'person_id',
        'name_first',
        'name_last',
        'email',
        'age',
    ];

    /**
     * @var array Events to be dispatched after certain events
     */
    protected $dispatchesEvents = [
        'created' => PeopleCreatedEvent::class,
    ];

    /**
     * Model Factory.
     *
     * @return PeopleFactory
     */
    protected static function newFactory(): PeopleFactory
    {
        return new PeopleFactory();
    }

    public function getNameFullAttribute(): string
    {
        return "{$this->name_first} {$this->name_last}";
    }

    public function getNameLastFirstAttribute(): string
    {
        return "{$this->name_last}, {$this->name_first}";
    }

    public function getAgeAttribute($value): int
    {
        return intval($value);
    }
}
