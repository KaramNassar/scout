<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Enums\PostStatus;
use App\Filament\Resources\PostResource\Pages\CreatePost;
use App\Filament\Resources\PostResource\Pages\EditPost;
use App\Filament\Resources\PostResource\Pages\ListPosts;
use App\Filament\Resources\PostResource\Widgets\PostsChart;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Rules\UniqueTranslation;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


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
                Section::make('Blog Details')
                    ->schema([
                        Fieldset::make('Titles')
                            ->schema([
                                Select::make('category_id')
                                    ->preload()
                                    ->createOptionForm(Category::getForm())
                                    ->searchable()
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->columnSpanFull(),

                                Select::make('troop_id')
                                    ->hint('Leave it empty if not associated with a troop.')
                                    ->preload()
                                    ->searchable()
                                    ->relationship('troop', 'name')
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

                        Fieldset::make('Featured Image')
                            ->schema([
                                CuratorPicker::make('featured_image_id')
                                    ->label('')
                                    ->relationship('featuredImage', 'id')
                                    ->directory(function (Get $get) {
                                        return ('media/'.$get('title'));
                                    })
                                    ->columnSpanFull(),
                            ])->columns(1),

                        Fieldset::make('Gallery')
                            ->schema([
                                CuratorPicker::make('gallery')
                                    ->relationship('gallery', 'id')
                                    ->label('')
                                    ->multiple()
                                    ->directory(function (Get $get) {
                                        return ('media/'.$get('title'));
                                    }),
                            ])->columns(1),

                        Fieldset::make('Status')
                            ->schema([

                                ToggleButtons::make('status')
                                    ->live()
                                    ->inline()
                                    ->options(PostStatus::class)
                                    ->required(),
                            ]),
                        Fieldset::make('Featured Post')
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
                    ->searchable()
                    ->limit(20),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(function ($state) {
                        return $state->getColor();
                    }),
                CuratorColumn::make('featured_image_id')
                    ->label('Featured image')
                    ->size(100),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
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
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\Action::make('preview')
                        ->icon('heroicon-s-eye')
                        ->url(function (Post $record) {
                        return route('posts.show', $record->slug);
                    }, true)
                ]),
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
        ];
    }
}
