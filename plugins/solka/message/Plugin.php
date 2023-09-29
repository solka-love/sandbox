<?php namespace Solka\Message;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'solka\message\components\Feedback' => 'feedback'
        ];
    }

    public function registerSettings()
    {
    }
}
