<?php

namespace App\Filament\Resources\PurchaseResource\Pages;

use App\Filament\Resources\PurchaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListPurchases extends ListRecords
{
    protected static string $resource = PurchaseResource::class;

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
