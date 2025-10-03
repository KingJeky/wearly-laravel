<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                 FileUpload::make('image')
                        ->label('Category Image')
                        ->image()                           // pastikan hanya gambar
                        ->imageEditor()                     // bisa crop/resize langsung di panel
                        ->directory('categories')           // simpan ke storage/app/public/categories
                        ->preserveFilenames()               // pakai nama file asli (optional)
                        ->maxSize(2048)                     // maksimal 2MB
                        ->visibility('public')              // simpan ke public agar bisa diakses
                        ->columnSpanFull(),
            ]);
    }
}
