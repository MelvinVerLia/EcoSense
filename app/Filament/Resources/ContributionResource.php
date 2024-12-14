<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContributionResource\Pages;
use App\Filament\Resources\ContributionResource\RelationManagers;
use App\Models\Contribution;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
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
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Forms\Components\Textarea::make('content')
                    ->label('Content')
                    ->required(),
                Forms\Components\TextInput::make('goal')
                    ->label('Goal')
                    ->numeric()
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('contributions')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('content')->label('Content')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('goal')->label('Goal')
                    ->sortable(),

                Tables\Columns\TextColumn::make('total_raised')->label('Total Raised')
                    ->sortable(),

                Tables\Columns\TextColumn::make('current_progress')->label('Current Progress')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')->label('Image')
                    ->disk('public')
                    ->size(50),  
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