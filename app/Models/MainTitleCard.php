<?php

namespace App\Models;

use App\Models\SubMainInfoCard;
use Illuminate\Database\Eloquent\Model;

class MainTitleCard extends Model
{
    protected $connection   = "mysql";
    protected $table        = "main_title_cards";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'alt_name',
        'card_description',
        'main_description',
        'card_border',
        'image_path',
        'tag',
    ];

    public function subMainInfoCards()
    {
        return $this->hasMany(SubMainInfoCard::class, 'main_title_cards_id', 'id');
    }
}
