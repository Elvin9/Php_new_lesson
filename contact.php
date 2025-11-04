<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Data Received</title>
  <style>
    /* 🌈 Reset and base styles */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #0ea5e9, #6366f1);
      color: #0f172a;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      overflow: hidden;
    }

    /* 🎉 Container card */
    .result-card {
      background: #fff;
      border-radius: 16px;
      padding: 40px;
      width: 90%;
      max-width: 520px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
      animation: fadeIn 0.7s ease-out;
      position: relative;
      overflow: hidden;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(25px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      text-align: center;
      font-size: 1.8rem;
      margin-bottom: 20px;
      background: linear-gradient(90deg, #6366f1, #0ea5e9);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .info {
      margin: 12px 0;
      font-size: 15px;
      line-height: 1.5;
      border-left: 4px solid #6366f1;
      padding-left: 10px;
      background: #f8fafc;
      border-radius: 8px;
      padding: 10px 12px;
      transition: 0.3s ease;
    }

    .info:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 12px rgba(99, 102, 241, 0.2);
    }

    span {
      color: #0ea5e9;
      font-weight: 600;
    }

    a {
      display: inline-block;
      margin-top: 25px;
      text-decoration: none;
      background: linear-gradient(90deg, #6366f1, #0ea5e9);
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: 500;
      transition: 0.3s ease;
    }

    a:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
    }

    /* ✨ Floating bubbles animation */
    .bubble {
      position: absolute;
      border-radius: 50%;
      background: rgba(99, 102, 241, 0.2);
      animation: float 10s infinite ease-in-out;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }
  </style>
</head>
<body>
  <div class="result-card">
    <!-- floating decoration -->
    <div class="bubble" style="width:80px;height:80px;top:-20px;left:-20px;"></div>
    <div class="bubble" style="width:50px;height:50px;bottom:10px;right:20px;"></div>

    <h1>Form Information Received ✅</h1>

    <div class="info"><strong>First Name:</strong> <span><?= htmlspecialchars($firstname) ?></span></div>
    <div class="info"><strong>Last Name:</strong> <span><?= htmlspecialchars($lastname) ?></span></div>
    <div class="info"><strong>Email:</strong> <span><?= htmlspecialchars($email) ?></span></div>
    <div class="info"><strong>Phone:</strong> <span><?= htmlspecialchars($phone) ?></span></div>
    <div class="info"><strong>Message:</strong><br><span><?= nl2br(htmlspecialchars($message)) ?></span></div>

    <a href="form.php">← Back to form</a>
  </div>
</body>
</html>
