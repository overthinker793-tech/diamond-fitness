<?php
$pageTitle = 'Бағдарламалар — Diamond Fitness';
$currentPage = 'programs';
?>
<!doctype html>
<html lang="kk">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Diamond Fitness жаттығу бағдарламалары мен мүшелік жоспарлары.">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title><link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="index.php"><span class="brand-mark">D<span>◆</span></span><span class="brand-name">DIAMOND <small>FITNESS CLUB</small></span></a>
  <button class="menu-toggle" type="button" aria-label="Мәзірді ашу" aria-expanded="false">☰</button>
  <nav class="nav" aria-label="Негізгі мәзір"><a href="index.php">Басты бет</a><a class="active" href="programs.php">Бағдарламалар</a><a href="contact.php">Байланыс</a></nav>
  <a class="nav-cta" href="contact.php">Жаттығуды бастау <span>↗</span></a>
</header>
<main>
  <section class="page-hero"><div class="eyebrow"><span class="eyebrow-dot"></span> FIND YOUR TRAINING STYLE</div><h1>ӨЗІҢЕ САЙ<br><em>БАҒЫТТЫ ТАҢДА.</em></h1><p>Бастапқы деңгейден жеке мақсаттарға дейін — өзіңе сәйкес жаттығу жолын тап.</p></section>
  <section class="section plans-section">
    <div class="section-heading"><div><div class="eyebrow">TRAINING PROGRAMS</div><h2>Қозғалысқа арналған<br><em>үш бағыт.</em></h2></div><p>Төмендегі жоспарлар оқу жобасына арналған мысал ретінде берілген. Нақты қызметтер мен бағаларды клуб талабына сай өзгертуге болады.</p></div>
    <div class="plans-grid">
      <article class="plan-card"><div class="plan-top"><span class="plan-number">01 / START</span><span class="plan-symbol">✳</span></div><h3>STARTER</h3><p>Жаттығуды жаңадан бастағандарға арналған.</p><ul><li>Негізгі тренажер аймағы</li><li>Кардио аймағына кіру</li><li>Бастапқы бағдар бойынша кеңес</li></ul><div class="plan-price">12 000 ₸ <small>/ айына</small></div><a class="button button-outline" href="contact.php?plan=Starter">Жоспарды таңдау <span>→</span></a></article>
      <article class="plan-card plan-featured"><div class="popular-tag">ҰСЫНЫЛАДЫ</div><div class="plan-top"><span class="plan-number">02 / ACTIVE</span><span class="plan-symbol">✦</span></div><h3>ACTIVE</h3><p>Жүйелі жаттығуға және прогреске арналған.</p><ul><li>Барлық негізгі жаттығу аймақтары</li><li>Топтық сабақтарға қатысу</li><li>Ай сайынғы прогресс жоспары</li></ul><div class="plan-price">18 000 ₸ <small>/ айына</small></div><a class="button button-primary" href="contact.php?plan=Active">Жоспарды таңдау <span>→</span></a></article>
      <article class="plan-card"><div class="plan-top"><span class="plan-number">03 / PRO</span><span class="plan-symbol">◆</span></div><h3>PERSONAL</h3><p>Жеке көңіл бөлу мен жоспар қажет адамдарға.</p><ul><li>Жаттықтырушымен жеке сессия</li><li>Мақсатқа сай жаттығу жоспары</li><li>Нәтижені жүйелі бақылау</li></ul><div class="plan-price">35 000 ₸ <small>/ айына</small></div><a class="button button-outline" href="contact.php?plan=Personal">Жоспарды таңдау <span>→</span></a></article>
    </div>
  </section>
  <section class="quote-band"><div class="quote-mark">✦</div><blockquote>Өзіңмен жарыс. Кеше қандай болдың — бүгін содан бір қадам алда бол.</blockquote><p>DIAMOND FITNESS CLUB</p></section>
</main>
<footer class="site-footer"><a class="brand footer-brand" href="index.php"><span class="brand-mark">D<span>◆</span></span><span class="brand-name">DIAMOND <small>FITNESS CLUB</small></span></a><span>Күш. Тәртіп. Прогресс.</span><span>© <?= date('Y') ?> Diamond Fitness</span></footer><script src="js/main.js"></script>
</body></html>
