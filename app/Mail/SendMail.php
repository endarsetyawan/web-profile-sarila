<?php

namespace App\Mail;
use App\Models\Kontak;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data= $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $table = Kontak::all();
        //$details = [
        //    'title' => 'Mail from Surfside Media',
        //    'body'  => 'This is for testing'
        //];
        return $this->from('finggaaaaaaaaa@gmail.com')->subject($this->data['subjek'])->view('template_email')->with('data', $this->data);
    }
}
