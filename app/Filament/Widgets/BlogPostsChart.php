<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class BlogPostsChart extends LineChartWidget
{
    use HasWidgetShield;

    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}
