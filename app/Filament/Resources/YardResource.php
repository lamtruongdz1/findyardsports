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

class YardResource extends Resource
{
    protected static ?string $model = Yard::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_districts')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('img')
                    ->required(),
                Forms\Components\TextInput::make('view')
                    ->required(),
                Forms\Components\TextInput::make('time_open')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('time_close')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_booking')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('address')
                    ->required(),
                Forms\Components\Textarea::make('description'),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_districts'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('img'),
                Tables\Columns\TextColumn::make('view'),
                Tables\Columns\TextColumn::make('time_open'),
                Tables\Columns\TextColumn::make('time_close'),
                Tables\Columns\TextColumn::make('total_booking'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\BooleanColumn::make('status'),
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
            'index' => Pages\ListYards::route('/'),
            'create' => Pages\CreateYard::route('/create'),
            'edit' => Pages\EditYard::route('/{record}/edit'),
        ];
    }
}
