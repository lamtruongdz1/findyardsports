<?php

namespace App\Filament\Widgets;

use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Booking;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class LatestOrders extends BaseWidget
{
    use HasWidgetShield;

    protected function getTableQuery(): Builder
    {
        return Booking::query()->latest()->limit(10);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('total_price')
                ->label('Tổng tiền'),
                Tables\Columns\TextColumn::make('total_price')
                ->label('Tổng hóa đơn'),

        ];
    }
}
