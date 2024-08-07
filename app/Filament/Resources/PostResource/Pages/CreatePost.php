<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Services\Events\BlogPublished;
use App\Services\Jobs\PostScheduleJob;
use App\Filament\Resources\PostResource;
use App\Filament\Resources\SeoDetailResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function afterCreate(): void
    {
        if ($this->record->isScheduled()) {
            $now = Carbon::now();
            $scheduledFor = Carbon::parse($this->record->scheduled_for);
            PostScheduleJob::dispatch($this->record)
                ->delay($now->diffInSeconds($scheduledFor));
        }

        $this->record->admin_id = auth()->id();
        $this->record->save();

    }

}
