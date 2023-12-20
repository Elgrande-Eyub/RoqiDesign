<?php

namespace App\Filament\Resources\StockControlResource\Pages;

use App\Filament\Resources\StockControlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab ;
class ListStockControls extends ListRecords
{
    protected static string $resource = StockControlResource::class;

    public function getTabs():array {
        return[
            'all' => Tab::make('Toutes '),
            'archived' => Tab::make('Archivé')->modifyQueryUsing(function($query){
                return $query->onlyTrashed();
            })
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
