<?php
// 1. Data Source: Menyimpan data produk dalam array agar kode lebih dinamis dan rapi
$perfumes = [
    [
        "brand" => "Velixir",
        "name" => "Asteria",
        "image" => "Asteria.jpg",
        "classification" => "Mystical Ethereal Eau de Parfum",
        "character" => "Mystical, Ethereal, & Serene",
        "description" => "Membawa nuansa aroma yang terinspirasi dari keindahan langit malam atau rasi bintang. Memadukan unsur floral yang lembut namun dikunci dengan aroma woody atau musk yang dalam, menciptakan kesan elegan yang tidak terlalu mencolok (understated elegance).",
        "function" => "Sangat cocok untuk penggunaan di malam hari, acara formal, meningkatkan impresi keanggunan yang misterius dan menenangkan jiwa.",
        "trouble" => "Oksidasi aroma floral akibat paparan cahaya matahari langsung.",
        "solution" => "Simpan di tempat gelap dan sejuk (lemari pakaian/kotak original).",
        "capacity" => "50ml / 100ml",
        "quality" => "Premium (30% Oils)",
        "speed" => "Sillage 3-5 Jam"
    ],
    [
        "brand" => "Mykonos",
        "name" => "Monaco Royale",
        "image" => "Monaco Royale.jpg",
        "classification" => "Opulent Amber & Warm Spicy Extrait de Parfum",
        "character" => "Luxury, Opulent, & High-Profile",
        "description" => "Memancarkan kemewahan jet-set Eropa. Aromanya cenderung kaya (rich) dengan perpaduan amber, rempah manis hangat (warm spicy), atau sentuhan gourmand yang manis dan tahan lama dengan proyeksi yang sangat kuat.",
        "function" => "Menghadiri pesta formal, pertemuan bisnis penting, atau momen di mana Anda ingin tampil glamor dan menjadi pusat perhatian utama.",
        "trouble" => "Penyumbatan atomizer (spray) karena konsentrasi minyak atsiri yang pekat.",
        "solution" => "Bersihkan ujung atomizer dengan alkohol atau bilas menggunakan air hangat.",
        "capacity" => "100ml Only",
        "quality" => "Luxury Extrait",
        "speed" => "Projection 8+ Jam"
    ],
    [
        "brand" => "Octarine",
        "name" => "Noctis Obscura",
        "image" => "Noctis Obscura.jpg",
        "classification" => "Dark Leather & Incense Bold Fragrance",
        "character" => "Dark, Bold, & Enigmatic",
        "description" => "Menonjolkan aroma pekat malam hari yang intens. Didominasi oleh unsur leather (kulit), incense (asap modern), tembakau, atau dark patchouli yang memikat, tegas, dan penuh misteri.",
        "function" => "Sangat pas untuk karakter personal yang berani tampil beda, penyuka gaya kasual-edgy, atau aktivitas nightout dan konser malam.",
        "trouble" => "Perubahan warna cairan dan penguapan alkohol berlebih akibat botol tidak rapat.",
        "solution" => "Pastikan tutup magnetis/klik terpasang sempurna setelah pemakaian.",
        "capacity" => "30ml / 50ml",
        "quality" => "Intense EDP",
        "speed" => "Longevity 6-8 Jam"
    ],
    [
        "brand" => "Scarlett",
        "name" => "Velvet Rouge",
        "image" => "Velvet Rouge.jpg",
        "classification" => "Crimson Rose & Sweet Vanilla Sensual Mist",
        "character" => "Sensual, Passionate, & Sweet",
        "description" => "Mengindikasikan aroma beludru merah yang lembut namun memiliki daya pikat kuat. Berfokus pada perpaduan mawar merah (crimson rose), buah beri manis (fruity-sweet), dan sentuhan kehangatan vanilla yang menggoda.",
        "function" => "Pilihan ideal untuk date night (kencan malam), momen romantis bersama pasangan, atau penggunaan harian feminin yang memikat.",
        "trouble" => "Top notes buah beri memudar terlalu cepat akibat fluktuasi suhu ruangan.",
        "solution" => "Hindari menyimpan botol parfum di dalam kamar mandi.",
        "capacity" => "30ml / 100ml",
        "quality" => "Soft Fine Fragrance",
        "speed" => "Sillage 4 Jam"
    ],
    [
        "brand" => "Braven",
        "name" => "Coll Wootah",
        "image" => "Coll Wootah.jpg",
        "classification" => "Fresh Aquatic & Energetic Sporty Eau de Cologne",
        "character" => "Fresh, Aquatic, & Energetic",
        "description" => "Menonjolkan kesegaran laut (marine notes), mint, serta sentuhan jeruk (citrus) yang memberikan efek segar instan layaknya selesai mandi (clean and soapy profile) yang penuh energi.",
        "function" => "Sangat baik untuk aktivitas luar ruangan, setelah berolahraga, penggunaan kasual sehari-hari pada cuaca panas agar tubuh tetap segar.",
        "trouble" => "Degradasi notes citrus karena teroksidasi udara luar dalam botol semi-longgar.",
        "solution" => "Gunakan dalam waktu 12-18 bulan setelah segel botol dibuka.",
        "capacity" => "60ml / 120ml",
        "quality" => "Fresh Daily Grade",
        "speed" => "Burst Freshness 2-3J"
    ]
];

// Tahun dinamis untuk copyright di footer
$current_year = date('Y'); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Perfume Collection - Profil & Karakter Aroma</title>
    <style>
        :root {
            --bg-color: #0b0507;
            --primary: #d62828;
            --secondary: #f77f00;
            --accent: #fcbf49;
            --pink: #f72585;
            --text-light: #fdf0d5;
            --glow-white: 0 0 15px rgba(255, 255, 255, 0.7), 0 0 25px rgba(247, 37, 133, 0.4);
            --card-glow: 0 10px 30px rgba(214, 40, 40, 0.2);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Playfair Display', 'Georgia', serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-light);
            line-height: 1.6;
            padding: 20px;
            background-image: radial-gradient(circle at 50% 20%, #2b0c16 0%, #0b0507 80%);
        }

        header {
            text-align: center;
            padding: 60px 20px;
            margin-bottom: 40px;
            border-bottom: 1px solid rgba(247, 127, 0, 0.2);
        }

        header h1 {
            font-size: 2.8rem;
            text-transform: uppercase;
            letter-spacing: 4px;
            color: #fff;
            text-shadow: var(--glow-white);
            margin-bottom: 15px;
        }

        header p {
            font-size: 1.2rem;
            color: var(--accent);
            max-width: 700px;
            margin: 0 auto;
            font-style: italic;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Grid Layout */
        .perfume-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        /* Card Style - Portrait Oriented */
        .perfume-card {
            background: linear-gradient(135deg, #1c0a10 0%, #0f0508 100%);
            border: 1px solid rgba(247, 37, 133, 0.3);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--card-glow);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .perfume-card:hover {
            transform: translateY(-10px);
            border-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 15px 40px rgba(247, 127, 0, 0.3), var(--glow-white);
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 450px; /* Enforces portrait aspect ratio */
            overflow: hidden;
            background-color: #15070c;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .perfume-card:hover .image-container img {
            transform: scale(1.05);
        }

        .brand-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(214, 40, 40, 0.85);
            padding: 5px 15px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 20px;
            border: 1px solid var(--accent);
            backdrop-filter: blur(5px);
        }

        .card-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .perfume-name {
            font-size: 1.8rem;
            color: #fff;
            margin-bottom: 5px;
            text-shadow: 0 0 10px rgba(255,255,255,0.2);
        }

        .english-title {
            font-size: 0.95rem;
            color: var(--pink);
            font-style: italic;
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
        }

        .character-tag {
            font-size: 0.9rem;
            color: var(--secondary);
            font-weight: bold;
            margin-bottom: 15px;
            border-left: 3px solid var(--primary);
            padding-left: 10px;
        }

        .description {
            font-size: 1rem;
            color: #e0d0d5;
            margin-bottom: 20px;
            text-align: justify;
        }

        .info-section {
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 15px;
        }

        .info-title {
            font-size: 1rem;
            color: var(--accent);
            text-transform: uppercase;
            margin-bottom: 5px;
            letter-spacing: 1px;
        }

        .info-text {
            font-size: 0.95rem;
            margin-bottom: 12px;
            color: #f0e5e8;
        }

        /* Technical Info Expansion */
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            background: rgba(255, 255, 255, 0.03);
            padding: 10px;
            border-radius: 8px;
            margin-top: 15px;
            border: 1px solid rgba(247, 127, 0, 0.1);
        }

        .tech-item {
            text-align: center;
        }

        .tech-label {
            font-size: 0.75rem;
            color: var(--pink);
            text-transform: uppercase;
        }

        .tech-val {
            font-size: 0.9rem;
            font-weight: bold;
            color: #fff;
        }

        /* Troubleshooting Section */
        .trouble-box {
            background: rgba(214, 40, 40, 0.1);
            border: 1px solid rgba(214, 40, 40, 0.3);
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .trouble-box strong {
            color: var(--secondary);
        }

        /* Guide / Summary Section */
        .guide-section {
            background: linear-gradient(135deg, #2b0c16 0%, #1c0a10 100%);
            border: 2px solid var(--secondary);
            border-radius: 15px;
            padding: 40px;
            margin-top: 60px;
            box-shadow: var(--glow-white);
        }

        .guide-section h2 {
            font-size: 2rem;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 10px var(--pink);
        }

        .guide-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .guide-list li {
            background: rgba(0,0,0,0.3);
            padding: 15px 20px;
            border-radius: 8px;
            border-left: 4px solid var(--pink);
        }

        .guide-list strong {
            color: var(--accent);
        }

        footer {
            text-align: center;
            padding: 40px;
            margin-top: 60px;
            font-size: 0.9rem;
            color: rgba(253, 240, 213, 0.5);
            border-top: 1px solid rgba(247, 127, 0, 0.1);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            header h1 { font-size: 2rem; }
            .perfume-grid { grid-template-columns: 1fr; }
            .image-container { height: 400px; }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <h1>Merek & Profil Aroma Parfum Modern</h1>
        <p>Wewangian bukan sekadar cairan beraroma, melainkan representasi identitas, suasana hati, dan impresi yang ingin ditinggalkan oleh penggunanya.</p>
    </header>

    <div class="container">
        <div class="perfume-grid">

            <?php // 2. Loop Prosedural: Mengulang elemen HTML secara otomatis berdasarkan isi array ?>
            <?php foreach ($perfumes as $perfume): ?>
                <div class="perfume-card">
                    <div class="image-container">
                        <span class="brand-badge"><?= htmlspecialchars($perfume['brand']) ?></span>
                        <img src="<?= htmlspecialchars($perfume['image']) ?>" alt="<?= htmlspecialchars($perfume['name']) ?>">
                    </div>
                    <div class="card-content">
                        <h2 class="perfume-name"><?= htmlspecialchars($perfume['name']) ?></h2>
                        <p class="english-title">Product Classification: <?= htmlspecialchars($perfume['classification']) ?></p>
                        <p class="character-tag"><?= htmlspecialchars($perfume['character']) ?></p>
                        <p class="description"><?= htmlspecialchars($perfume['description']) ?></p>
                        
                        <div class="info-section">
                            <p class="info-title">Fungsi & Fungsi Utama</p>
                            <p class="info-text"><?= htmlspecialchars($perfume['function']) ?></p>
                        </div>

                        <div class="trouble-box">
                            <p class="info-title">Kerusakan & Solusi Umum</p>
                            <p class="info-text">
                                <strong>Masalah:</strong> <?= htmlspecialchars($perfume['trouble']) ?><br>
                                <strong>Solusi:</strong> <?= htmlspecialchars($perfume['solution']) ?>
                            </p>
                        </div>

                        <div class="tech-grid">
                            <div class="tech-item">
                                <span class="tech-label">Kapasitas</span><br>
                                <span class="tech-val"><?= htmlspecialchars($perfume['capacity']) ?></span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-label">Kualitas</span><br>
                                <span class="tech-val"><?= htmlspecialchars($perfume['quality']) ?></span>
                            </div>
                            <div class="tech-item">
                                <span class="tech-label">Kecepatan</span><br>
                                <span class="tech-val"><?= htmlspecialchars($perfume['speed']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="guide-section">
            <h2>Ringkasan Strategi Pemilihan (Guide)</h2>
            <ul class="guide-list">
                <?php // 3. Loop Kedua: Membuat daftar panduan secara dinamis dari array yang sama ?>
                <?php foreach ($perfumes as $perfume): ?>
                    <?php 
                    // Menentukan teks panduan berdasarkan nama parfum
                    $guide_text = "";
                    if ($perfume['name'] === 'Coll Wootah') $guide_text = "Mencari kesegaran harian / clean";
                    elseif ($perfume['name'] === 'Velvet Rouge') $guide_text = "Ingin tampil manis dan romantis";
                    elseif ($perfume['name'] === 'Monaco Royale') $guide_text = "Ingin kesan mewah dan eksklusif";
                    elseif ($perfume['name'] === 'Asteria') $guide_text = "Menyukai nuansa misterius yang menenangkan";
                    elseif ($perfume['name'] === 'Noctis Obscura') $guide_text = "Ingin tampil berani, tegas, dan bold";
                    ?>
                    <li><?= $guide_text ?> &rarr; <strong><?= htmlspecialchars($perfume['brand'] . ' - ' . $perfume['name']) ?></strong></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; <?= $current_year ?> Brand Parfum Modern. Didesain secara Elegan dan Responsif.</p>
    </footer>

</body>
</html>