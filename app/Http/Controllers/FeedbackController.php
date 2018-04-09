<?php

namespace App\Http\Controllers;

use App\Mail\SiteCall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function call(Request $request)
    {
        try {

            Mail::to(['j153.mobile@yandex.ru'])->send(new SiteCall($request->post()));

        } catch (\Exception $exception) {

            return response()->json([
                'status' => 'error',
                'exception' => $exception->getMessage(),
                'message' => 'Произошла ошибка, попробуйте еще раз.'
            ]);

        }

        return response()->json(['status' => 'ok', 'message' => 'Ваша заявка принята!']);
    }
}
