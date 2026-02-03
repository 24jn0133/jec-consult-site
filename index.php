<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>株式会社Jecコンサルティング</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: "Segoe UI", sans-serif; scroll-behavior: smooth; }
    .hero { height: 100vh; background: linear-gradient(135deg, #0d6efd, #6610f2); color: white; display: flex; align-items: center; justify-content: center; text-align: center; }
    .hero h1 { font-size: 3rem; font-weight: bold; }
    .section-title { font-weight: bold; margin-bottom: 30px; }
    .card:hover { transform: translateY(-8px); transition: 0.3s; }
    footer { background-color: #212529; color: white; padding: 20px 0; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Jec Consulting</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">会社概要</a></li>
        <li class="nav-item"><a class="nav-link" href="#service">事業内容</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero">
  <div>
    <h1>未来を切り拓く<br>Jecコンサルティング</h1>
    <p class="mt-3">戦略 × DX × 人材で企業成長を支援</p>
  </div>
</section>

<section id="about" class="container py-5">
  <h2 class="section-title text-center">会社概要</h2>
  <p class="text-center">
    株式会社Jecコンサルティングは、経営戦略、業務改善、DX推進を通じて<br>
    企業の持続的成長をサポートするコンサルティング会社です。
  </p>
</section>

<section id="service" class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center">事業内容</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card p-3 text-center h-100">
          <h5>経営戦略支援</h5>
          <p>企業の課題を分析し、最適な戦略を提案します。</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-center h-100">
          <h5>DXコンサルティング</h5>
          <p>デジタル技術を活用し、業務改革を実現します。</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-center h-100">
          <h5>人材育成</h5>
          <p>組織力向上のための教育・研修を行います。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="container py-5">
  <h2 class="section-title text-center">お問い合わせ</h2>
  <form class="row g-3" action="submit.php" method="post">
    <div class="col-md-6">
      <label class="form-label">お名前</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">メールアドレス</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="col-12">
      <label class="form-label">お問い合わせ内容</label>
      <textarea name="message" class="form-control" rows="5" required></textarea>
    </div>
    <div class="col-12 text-center">
      <button class="btn btn-primary px-5" type="submit">送信</button>
    </div>
  </form>
</section>

<footer class="text-center">
  <p class="mb-0">© 2026 Jec Consulting Co., Ltd.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>