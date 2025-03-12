<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary helpers and libraries
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->library('session');
        // Include PHPMailer classes
        require_once(APPPATH . 'third_party/PHPMailer/src/Exception.php');
        require_once(APPPATH . 'third_party/PHPMailer/src/PHPMailer.php');
        require_once(APPPATH . 'third_party/PHPMailer/src/SMTP.php');
    }

    public function index() {
        $this->load->view('home');
    }

    public function send_email() {
        // Form validation
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
            exit;
        } else {
            // Get the form data
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $comment = $this->input->post('comment');

            // Send email via PHPMailer
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Set SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'usertestmail87@gmail.com'; // SMTP username
                $mail->Password = 'tvpx ucdm pnsw cqjb'; // Use App Password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('usertestmail87@gmail.com', 'Sivakumarportfolio');
                $mail->addAddress('usertestmail87@gmail.com');

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'New Contact Form Submission';
                $mail->Body = "<h1>Contact Form Submission</h1>
                               <p><strong>Name:</strong> $name</p>
                               <p><strong>Email:</strong> $email</p>
                               <p><strong>Phone:</strong> $phone</p>
                               <p><strong>Comment:</strong> $comment</p>";

                // Enable debugging (optional)
                $mail->SMTPDebug = 0; // Output detailed debugging information

                // Send the email
                if ($mail->send()) {
                    echo json_encode(['status' => 'true', 'message' => 'Email sent successfully']);
                } else {
                    echo json_encode(['status' => 'false', 'message' => $mail->ErrorInfo]);
                }

            } catch (Exception $e) {
                echo json_encode(['status' => 'false', 'message' => $e->getMessage()]);
            }
            exit;
        }
    }
}
