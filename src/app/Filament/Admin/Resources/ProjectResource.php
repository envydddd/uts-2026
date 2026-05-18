<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Filament\Admin\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
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

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul_project')
                ->label('Judul Project')
                ->required(),

            Textarea::make('deskripsi')
                ->label('Deskripsi Project')
                ->rows(3),

            Textarea::make('latar_belakang')
                ->label('Latar Belakang')
                ->rows(5),

            Textarea::make('fitur_utama')
                ->label('Fitur Utama')
                ->rows(5),

            TextInput::make('teknologi')
                ->label('Teknologi yang Digunakan')
                ->placeholder('Laravel, Filament, Livewire, MariaDB, Docker'),

            FileUpload::make('gambar_erd')
                ->label('Gambar ERD')
                ->image()
                ->directory('projects/erd'),

            FileUpload::make('gambar_flowchart')
                ->label('Gambar Flowchart')
                ->image()
                ->directory('projects/flowchart'),

            TextInput::make('link_laporan')
                ->label('Link Laporan')
                ->url()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_project')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link_laporan')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
