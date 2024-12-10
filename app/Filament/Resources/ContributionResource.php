<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContributionResource\Pages;
use App\Filament\Resources\ContributionResource\RelationManagers;
use App\Models\Contribution;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContributionResource extends Resource
{
    protected static ?string $model = Contribution::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')->required(),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('goal')->numeric()->required(),
                Forms\Components\TextInput::make('current_amount')->numeric()->required(),
                Forms\Components\TextInput::make('current_progress')
                    ->label('Progress')
                    ->dehydrateStateUsing(function ($state, $record) {
                        // Ensure $record is not null
                        if ($record && isset($record->goal) && $record->goal > 0) {
                            return round(($record->current_amount / $record->goal) * 100) . '%';
                        }
                        return '0%'; 
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->sortable(),
            Tables\Columns\TextColumn::make('goal')->sortable(),
            Tables\Columns\TextColumn::make('current_amount')->sortable(),
            Tables\Columns\TextColumn::make('current_progress')->sortable(),

        ])
        ->filters([
            
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContributions::route('/'),
            'create' => Pages\CreateContribution::route('/create'),
            'edit' => Pages\EditContribution::route('/{record}/edit'),
        ];
    }
}