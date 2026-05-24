<?php

namespace App\Filament\Admin\Resources\HomeProfileResource\Pages;

use App\Filament\Admin\Resources\HomeProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeProfile extends EditRecord
{
    protected static string $resource = HomeProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
