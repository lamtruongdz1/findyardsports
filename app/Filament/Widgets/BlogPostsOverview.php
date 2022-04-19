<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class BlogPostsOverview extends Widget
{
    use HasWidgetShield;

    protected static string $view = 'filament.widgets.blog-posts-overview';
    protected static ?int $sort = 2;


}
