<?php
class Faq extends ACFModule {
  public function template() {
    return 'faq-template.php';
  }

  public function setQuestions($faq) {
    $this->question = $question;
  }

  public function getQuestions() {
    return $this->question;
  }
}

 ?>
