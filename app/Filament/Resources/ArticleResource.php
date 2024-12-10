<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Tables\Table;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\Textarea::make('content')->required(),
                Forms\Components\TextInput::make('author')->required(),

                // Image Upload Field
                FileUpload::make('image')
                    ->image() // Ensures only images can be uploaded
                    ->disk('public') // Optionally specify the disk to store the image
                    ->directory('articles') // Store the image in the "articles" directory
                    ->required(), // Make it optional or required
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('author'),

                // Add a column to display the image
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public') // Specify the disk if necessary
                    ->sortable(),
            ])
            ->filters([]);
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}