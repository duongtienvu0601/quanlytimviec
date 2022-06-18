<?php 
    namespace App\Mail;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    class SignUp extends Mailable
    {
        use Queueable, SerializesModels;
        public $details;
        /**
         * Create a new massage instance
         * 
         * @return void
         */
        public function _construct($details)
        {
            $this -> $details = $details;
        }

         /**
         * Build the mail
         * 
         * @return $this
         */
        public function build()
        {   
            return $this -> subject('Hello')->view('emails.TestMail');
        }
    }    