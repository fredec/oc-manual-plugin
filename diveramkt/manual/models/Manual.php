<?php namespace Diveramkt\Manual\Models;

use Model;

/**
 * Model
 */
class Manual extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_manual_preview';

    /**
     * @var array Validation rules
     */
    public $rules = [
        // 'title' => 'required',
        // 'cod_embed' => 'required',
    ];

}
