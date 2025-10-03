<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Pilih kategori dari tabel categories
                
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->unique(table: 'products', column: 'slug')
                    ->disabled()
                    ->dehydrated(),

                    Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name') // pakai relasi di model Product
                    ->searchable()
                    ->preload()
                    ->required(),
                    

                FileUpload::make('image')
                    ->label('Product Image')
                    ->image()
                    ->imageEditor()
                    ->directory('products')
                    ->preserveFilenames()
                    ->maxSize(2048)
                    ->visibility('public')
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->columnSpanFull(),

               TextInput::make('price')
                        ->numeric()
                        ->required()
                        ->prefix('RP') ,   


                Section::make('Product Status')
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                        Toggle::make('is_featured')
                            ->label('Featured')
                            ->default(false),

                        Toggle::make('in_stock')
                            ->label('In Stock')
                            ->default(true),

                        Toggle::make('on_sale')
                            ->label('On Sale')
                            ->default(false),
                    ]),
            ]);
    }
}
