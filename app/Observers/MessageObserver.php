<?php

namespace App\Observers;

use App\Message;
use Illuminate\Support\Facades\View;

class MessageObserver
{
    /**
     * Handle the message "created" event.
     *
     * @param  \App\Message  $message
     * @return void
     */
    public function created(Message $message)
    {
        //
    }

    /**
     * Handle the message "updated" event.
     *
     * @param  \App\Message  $message
     * @return void
     */
    public function updated(Message $message)
    {
        //
        View::share('status_msg', 'updated');        
    }

    /**
     * Handle the message "deleted" event.
     *
     * @param  \App\Message  $message
     * @return void
     */
    public function deleted(Message $message)
    {
        //
    }

    /**
     * Handle the message "restored" event.
     *
     * @param  \App\Message  $message
     * @return void
     */
    public function restored(Message $message)
    {
        //
    }

    /**
     * Handle the message "force deleted" event.
     *
     * @param  \App\Message  $message
     * @return void
     */
    public function forceDeleted(Message $message)
    {
        //
    }
}
