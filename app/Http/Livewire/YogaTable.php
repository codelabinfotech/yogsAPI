<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Yoga;

class YogaTable extends DataTableComponent
{
    protected $model = Yoga::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Title", "title")
                ->sortable(),
            Column::make("Image", "image")
                ->sortable(),
            Column::make("Description", "description")
                ->sortable(),
            Column::make("action", "id")
                ->view('yoga.action'),
        ];
    }
}
