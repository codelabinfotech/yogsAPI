<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Wallpaper;

class WallpaperTable extends DataTableComponent
{
    protected $model = Wallpaper::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Title", "title")
                ->sortable(),
            Column::make("Description", "description")
                ->sortable(),
            Column::make("Image", "image")
                ->sortable(),
            Column::make("Action", "id")
                ->view('wallpaper.action'),
        ];
    }
}
