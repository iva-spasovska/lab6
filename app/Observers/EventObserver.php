<?php

namespace App\Observers;

use App\Models\Event;
use Illuminate\Support\Facades\Log;

class EventObserver
{
    /**
     * Handle the Event "created" event.
     */
    public function created(Event $event): void
    {
        Log::info("Event created: {$event->name}");
    }

    /**
     * Handle the Event "updated" event.
     */
    public function updated(Event $event): void
    {
        Log::info("Event updated: {$event->id}");
    }

    /**
     * Handle the Event "deleted" event.
     */
    public function deleted(Event $event): void
    {
        Log::warning("Event cancelled: {$event->id}");
    }

    /**
     * Handle the Event "restored" event.
     */
    public function restored(Event $event): void
    {
        Log::info("Event restored: {$event->name}");
    }

    /**
     * Handle the Event "force deleted" event.
     */
    public function forceDeleted(Event $event): void
    {
        Log::warning("Organizer permanently deleted: {$event->name}");
    }
}
