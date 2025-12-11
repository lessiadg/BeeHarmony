<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeeHarmony – Recherche</title>
</head>
<body>
    
</body>
</html><?php
// --- Données simulées (tu pourras remplacer par ta base de données plus tard) ---
$results = [
    [
        "image" => "https://i.imgur.com/jPrY7c5.jpeg",
        "title" => "The Morning",
        "artist" => "The Weeknd",
        "type"  => "music"
    ],
    [
        "image" => "https://i.imgur.com/S2v4yqB.png",
        "title" => "The Less I Know The Better",
        "artist" => "Tame Impala",
        "type"  => "music"
    ],
    [
        "image" => "https://i.imgur.com/2r9tt1l.jpeg",
        "title" => "The Blonde",
        "artist" => "TV Girl",
        "type"  => "music"
    ],
    [
        "image" => "https://i.imgur.com/twkUhrF.jpeg",
        "title" => "The weeknd",
        "artist" => "",
        "type"  => "user"
    ],
    [
        "image" => "https://i.imgur.com/uTtk0qV.jpeg",
        "title" => "Theodora",
        "artist" => "",
        "type"  => "user"
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeeHarmony – Recherche</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Ton fichier CSS -->
    <link rel="stylesheet" href="recherche.css">
</head>

<body>

<header>
    <button class="back-btn">←</button>
    <h1 class="logo">BeeHarmony</h1>
</header>

<div class="search-box">
    <input type="text" placeholder="🔍  The">
</div>

<h2 class="result-title">Résultats</h2>

<div class="result-list">
    <?php foreach ($results as $item): ?>
        <div class="result-item">
            <img src="<?= $item['image'] ?>" alt="Image de <?= htmlspecialchars($item['title']) ?>">
            <div class="info">
                <p class="title"><?= htmlspecialchars($item['title']) ?></p>
                <?php if (!empty($item['artist'])): ?>
                    <p class="artist"><?= htmlspecialchars($item['artist']) ?></p>
                <?php endif; ?>
            </div>

            <?php if ($item["type"] === "music"): ?>
                <button class="play-btn">▶</button>
            <?php else: ?>
                <button class="play-btn">👤</button>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<!-- Menu du bas -->
<div class="bottom-menu">
    <a href="#" class="menu-item active">
        <span class="icon">🏠</span>
        <span class="label">Accueil</span>
    </a>
    <a href="#" class="menu-item">
        <span class="icon">🔍</span>
        <span class="label">Recherche</span>
    </a>
    <a href="#" class="menu-item">
        <span class="icon">👤</span>
        <span class="label">Profil</span>
    </a>
</div>

</body>
</html>
