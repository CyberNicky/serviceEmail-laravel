<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
	/**
	 * Ship the given order.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)

	{
		$emails = DB::table('tb_emails_envio')
			->select(
				'ID_EMAILS_ENVIO',
				'EMAIL_DESTINO',
				'CORPO_EMAIL',
				'IND_ENVIADO',
				'ASSUNTO'
			)
			->where('IND_ENVIADO', 'N')
			->where('ID_EMAILS_ENVIO', '5')
			->get();
		foreach ($emails as $recipient) {
			$recipient->id_emails_envio;
			$recipient->email_destino;
			$recipient->corpo_email;
			$recipient->ind_enviado;
			$recipient->assunto;
			Mail::send([], [], function ($message) use ($recipient) {
				$message->to($recipient->email_destino);
				$message->subject($recipient->assunto);
				$message->html($recipient->corpo_email, 'text/html');
			});
			DB::table('tb_emails_envio')
				->where('id')
				->update(['IND_ENVIADO' => 'S']);
		}
	}
}
