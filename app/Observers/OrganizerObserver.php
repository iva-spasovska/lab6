<?php

namespace App\Observers;

use App\Models\Organizer;
use Illuminate\Support\Facades\Log;

class OrganizerObserver
{
    /**
     * Handle the Organizer "created" event.
     */
    public function created(Organizer $organizer): void
    {
        Log::info("Organizer created: {$organizer->full_name}");
    }

    /**
     * Handle the Organizer "updated" event.
     */
    public function updated(Organizer $organizer): void
    {
        Log::info("Organizer updated: {$organizer->id}");
    }

    /**
     * Handle the Organizer "deleted" event.
     */
    public function deleted(Organizer $organizer): void
    {
        Log::warning("Organizer deleted: {$organizer->id}");
    }

    /**
     * Handle the Organizer "restored" event.
     */
    public function restored(Organizer $organizer): void
    {
        Log::info("Organizer restored: {$organizer->full_name}");
    }

    /**
     * Handle the Organizer "force deleted" event.
     */
    public function forceDeleted(Organizer $organizer): void
    {
        Log::warning("Organizer permanently deleted: {$organizer->full_name}");
    }
}
