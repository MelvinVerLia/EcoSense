<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionHeaderResource\Pages;
use App\Filament\Resources\TransactionHeaderResource\RelationManagers;
use App\Models\TransactionHeader;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionHeaderResource extends Resource
{
    protected static ?string $model = TransactionHeader::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('Transaction ID')->sortable(),
                Tables\Columns\TextColumn::make('customer_id')->label('Customer ID')->sortable(),
                Tables\Columns\TextColumn::make('product_id')->label('Product ID')->sortable(),
                Tables\Columns\TextColumn::make('price')->label('Price')->sortable(),
                Tables\Columns\TextColumn::make('quantity')->label('Quantity')->sortable(),
                Tables\Columns\TextColumn::make('total_price')->label('Total Price')->sortable(),
            ])
            ->filters([
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),  
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
            'index' => Pages\ListTransactionHeaders::route('/'),
            'create' => Pages\CreateTransactionHeader::route('/create'),
            'edit' => Pages\EditTransactionHeader::route('/{record}/edit'),
        ];
    }
}
