<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\TroopResource\Pages\CreateTroop;
use App\Filament\Resources\TroopResource\Pages\EditTroop;
use App\Filament\Resources\TroopResource\Pages\ListTroops;
use App\Models\Troop;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\LocaleSwitcher;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput as TextInputWithCounter;


class TroopResource extends Resource
{
    use Translatable;

    protected static ?string $model = Troop::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-badge';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('created_date')
                    ->required(),
                Fieldset::make('Coordinates')->schema([
                    TextInputWithCounter::make('lat')
                        ->numeric()
                        ->characterLimit(5)
                        ->required(),
                    TextInputWithCounter::make('lng')
                        ->numeric()
                        ->characterLimit(5)
                        ->required(),
                ]),
                CuratorPicker::make('featured_image_id')
                    ->relationship('featuredImage', 'id')
                    ->directory('media/troops')
                    ->columnSpanFull()
                    ->required(),
                TinyEditor::make('description')
                    ->profile('default')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('created_date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->headerActions([
                LocaleSwitcher::make(),
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
            'index'  => ListTroops::route('/'),
            'create' => CreateTroop::route('/create'),
            'edit'   => EditTroop::route('/{record}/edit'),
        ];
    }
}
