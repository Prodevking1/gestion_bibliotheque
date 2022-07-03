<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Etudiants;

class EmpruntNotificationMail extends Mailable
{
    use Queueable, SerializesModels;
   
    public $details;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($id)

    {
        $etudiant = Etudiants::find($id);

        return $this->subject('Rappel retour livre')->view('notifications.message_emprunt',
        [
            'etudiant' => $etudiant,
            'details' => $this->details,
        ]);
    }
}
