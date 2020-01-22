<?php namespace Diveramkt\Manual\Models;

use Model;

class Settings_ extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'manual_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
