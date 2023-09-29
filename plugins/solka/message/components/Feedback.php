<?php namespace Solka\Message\Components;

use Cms\Classes\ComponentBase;
use solka\message\models\Messages as msg;
use Input;
use Solka\Domains\Classes\Domain;
use Solka\Message\Models\Messages;

class Feedback extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Обратная связь',
            'description' => 'Получение сообщений от посетителей...'
        ];
    }

    public function defineProperties()
    {
        // $domain = Domain::getDomain();

        // $this->page['messages'] = $domain->messages;
        return [];
    }


    public function onFeedback()
    {
        $data = Input();
        $feedback = new msg();
        $feedback->fill($data);
        $feedback->save();

        return[
            '#feedbackForm' => '<div class="alert alert-success">
            <h2 class="mersy">Спасибо за сообщение</h2>
            </div>'
        ];

    }
}
