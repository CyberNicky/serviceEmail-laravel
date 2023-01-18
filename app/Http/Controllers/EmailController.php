<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
 
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
        
 
        // Ship the order...
        Mail::to($request->user())->send(new OrderShipped());
 
        // Mail::to($request->user())
        // ->cc($moreUsers)
        // ->send(new OrderShipped());

        foreach (['nickyalbuquerque2008@gmail.com', 'nickyalbuquerque2008@gmail.com'] as $recipient) {
            dd("teste");
            Mail::to($recipient)->send(new Shipped());
            // Mail::mailer('postmark')
            // ->to($request->user())
            // ->send(new OrderShipped());
            // Mail::to($request->user())
            // ->cc($moreUsers)
            // ->bcc($evenMoreUsers)
            // ->queue(new OrderShipped());
            // Mail::to($request->user())
            // ->cc($moreUsers)
            // ->bcc($evenMoreUsers)
            // ->later(now()->addMinutes(10), new OrderShipped());
            // $message = (new OrderShipped())
            //     ->onConnection('sqs')
            //     ->onQueue('emails');
 
            // Mail::to($request->user())
            // ->cc($moreUsers)
            // ->bcc($evenMoreUsers)
            // ->queue($message);
            // Mail::to($request->user())->send(
            //     (new OrderShipped())->afterCommit()
            // );
            // Mail::to($request->user())->locale('es')->send(
            //     new OrderShipped()
            // );
            
        $environment = App::environment();
        if (App::environment('local')) {
            // The environment is local
        }
         
        if (App::environment(['local', 'staging'])) {
            // The environment is either local OR staging...
        }
    }

    
}
}