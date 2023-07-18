<?php
require_once("partials/header.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['question'])) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $post_data = array(
      "model" => "text-davinci-001",
      "prompt" => $_POST['question'],
      "temperature" => 0.4,
      "max_tokens" => 64,
      "top_p" => 1,
      "frequency_penalty" => 0,
      "presence_penalty" => 0
    );

    $post_data = json_encode($post_data);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer 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'; // Replace with your OpenAI API key
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);

    if (curl_errno($ch)) {
      echo 'Error: ' . curl_error($ch);
    }

    $result = json_decode($result, true);
    curl_close($ch);



    // print_r($result);
  }
}
?>

<!-- <div class="container"> -->
  <div class="row gptbgcolor">
    <div class="col-md-6 offset-md-3">
      <div class="card mb-5 mt-5">
        <div class="card-body">
          <h5 class="card-title">Question:</h5>
          <?php if (isset($_POST['question'])): ?>
            <p class="card-text"><?php echo $_POST['question']; ?></p>
          <?php endif; ?>

          <h5 class="card-title">Answer:</h5>
          <?php if (isset($result['choices'][0]['text'])): ?>
            <p class="card-text"><?php echo $result['choices'][0]['text']; ?></p>
          <?php endif; ?>

          <form name="chatform" method="post">
            <div class="form-group">
              <label for="question">User:</label>
              <textarea class="form-control" rows="3" id="question" name="question"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->

<?php require_once("partials/footer.php"); ?>
