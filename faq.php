<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Horizon FAQ</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .faq-item {
      border: 1px solid #ccc;
      margin-bottom: 10px;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }

    .faq-item:hover {
      background-color: #f9f9f9;
    }

    .faq-question {
      font-weight: bold;
    }

    .faq-answer {
      display: none;
    }

    .active .faq-answer {
      display: block;
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      .faq-item {
        padding: 15px;
      }
    }
  </style>
</head>
<body>
  <h1>Project Horizon FAQ</h1>
  
  <div class="faq-item">
    <h3 class="faq-question">1. What is Project Horizon?</h3>
    <p class="faq-answer">
      Project Horizon is a transformative platform that empowers individuals who have been forced to leave their homes due to conflict and environmental disasters. It provides essential tools for language learning, job matching, and community connections, helping displaced individuals find stability and independence in new communities.
    </p>
  </div>

  <div class="faq-item">
    <h3 class="faq-question">2. Who can use Project Horizon?</h3>
    <p class="faq-answer">
      Project Horizon is designed for anyone who has been displaced from their home due to conflict or environmental disasters and is seeking support in starting anew in unfamiliar communities or countries.
    </p>
  </div>

  <!-- Add more FAQ items here -->

  <script>
    const faqItems = document.querySelectorAll(".faq-item");

    function toggleFaqAnswer() {
      this.classList.toggle("active");
    }

    faqItems.forEach(item => item.addEventListener("click", toggleFaqAnswer));
  </script>
</body>
</html>
