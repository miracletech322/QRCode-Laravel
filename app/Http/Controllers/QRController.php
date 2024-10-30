<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QRCode;
use SimpleSoftwareIO\QrCode\Facades\QrCode as SimpleQrCode;

class QRController extends Controller
{
    public function createCode(Request $request)
    {
        $uuid = $request->uuid;
        $title = $request->title;
        $company = $request->company;
        $target = $request->target;

        $model = new QRCode;
        $model->uuid = $uuid;
        $model->title = $title;
        $model->company = $company;
        $model->target = $target;
        $model->save();

        return redirect("qrcode/$uuid");
    }

    public function deleteCode(Request $request)
    {
        QRCode::where('id', $request->id)->delete();
        return redirect("admin/qrcode/overview");
    }

    public function showDetail($uuid)
    {
        $qrCode = SimpleQrCode::size(200)->color(0, 0, 0)->backgroundColor(255, 255, 255)->generate($uuid);
        return view("detail", ['data' => QRCode::where('uuid', $uuid)->get(), 'qrCode' => $qrCode]);
    }
}
