<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Str::of($value)->trim()->ucfirst(),
        );
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            set: fn (string| null $value) => $value ? Str::of($value)->trim()->ucfirst() : null,
        );
    }
}
