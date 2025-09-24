<?php
// app/Filament/Resources/SettingResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use Modules\Settings\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $locales = [
            'en' => 'English',
            'ar' => 'العربية',
            'ar' => 'العربية',
        ];

        return $form
            ->schema([
                // 1) Setting key selector
                Forms\Components\Select::make('key')
                    ->label('Setting Key')
                    ->options([
                        'site_name'     => 'Site Name',
                        'banner_title'  => 'Banner Title',
                        'banner_title2' => 'Banner Dream Title',
                        'banner_subtitle'  => 'Banner Subtitle',
                        'banner_subtitle2' => 'Banner Dream Subtitle',
                        'site_logo'     => 'Site Logo',
                        'site_email'    => 'Site Email',
                        'phone_number'  => 'Phone Number',
                        'address'       => 'Address',
                        'facebook'      => 'Facebook Link',
                        'twitter'       => 'Twitter Link',
                        'linkedin'      => 'LinkedIn Link',
                        'youtube'       => 'YouTube Link',
                        'instagram'     => 'Instagram Link',
                        'footer_text'   => 'Footer Text',
                        'read_more'   => 'Read more',
                        'our_skills'   => 'Our Skills',
                        'ouT_baher_technology'   => 'ABOUT BAHER TECHNOLOGY',
                        'browse_project'   => 'BROWSE OUR AMAZING WORK AS',
                        'frequently_asked_questions'   => 'Frequently Asked Questions',
                        'contact_us'   => 'Contact Us',


                    ])
                    ->required()
                    ->reactive(),

                // 2) Logo upload (only for site_logo)
                Forms\Components\FileUpload::make('logo')
                    ->label('Upload Logo')
                    ->image()
                    ->directory('settings')
                    ->visibility('public')
                    ->maxFiles(1)
                    ->visible(fn (callable $get) => $get('key') === 'site_logo'),

                // 3) Translatable text fields (for all other keys)
                Forms\Components\Tabs::make('Translations')
                    ->visible(fn (callable $get) => $get('key') !== 'site_logo')
                    ->tabs(
                        collect($locales)
                            ->map(fn (string $label, string $locale) =>
                                Forms\Components\Tabs\Tab::make($label)
                                    ->schema([
                                        Forms\Components\Textarea::make("value.{$locale}")
                                            ->label("Value ({$locale})")
                                            ->required(),
                                    ])
                            )
                            ->toArray()
                    ),
            ]);
    }

    // app/Filament/Resources/SettingResource.php

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('key')
                ->searchable(),

            Tables\Columns\ImageColumn::make('logo')
                ->label('Logo')
                ->visible(fn ($record) => $record?->key === 'site_logo'),

            Tables\Columns\TextColumn::make('value')
                ->label('Value')
                ->visible(fn ($record) => $record?->key !== 'site_logo')
                ->limit(50),

            Tables\Columns\TextColumn::make('updated_at')
                ->label('Last Updated')
                ->dateTime(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}


    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit'   => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
