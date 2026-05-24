<?php

namespace App\Filament\Admin\Resources\HomeProfileResource\Pages;

use App\Filament\Admin\Resources\HomeProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeProfile extends CreateRecord
{
    protected static string $resource = HomeProfileResource::class;
}
