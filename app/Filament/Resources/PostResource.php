<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Enums\PostStatus;
use App\Filament\Resources\PostResource\Pages\CreatePost;
use App\Filament\Resources\PostResource\Pages\EditPost;
use App\Filament\Resources\PostResource\Pages\ListPosts;
use App\Filament\Resources\PostResource\Pages\ViewPost;
use App\Filament\Resources\PostResource\Widgets\PostsChart;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Rules\UniqueTranslation;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;


class PostResource extends Resource
{
    use Translatable;

    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-minus';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 3;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function getNavigationBadge(): ?string
    {
        return Post::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\Section::make('Blog Details')
                    ->schema([
                        \Filament\Forms\Components\Fieldset::make('Titles')
                            ->schema([
                                Select::make('category_id')
                                    ->preload()
                                    ->createOptionForm(Category::getForm())
                                    ->searchable()
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('title')
                                    ->live(true)
                                    ->rule(
                                        new UniqueTranslation(
                                            'posts',
                                            'title',
                                            $form->getLivewire()->otherLocaleData,
                                            $form->getRecord()?->id
                                        )
                                    )
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Textarea::make('sub_title')
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Select::make('tag_id')
                                    ->multiple()
                                    ->preload()
                                    ->createOptionForm(Tag::getForm())
                                    ->searchable()
                                    ->relationship('tags', 'name')
                                    ->columnSpanFull(),
                            ]),
                        TinyEditor::make('body')
                            ->profile('default')
                            ->required()
                            ->columnSpanFull(),

                        \Filament\Forms\Components\Fieldset::make('Featured Image')
                            ->schema([
                                CuratorPicker::make('featured_image_id')
                                    ->relationship('featuredImage', 'id')
                                    ->directory(function (Get $get) {
                                        return ('media/'.$get('title'));
                                    })
                                    ->columnSpanFull(),
                            ])->columns(1),

                        \Filament\Forms\Components\Fieldset::make('Gallery')
                            ->schema([
                                CuratorPicker::make('gallery')
                                    ->relationship('gallery', 'id')
                                    ->label('')
                                    ->multiple()
                                    ->directory(function (Get $get) {
                                        return ('media/'.$get('title'));
                                    }),
                            ])->columns(1),

                        \Filament\Forms\Components\Fieldset::make('Status')
                            ->schema([

                                ToggleButtons::make('status')
                                    ->live()
                                    ->inline()
                                    ->options(PostStatus::class)
                                    ->required(),
                            ]),
                        \Filament\Forms\Components\Fieldset::make('Featured Post')
                            ->schema([
                                Toggle::make('is_featured')
                            ])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->deferLoading()
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->description(function (Post $record) {
                        return Str::limit($record->sub_title, 40);
                    })
                    ->searchable()
                    ->limit(20),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(function ($state) {
                        return $state->getColor();
                    }),
                Tables\Columns\ImageColumn::make('cover_photo_path')->label('Cover Photo'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])->defaultSort('id', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('user')
                    ->relationship('user', 'username')
                    ->searchable()
                    ->preload()
                    ->multiple(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            Section::make('Post')
                ->icon(function (Post $record) {
                    return $record->is_featured === 1 ? 'heroicon-s-star' : '';
                })
                ->iconColor('warning')
                ->schema([
                    Fieldset::make('General')
                        ->schema([
                            TextEntry::make('title'),
                            TextEntry::make('sub_title'),
                        ]),
                    Fieldset::make('Publish Information')
                        ->schema([
                            TextEntry::make('status')
                                ->badge()->color(function ($state) {
                                    return $state->getColor();
                                }),
                            TextEntry::make('published_at')->visible(function (Post $record) {
                                return $record->status === PostStatus::PUBLISHED;
                            }),
                        ]),
                    Fieldset::make('Description')
                        ->schema([
                            TextEntry::make('body')
                                ->html()
                                ->columnSpanFull(),
                        ]),
                ]),
        ]);
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            ViewPost::class,
            EditPost::class,
        ]);
    }

    public static function getWidgets(): array
    {
        return [
            PostsChart::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'edit'   => EditPost::route('/{record}/edit'),
            'view'   => ViewPost::route('/{record}'),
        ];
    }
}
