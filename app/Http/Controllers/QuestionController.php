<?php
// Include necessary files for the AnswerModel and AnswerView

use App\Models\Answer;
use Illuminate\Routing\Controller;

require_once 'Answer.php';
//require_once 'AnswerView.php';

// Assuming a base Controller class exists
class QuestionController extends Controller
{
    private $answerModel;
    private $answerView;

    // Constructor
    public function __construct()
    {
        parent::__construct(); // Call the parent constructor if needed
        $this-> answerModel = new Answer();
        //$this->answerModel = new Answer();
       // $this->answerView = new AnswerView();
    }

    // Main method to handle different actions
    public function handleRequest()
    {
        // Check the action parameter in the requests
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'listAnswers':
                    $this->listAnswers();
                    break;
                case 'viewAnswer':
                    $this->viewAnswer($_GET['id']);
                    break;
                case 'createAnswer':
                    $this->createAnswer();
                    break;
                case 'deleteAnswer':
                    $this->deleteAnswer($_GET['id']);
                    break;
                default:
                    $this->showError("Action not recognized.");
            }
        } else {
            $this->listAnswers(); // Default action if no action parameter is present
        }
    }

    // List all answers
    private function listAnswers()
    {$answers = $this->answerModel->getAllAnswers();
        $this->answerView->render('answer_list', ['answers' => $answers]);
    }

    // View a specific answer by its ID
    private function viewAnswer($id)
    {
        $answer = $this->answerModel->getAnswerById($id);
        if ($answer) {
            $this->answerView->render('answer_detail', ['answer' => $answer]);
        } else {
            $this->showError("Answer not found.");
        }
    }

    // Create a new answer
    private function createAnswer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $text = $_POST['text'] ?? '';
            $questionId = $_POST['question_id'] ?? 0;

            if ($this->answerModel->addAnswer($text, $questionId)) {
                $this->listAnswers(); // Redirect to the list of answers
            } else {
                $this->showError("Error creating answer.");
            }
        } else {
            $this->answerView->render('answer_form');
        }
    }

    // Delete an answer by its ID
    private function deleteAnswer($id)
    {
        if ($this->answerModel->deleteAnswer($id)) {
            $this->listAnswers(); // Redirect to the list of answers
        } else {
            $this->showError("Error deleting answer.");
        }
    }

    // Display an error message
    private function showError($message)
    {
        $this->answerView->render('error', ['message' => $message]);
    }
}

// Create an instance of the controller and handle the request
$controller = new QuestionController();
$controller->handleRequest();
