<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YardResource\Pages;
use App\Filament\Resources\YardResource\RelationManagers;
use App\Models\Yard;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Str;

class YardResource extends Resource
{
    protected static ?string $model = Yard::class;
    protected static ?string $slug = 'pages/san';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-bookmark-alt';
    protected static ?int $navigationSort = 0;




    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\BelongsToSelect::make('id_districts')
                    ->relationship('district', 'name')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required()
                    ->unique(Yard::class, 'slug', fn ($record) => $record),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                    ->required(),
                Forms\Components\FileUpload::make('img')
                    ->directory('yard-images')
                    ->enableReordering(),
                Forms\Components\TextInput::make('view')
                    ->numeric()
                    ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                    ->required(),
                Forms\Components\TimePicker::make('time_open')
                    ->withoutSeconds()
                    ->default(now())
                    ->required(),
                Forms\Components\TimePicker::make('time_close')
                    ->withoutSeconds()
                    ->default(now())

                    ->required(),
                Forms\Components\TextInput::make('total_booking')
                    ->disabled()
                    ->required()
                    ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                    ->default(0),
                Forms\Components\Toggle::make('status')
                    ->helperText('This product will be hidden from all sales channels.')
                    ->default(true)
                    ->required(),
                Forms\Components\MarkdownEditor::make('address')
                    ->disableAllToolbarButtons()
                    ->enableToolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                    ])

                    ->required(),
                Forms\Components\MarkdownEditor::make('description')
                    ->disableToolbarButtons([

                        'codeBlock',
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_districts')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('price')->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('img'),
                Tables\Columns\TextColumn::make('view')->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time_open')->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time_close')->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_booking')->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\BooleanColumn::make('status')->searchable()
                    ->sortable(),

            ])
            ->filters([]);
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
            'index' => Pages\ListYards::route('/'),
            'create' => Pages\CreateYard::route('/create'),
            'edit' => Pages\EditYard::route('/{record}/edit'),
        ];
    }
}
