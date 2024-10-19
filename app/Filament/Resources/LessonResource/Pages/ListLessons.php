<?php

namespace App\Filament\Resources\LessonResource\Pages;

use App\Filament\Resources\LessonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\CourseResource;
use App\Filament\Traits\HasParentResource;

class ListLessons extends ListRecords
{

    use HasParentResource;

    protected static string $resource = LessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->url(
                fn (): string => static::getParentResource()::getUrl('lessons.create', [
                    'parent' => $this->parent,
                ])
            ),
        ];
    }
}
