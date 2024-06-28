<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Bien;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BienResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BienResource\RelationManagers;
use Filament\Forms\Components\Textarea;

class BienResource extends Resource
{
    protected static ?string $model = Bien::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id'),
                TextInput::make('category_id'),
                TextInput::make('name'),
                TextInput::make('price'),
                Textarea::make('description'),
                TextInput::make('image'),
                TextInput::make('city'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id'),
                TextColumn::make('category_id'),
                TextColumn::make('name'),
                TextColumn::make('description'),
                TextColumn::make('price'),
                TextColumn::make('city'),
                TextColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListBiens::route('/'),
            'create' => Pages\CreateBien::route('/create'),
            'edit' => Pages\EditBien::route('/{record}/edit'),
        ];
    }
}
