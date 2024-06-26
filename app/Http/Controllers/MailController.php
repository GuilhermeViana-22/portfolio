<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validação dos dados do formulário (opcional)
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Dados do e-mail
        $details = [
            'title' => $request->subject,
            'body' => $request->message,
            'nome' => $request->nome,
            'email' => $request->email,
        ];

        // Enviar e-mail usando a classe SendMail
        Mail::to('gguicido.viana@gmail.com')->send(new SendMail($details));

        // Redirecionar para uma nova view de confirmação (opcional)
        return redirect()->back()->with('success', 'E-mail enviado com sucesso!');
    }
}
