<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail as Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    private $params = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pParams)
    {
        $this->params = $pParams;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try {
            $body = $item->email_template()->where('id', $this->params["template_id"])->first()->toArray()["template_body"];
            $body = str_replace($this->params["vars"], $this->params["values"], $body);
            $record = [];
            $record["template_id"] = $this->params["template_id"];
            $record["to"] = $this->params["to"];
            $record["subject"] = $this->params["subject"];
            $record["body"] = $body;
            $record["add_date"] = date("Y-m-d H:m:s");
            $record["executed"] = 0;
            $EmailQueue = App\Models\EmailQueue::create($record);
        } catch (Exception $e) {

        }
    }
}
