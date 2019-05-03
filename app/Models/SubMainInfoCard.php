<?php

namespace App\Models;

use App\Models\MainTitleCard;
use Illuminate\Database\Eloquent\Model;

class SubMainInfoCard extends Model
{
    protected $connection   = "mysql";
    protected $table        = "sub_main_info_cards";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'main_title_cards_id',
        'title',
        'alt_name',
        'card_description',
        'main_description',
        'image_path',
        'tag',
    ];

    public function mainTitleCard()
    {
        return $this->belongsTo(MainTitleCard::class, 'main_title_cards_id', 'id');
    }
}
