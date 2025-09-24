<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Modules\Language\Models\Language;
use Modules\Language\Models\Translation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TranslationResource\Pages;
use App\Filament\Resources\TranslationResource\RelationManagers;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('language_id')
                ->label('Language')
                ->options(Language::where('is_active', true)->pluck('name', 'id'))
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('translation_key')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('value')
                ->label('Translated Text')
                ->rows(3)
                ->columnSpan('full'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('language.name')->label('Language')->searchable(),
            Tables\Columns\TextColumn::make('translation_key')->searchable()->limit(50),
            Tables\Columns\TextColumn::make('value')->limit(50),
            Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('language')
                ->relationship('language', 'name'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
