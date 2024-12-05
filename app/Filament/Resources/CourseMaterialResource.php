<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseMaterialResource\Pages;
use App\Filament\Resources\CourseMaterialResource\RelationManagers;
use App\Models\CourseMaterial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseMaterialResource extends Resource
{
    protected static ?string $model = CourseMaterial::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Course Materials';

    protected static ?string $navigationGroup = 'Manajemen Course';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('course_id')
                    ->relationship('course', 'title')
                    ->required()
                    ->label('Course'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Title'),
                Forms\Components\Textarea::make('content')
                    ->label('Content'),
                Forms\Components\FileUpload::make('file')
                    ->label('File')
                    ->directory('course_materials') // Path penyimpanan file
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('course.title')
                    ->label('Course')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->limit(50),
                Tables\Columns\TextColumn::make('file')
                    ->label('File')
                    ->url(fn($record) => asset('storage/' . $record->file)),
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
            'index' => Pages\ListCourseMaterials::route('/'),
            'create' => Pages\CreateCourseMaterial::route('/create'),
            'edit' => Pages\EditCourseMaterial::route('/{record}/edit'),
        ];
    }
}
