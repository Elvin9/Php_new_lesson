<?php
$firstname = $lastname = $email = $phone = $subject = $message = "";
$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(empty($_POST['firstname'])){
    $firstnameErr = "Write your name!";
  }else {
    $firstname = $_POST['firstname'];
    if(!preg_match("/^[a-zA-Z-' ]*$/", $firstname)){
      $firstnameErr = "You can write with only letters and empty space!";
    }
  }
  if(empty($_POST['email'])){
    $emailErr = "Write your email adress!";
  } else{
    $email = $_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $emailErr = "Please, write your email correctly";
    }
  }
    
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us — Super Animated Form</title>
  <style>
    /* Super colorful, elegant, and animated contact form */
    :root {
      --bg-gradient: linear-gradient(135deg, #7e22ce, #2563eb, #0ea5e9);
      --card-bg: #ffffff;
      --text-dark: #0f172a;
      --text-muted: #64748b;
      --accent: #6366f1;
      --accent-hover: #4f46e5;
      --radius: 16px;
      --shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
      font-family: 'Poppins', system-ui, sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background: var(--bg-gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      color: var(--text-dark);
    }

    .card {
      background: var(--card-bg);
      padding: 48px 40px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      width: 100%;
      max-width: 800px;
      opacity: 0;
      transform: translateY(50px);
      animation: slideIn 0.9s ease forwards;
    }

    @keyframes slideIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      font-size: 32px;
      text-align: center;
      margin: 0 0 10px;
      background: linear-gradient(90deg, #a855f7, #0ea5e9);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    p.lead {
      text-align: center;
      color: var(--text-muted);
      margin-bottom: 30px;
      font-size: 15px;
    }

    form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 18px;
      animation: fadeIn 1s ease 0.4s both;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(15px)}
      to {opacity: 1; transform: translateY(0)}
    }

    label {
      font-size: 14px;
      color: var(--text-muted);
      display: block;
      margin-bottom: 6px;
    }

    .full { grid-column: 1 / -1; }

    input[type="text"], input[type="email"], input[type="tel"], textarea {
      width: 100%;
      padding: 12px 14px;
      border: 1.5px solid #e2e8f0;
      border-radius: 10px;
      font-size: 15px;
      transition: all 0.3s ease;
      background-color: #f8fafc;
    }

    input:focus, textarea:focus {
      border-color: var(--accent);
      box-shadow: 0 0 10px rgba(99, 102, 241, 0.4);
      transform: scale(1.02);
      background-color: #fff;
      outline: none;
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    .actions {
      grid-column: 1 / -1;
      display: flex;
      justify-content: flex-end;
      gap: 12px;
      margin-top: 10px;
    }

    button {
      border: none;
      padding: 12px 24px;
      border-radius: 10px;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button[type="submit"] {
      background: var(--accent);
      color: white;
      box-shadow: 0 6px 18px rgba(99, 102, 241, 0.3);
    }

    button[type="submit"]:hover {
      background: var(--accent-hover);
      transform: translateY(-2px);
    }

    .secondary {
      background: transparent;
      color: var(--text-muted);
      border: 1.5px solid #e2e8f0;
    }

    .secondary:hover {
      border-color: var(--accent);
      color: var(--accent);
    }

    .hint {
      grid-column: 1 / -1;
      text-align: center;
      font-size: 13px;
      color: var(--text-muted);
      margin-top: 4px;
    }

    @media (max-width: 640px) {
      form { grid-template-columns: 1fr; }
      .actions { flex-direction: column-reverse; align-items: stretch; }
      button { width: 100%; }
    }

    /* Floating animated circles */
    .bubble {
      position: absolute;
      bottom: -150px;
      background: rgba(255,255,255,0.3);
      border-radius: 50%;
      animation: rise 22s infinite ease-in;
    }

    @keyframes rise {
      from { transform: translateY(0) scale(1); opacity: 0.6; }
      to { transform: translateY(-120vh) scale(1.4); opacity: 0; }
    }
  </style>
</head>
<body>
  <!-- Animated floating bubbles -->
  <div class="bubble" style="width:60px;height:60px;left:15%;animation-delay:1s"></div>
  <div class="bubble" style="width:100px;height:100px;left:45%;animation-delay:4s"></div>
  <div class="bubble" style="width:50px;height:50px;left:75%;animation-delay:6s"></div>

  <main class="card" role="main">
    <h1>Contact Us</h1>
    <p class="lead">We’re excited to connect with you! Please fill out your details below and we’ll respond soon.</p>

    <form action="" method="POST" novalidate>
      <div>
        <label for="firstname">First Name</label>
        <input id="firstname" name="firstname" type="text" placeholder="John" value="<?= $firstname ?>" />
        <span style="color : red"><?= $firstnameErr ?></span> <br>
      </div>

      <div>
        <label for="lastname">Last Name</label>
        <input id="lastname" name="lastname" type="text" placeholder="Doe"  />
        
      </div>

      <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="you@example.com" value="<?= $email ?>" />
        <span style="color: red"><?= $emailErr ?></span> <br>
      </div>

      <div>
        <label for="phone">Phone Number</label>
        <input id="phone" name="phone" type="tel" placeholder="+998 90 123 45 67" pattern="[+0-9 ]{7,20}" required />
      </div>

      <div class="full">
        <label for="subject">Subject</label>
        <input id="subject" name="subject" type="text" placeholder="What’s this about?" />
      </div>

      <div class="full">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
      </div>

      <div class="hint">Your details are safe — we’ll never share them with anyone.</div>

      <div class="actions">
        <button type="submit">Send Message 🚀</button>
        <button type="reset" class="secondary">Clear</button>
      </div>
    </form>
  </main>
</body>
</html>
