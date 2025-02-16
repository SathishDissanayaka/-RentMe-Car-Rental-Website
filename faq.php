<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frequently Asked Questions</title>
  <link rel="stylesheet" href="styles.css"> 
  <style>
    .answer {
      display: none;
      overflow: hidden;
      transition: max-height 0.3s ease-out; 
      max-height: 0; 
    }

    .answer.active {
      display: block;
      max-height: 1000px;
    }

    .faq{
      
      margin-top: 10px;
      height: 60px;;
      margin-left: 170px;
      margin-right: 170px;
      height: 70px;
      border-radius: 30px;
      border-color: blue;
      border-width: 2px;
      border-style: solid;

    }
    .faq .question{
      margin-left: 30px;
      margin-top: 20px;
      position: relative;
    }
    .titile-p{
      text-align: center;
    }
    h2{
      font-size:50px;
    }
  </style>
</head>
<body>
  <nav>
        <div class="container">
            <div class="brand">Rent Me</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="reserve.php">Reservations</a></li>
                <li><a href="catalog.php">Catalog</a></li>
                <li><a href="contactUs.php">Contact</a></li>
            </ul>
        </div>
    </nav>

  <div class="container content">
    <h2>Frequently Asked Questions</h2>
    <p class="titile-p">How can we help you? </p>
    <p class="titile-p">Please check out the list below for frequently asked questions.If you are unable to find the answers to your question, feel free to reach out to us! We look forward to assisting you.</p>
    <div class="faq1">
      <div class="faq">
        <h3 class="question">How can I rent a car?</h3>
        <p class="answer">Visit our website or app, select pickup/drop-off locations, choose dates/times, browse cars, and reserve.</p>
      </div>
      <div class="faq">
        <h3 class="question">What documents do I need to rent a car?</h3>
        <p class="answer">You'll need a valid driver's license, a credit card, and sometimes additional ID.</p>
      </div>
      <div class="faq">
        <h3 class="question">Can I rent a car if I'm under 25 years old?</h3>
        <p class="answer">Some companies allow it with surcharges or conditions.</p>
      </div>
      <div class="faq">
        <h3 class="question">What types of insurance options are available for car rentals?</h3>
        <p class="answer">Options include Collision Damage Waiver, Liability Insurance, and more.</p>
      </div>
      <div class="faq">
        <h3 class="question">Can I modify or cancel my reservation?</h3>
        <p class="answer">Yes, usually online or by contacting customer service.</p>
      </div>
      <div class="faq">
        <h3 class="question"> What happens if I return the car late?</h3>
        <p class="answer">Additional charges may apply, notify if you'll be late.</p>
      </div>
      <div class="faq">
        <h3 class="question">  Are there any restrictions on where I can take the rental car?</h3>
        <p class="answer"> Review rental agreement for border crossings, road restrictions, and permissions.</p>
      </div>
    
    </div>
  </div>

  <footer>
    <div class="container footer-content">
      <ul class="footer-links">
        <li><a href="privacy_policy.php">Privacy Policy</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
      </ul>
      <p>© 2024. All rights reserved. <b> Rent Me Car </b>rentals </p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const questions = document.querySelectorAll('.question');
      questions.forEach(question => {
        question.addEventListener('click', function() {
          const answer = this.nextElementSibling;
          answer.classList.toggle('active'); // Toggle the 'active' class
        });
      });
    });
  </script>
</body>
</html>
