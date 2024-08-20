<?php

namespace App\Filament\Resources\MenuResource\RelationManagers;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Page;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\Concerns\Translatable;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MenuItemsRelationManager extends RelationManager
{
    use Translatable;

    protected static string $relationship = 'items';

    public function isReadOnly(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name.en')
                    ->afterStateHydrated(function (Set $set) use ($form) {
                        $model = $form->model;
                        if ($model instanceof MenuItem) {
                            $name = json_decode($form->model->getAttributes()['name']);

                            $set('name.en', $name->en ?? '');
                            $set('name.ar', $name->ar ?? '');
                        }
                    })
                    ->label('Name [en]')
                    ->required(),
                TextInput::make('name.ar')
                    ->label('Name [ar]')
                    ->required(),
                Select::make('type')
                    ->options([
                        'dropdown'    => 'Dropdown',
                        'custom_link' => 'Custom Link',
                        'page'        => 'Page',
                        'category'    => 'Category',
                    ])
                    ->reactive()
                    ->afterStateUpdated(fn($state, callable $set) => $set('url', null)),
                Select::make('value')
                    ->options(function (callable $get) {
                        $type = $get('type');

                        if ($type === 'page') {
                            return Page::pluck('title', 'slug');
                        }

                        if ($type === 'category') {
                            return Category::pluck('name', 'slug');
                        }

                        if ($type === 'dropdown') {
                            return null;
                        }

                        return [];
                    })
                    ->searchable(),
                Select::make('parent_id')
                    ->label('Parent Item')
                    ->options(function () use ($form) {
                        $menuId = $form->getLivewire()->ownerRecord->id;
                        $menuItemId = $form->getRecord()->id ?? 0;
                        if ($form->getLivewire()->ownerRecord->id) {
                            return MenuItem::getParentItemsForMenu($menuId)->where('id', '!=', $menuItemId)->pluck(
                                'name',
                                'id'
                            );
                        }

                        return [];
                    })
                    ->disabled(function (Get $get) {
                        return $get('type') === 'dropdown';
                    })
                    ->nullable(),
                TextInput::make('url')
                    ->disabled(function (Get $get) {
                        return $get('type') !== 'custom_link';
                    })
                    ->required(function (Get $get) {
                        return $get('type') === 'custom_link';
                    }),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('parent.name'),
                TextColumn::make('type'),
            ])
            ->reorderable('order')
            ->defaultSort('order')
            ->filters([
                // Add filters if necessary
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        if ($data['type'] === 'category') {
                            $data['url'] = route('categories.show', $data['value']);
                        }

                        if ($data['type'] === 'page') {
                            $data['url'] = route('page.show', $data['value']);
                        }

                        return $data;
                    }),
                Tables\Actions\LocaleSwitcher::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        if ($data['type'] === 'category') {
                            $data['url'] = route('categories.show', $data['value']);
                        }

                        if ($data['type'] === 'page') {
                            $data['url'] = route('page.show', $data['value']);
                        }

                        return $data;
                    })->slideOver(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
