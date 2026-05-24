<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\HomeProfileResource\Pages;
use App\Filament\Admin\Resources\HomeProfileResource\RelationManagers;
use App\Models\HomeProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class HomeProfileResource extends Resource
{
    protected static ?string $model = HomeProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('nama')
                ->label('Nama')
                ->required(),

            TextInput::make('subtitle')
                ->label('Subtitle'),

            Textarea::make('about_me')
                ->label('About Me')
                ->rows(5),

            TextInput::make('admin_info')
                ->label('Info Admin'),

            TextInput::make('keahlian')
                ->label('Keahlian'),

            TextInput::make('project_akhir')
                ->label('Project Akhir'),

            FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->directory('home-profile'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('admin_info')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keahlian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('project_akhir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeProfiles::route('/'),
            'create' => Pages\CreateHomeProfile::route('/create'),
            'edit' => Pages\EditHomeProfile::route('/{record}/edit'),
        ];
    }
}
