<?php

namespace App\Mail;

use App\Models\Etudiants;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($id)

    {
        $etudiant = Etudiants::find($id);

        return $this->subject('Statut reservation')->view('notifications.message_reservation',
        [
            'etudiant' => $etudiant,
            'details' => $this->details,
        ]);
    }
}
