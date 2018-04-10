<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Mail\SiteCall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{

    protected $emails;

    /**
     * FeedbackController constructor.
     */
    public function __construct()
    {
        $this->emails = ['j153.mobile@yandex.ru'];
    }


    public function call(Request $request)
    {
        try {

            Mail::to($this->emails)->send(new SiteCall($request->post()));

        } catch (\Exception $exception) {

            return response()->json([
                'status' => 'error',
                'exception' => $exception->getMessage(),
                'message' => 'Произошла ошибка, попробуйте еще раз.'
            ]);

        }

        return response()->json(['status' => 'ok', 'message' => 'Ваша заявка принята!']);
    }

    public function feedback(Request $request)
    {
        try {

            Mail::to($this->emails)->send(new Feedback($request->post()));

        } catch (\Exception $exception) {

            return response()->json([
                'status' => 'error',
                'exception' => $exception->getMessage(),
                'message' => 'Произошла ошибка, попробуйте еще раз.'
            ]);

        }
        return response()->json(['status' => 'ok', 'message' => 'Ваш отзыв успешно отправлен!']);
    }

}
