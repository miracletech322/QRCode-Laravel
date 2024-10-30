<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Livewire\Component;
use App\Models\QRCode;

class QRCodeOverview extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.qr-code-overview';
    protected static ?string $slug = 'qrcode/overview';
    protected static ?string $navigationLabel = 'QRCode Overview';

    public function getList()
    {
        return QRCode::all();
    }
}
