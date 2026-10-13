<?php
$pageTitle = 'Diamond Fitness — Өзіңнің мықты нұсқаң';
$currentPage = 'home';
?>
<!doctype html>
<html lang="kk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Diamond Fitness — жаттығу, күш және жаңа әдеттерге арналған фитнес-клуб.">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="index.php" aria-label="Diamond Fitness басты бет">
    <span class="brand-mark">D<span>◆</span></span>
    <span class="brand-name">DIAMOND <small>FITNESS CLUB</small></span>
  </a>
  <button class="menu-toggle" type="button" aria-label="Мәзірді ашу" aria-expanded="false">☰</button>
  <nav class="nav" aria-label="Негізгі мәзір">
    <a class="active" href="index.php">Басты бет</a>
    <a href="programs.php">Бағдарламалар</a>
    <a href="contact.php">Байланыс</a>
  </nav>
  <a class="nav-cta" href="contact.php">Жаттығуды бастау <span>↗</span></a>
</header>
<main>
  <section class="hero">
    <div class="hero-copy">
      <div class="eyebrow"><span class="eyebrow-dot"></span> YOUR POWER. YOUR PACE.</div>
      <h1>ӨЗІҢНІҢ<br><em>МЫҚТЫ</em><br>НҰСҚАҢ БОЛ.</h1>
      <p class="hero-text">Күшіңді дамыт. Энергияңды арттыр. Әр жаттығуда өзіңе тағы бір қадам жақында.</p>
      <div class="hero-actions">
        <a class="button button-primary" href="contact.php">Алғашқы қадам <span>→</span></a>
        <a class="text-link" href="programs.php">Бағдарламаларды қарау <span>↗</span></a>
      </div>
      <div class="hero-stats">
        <div><strong>24/7</strong><span>еркін жаттығу</span></div>
        <div><strong>12+</strong><span>жаттығу бағыты</span></div>
        <div><strong>100%</strong><span>сенің прогресің</span></div>
      </div>
    </div>
    <div class="hero-visual" aria-label="Фитнес жаттығуына арналған графикалық композиция">
      <div class="visual-ring ring-one"></div><div class="visual-ring ring-two"></div>
      <div class="visual-label label-top">NO EXCUSES<br><b>JUST PROGRESS</b></div>
      <div class="dumbbell"><div class="weight weight-left"></div><div class="bar"></div><div class="weight weight-right"></div></div>
      <div class="visual-number">01<span>/ YOUR JOURNEY</span></div>
      <div class="visual-sticker">TRAIN<br>HARD<br><b>STAY SHARP.</b></div>
      <div class="visual-bottom"><span class="pulse"></span> СЕНІҢ УАҚЫТЫҢ — ҚАЗІР</div>
    </div>
  </section>
  <section class="section intro-section">
    <div class="section-heading">
      <div><div class="eyebrow">DIAMOND EXPERIENCE</div><h2>Мақсатың айқын.<br><em>Жоспарың дайын.</em></h2></div>
      <p>Diamond Fitness — өз қарқыныңмен дамуға, жақсы әдет қалыптастыруға және нәтижеге жүйелі түрде жетуге арналған кеңістік.</p>
    </div>
    <div class="feature-grid">
      <article class="feature-card"><span class="feature-icon">01</span><h3>Күш жаттығулары</h3><p>Негізгі бұлшықет топтарына арналған жаттығулар мен еркін салмақ аймағы.</p><a href="programs.php">Толығырақ <span>→</span></a></article>
      <article class="feature-card"><span class="feature-icon">02</span><h3>Кардио және төзімділік</h3><p>Төзімділікті арттыруға және күнделікті белсенділікті қолдауға көмектеседі.</p><a href="programs.php">Толығырақ <span>→</span></a></article>
      <article class="feature-card"><span class="feature-icon">03</span><h3>Жеке жоспар</h3><p>Мақсатыңа сай бағыт таңдап, жаттығу кестесін ретте.</p><a href="contact.php">Кеңес алу <span>→</span></a></article>
    </div>
  </section>
  <section class="quote-band">
    <div class="quote-mark">✦</div>
    <blockquote>Күш бір күнде келмейді. Ол күн сайынғы таңдаудан басталады.</blockquote>
    <p>DIAMOND FITNESS CLUB · FIND YOUR EDGE</p>
  </section>
  <section class="closing-cta">
    <div><div class="eyebrow">READY WHEN YOU ARE</div><h2>Бүгін баста.<br><em>Өзіңді таң қалдыр.</em></h2></div>
    <a class="button button-primary" href="contact.php">Бізге жазыл <span>↗</span></a>
  </section>
</main>
<footer class="site-footer"><a class="brand footer-brand" href="index.php"><span class="brand-mark">D<span>◆</span></span><span class="brand-name">DIAMOND <small>FITNESS CLUB</small></span></a><span>Күш. Тәртіп. Прогресс.</span><span>© <?= date('Y') ?> Diamond Fitness</span></footer>
<script src="js/main.js"></script>
</body>
</html>
