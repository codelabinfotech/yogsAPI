<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Days;

class DaysTable extends DataTableComponent
{
    protected $model = Days::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Days", "days")
                ->sortable()
                ->searchable(),
            Column::make("Action", "id")
                ->view('category.action')
        ];
    }
}
