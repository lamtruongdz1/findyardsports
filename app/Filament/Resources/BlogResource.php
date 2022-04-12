<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

use Illuminate\Support\Str;



class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $slug = 'blog/posts';
    protected static ?string $recordTitleAttribute = 'title';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 0;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('source')
                    ->maxLength(150),
                Forms\Components\DateTimePicker::make('time')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required()
                    ->unique(Blog::class, 'slug', fn ($record) => $record),
                Forms\Components\MarkdownEditor::make('description')->columnSpan([
                    'sm' => 2,
                ])
                    ->required(),
                    SpatieMediaLibraryFileUpload::make('images')
                                ->collection('product-images')
                                ->multiple()
                                ->minFiles(1)
                                ->maxFiles(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('source'),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('images'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
