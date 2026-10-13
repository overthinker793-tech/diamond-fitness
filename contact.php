<?php
$pageTitle = 'Байланыс — Diamond Fitness';
$successMessage = '';
$errorMessage = '';
$selectedPlan = trim((string)($_GET['plan'] ?? ''));
$allowedPlans = ['Starter', 'Active', 'Personal'];
if (!in_array($selectedPlan, $allowedPlans, true)) $selectedPlan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim((string)($_POST['name'] ?? ''));
    $phone = trim((string)($_POST['phone'] ?? ''));
    $plan = trim((string)($_POST['plan'] ?? ''));
    $goal = trim((string)($_POST['goal'] ?? ''));
    if ($name === '' || $phone === '' || !in_array($plan, $allowedPlans, true)) {
        $errorMessage = 'Атыңды, телефон нөміріңді және жоспарды толық таңда.';
    } else {
        require_once __DIR__ . '/includes/db.php';
        $db = getDatabaseConnection();
        if ($db instanceof mysqli) {
            $stmt = $db->prepare('INSERT INTO membership_leads (name, phone, plan, goal) VALUES (?, ?, ?, ?)');
            if ($stmt) {
                $stmt->bind_param('ssss', $name, $phone, $plan, $goal);
                if ($stmt->execute()) {
                    $successMessage = 'Рақмет! Өтінімің қабылданды. Біз саған хабарласамыз.';
                    $_POST = [];
                } else {
                    $errorMessage = 'Өтінімді сақтау кезінде қате болды. Кейінірек қайталап көр.';
                }
                $stmt->close();
            } else {
                $errorMessage = 'Өтінім формасын дайындау мүмкін болмады.';
            }
            $db->close();
        } else {
            $errorMessage = 'Дерекқор қазір қолжетімсіз. Docker Compose сервистерінің жұмысын тексер.';
        }
    }
}
function h($value): string { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$formPlan = (string)($_POST['plan'] ?? $selectedPlan);
$formName = (string)($_POST['name'] ?? '');
$formPhone = (string)($_POST['phone'] ?? '');
$formGoal = (string)($_POST['goal'] ?? '');
?>
<!doctype html>
<html lang="kk">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="Diamond Fitness клубына қызығушылық білдіру және байланыс деректері."><title><?= h($pageTitle) ?></title><link rel="stylesheet" href="css/style.css"></head>
<body>
<header class="site-header">
  <a class="brand" href="index.php"><span class="brand-mark">D<span>◆</span></span><span class="brand-name">DIAMOND <small>FITNESS CLUB</small></span></a>
  <button class="menu-toggle" type="button" aria-label="Мәзірді ашу" aria-expanded="false">☰</button>
  <nav class="nav" aria-label="Негізгі мәзір"><a href="index.php">Басты бет</a><a href="programs.php">Бағдарламалар</a><a class="active" href="contact.php">Байланыс</a></nav>
  <a class="nav-cta" href="contact.php">Жаттығуды бастау <span>↗</span></a>
</header>
<main>
  <section class="page-hero contact-hero"><div class="eyebrow"><span class="eyebrow-dot"></span> LET'S GET STARTED</div><h1>КЕЛЕСІ ҚАДАМ —<br><em>СЕНІҢ ҚОЛЫҢДА.</em></h1><p>Форманы толтыр, өзіңе ұнайтын бағытты таңда. Бұл оқу жобасындағы демо-өтінім формасы.</p></section>
  <section class="section contact-layout">
    <div class="contact-copy"><div class="eyebrow">SAY HELLO</div><h2>Байланысқа<br><em>шығайық.</em></h2><p>Сұрағың бар ма немесе жаттығуды неден бастау керегін білмейсің бе? Өтінім қалдыр — саған лайық нұсқаны бірге анықтаймыз.</p>
      <div class="contact-detail"><span class="detail-icon">⌖</span><div><strong>Мекенжай</strong><p>Алматы қ., фитнес аймағы (демо)</p></div></div>
      <div class="contact-detail"><span class="detail-icon">◷</span><div><strong>Жұмыс уақыты</strong><p>Дүйсенбі — жексенбі · 07:00–23:00 (демо)</p></div></div>
      <div class="contact-detail"><span class="detail-icon">✆</span><div><strong>Телефон</strong><p>+7 (700) 000-00-00 (үлгі нөмір)</p></div></div>
    </div>
    <form class="contact-form" method="post" action="contact.php" autocomplete="on">
      <div class="form-heading"><span class="plan-number">MEMBERSHIP REQUEST</span><h3>Өтінім қалдыру</h3><p>Жұлдызшамен белгіленген жолдарды толтыр.</p></div>
      <?php if ($successMessage !== ''): ?><div class="notice notice-success" role="status"><?= h($successMessage) ?></div><?php endif; ?>
      <?php if ($errorMessage !== ''): ?><div class="notice notice-error" role="alert"><?= h($errorMessage) ?></div><?php endif; ?>
      <label for="name">Атың *<input id="name" name="name" type="text" required maxlength="100" placeholder="Атыңды жаз" value="<?= h($formName) ?>"></label>
      <label for="phone">Телефон нөмірі *<input id="phone" name="phone" type="tel" required maxlength="30" placeholder="+7 700 000 00 00" value="<?= h($formPhone) ?>"></label>
      <label for="plan">Жаттығу жоспары *<select id="plan" name="plan" required><option value="">Жоспарды таңда</option><?php foreach (['Starter' => 'Starter — 12 000 ₸', 'Active' => 'Active — 18 000 ₸', 'Personal' => 'Personal — 35 000 ₸'] as $value => $label): ?><option value="<?= h($value) ?>" <?= $formPlan === $value ? 'selected' : '' ?>><?= h($label) ?></option><?php endforeach; ?></select></label>
      <label for="goal">Мақсатың (міндетті емес)<textarea id="goal" name="goal" rows="3" maxlength="1000" placeholder="Мысалы: күшті арттыру, формаға келу..."><?= h($formGoal) ?></textarea></label>
      <button class="button button-primary form-submit" type="submit">Өтінім жіберу <span>→</span></button>
      <p class="form-note">Бұл оқу жобасы. Форманы сақтау үшін MySQL сервисі іске қосулы болуы керек.</p>
    </form>
  </section>
</main>
<footer class="site-footer"><a class="brand footer-brand" href="index.php"><span class="brand-mark">D<span>◆</span></span><span class="brand-name">DIAMOND <small>FITNESS CLUB</small></span></a><span>Күш. Тәртіп. Прогресс.</span><span>© <?= date('Y') ?> Diamond Fitness</span></footer><script src="js/main.js"></script>
</body></html>
