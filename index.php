<?php
/* トップページ：ブログ最新記事を取得（lib.phpが無くても安全にフォールバック） */
$latestPosts = [];
$libPath = __DIR__ . '/blog/lib.php';
if (is_file($libPath)) {
  require_once $libPath;
  if (function_exists('published_posts')) {
    $latestPosts = array_slice(published_posts(), 0, 4);
  }
}
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>レクサスLX買取専門｜業界最高水準の査定額で高価買取【LX600/LX700h/OFFROAD】</title>
<meta name="description" content="レクサスLXの買取なら専門店「レクサスLX専門高価買取JP」。流通マージンを徹底カットし業界最高水準の査定額で高価買取・即日お振込み。LX600/LX700h/EXECUTIVE/OFFROAD対応。LINEで30秒カンタン無料査定。愛知・岐阜・三重・全国出張査定OK。">
<meta name="keywords" content="レクサスLX 買取,レクサスLX 査定,LX買取,LX600 買取,LX700h 買取,LX600 OFFROAD 買取,EXECUTIVE 買取,レクサス 高価買取,LEXUS LX 査定,モデリスタ 買取">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta name="author" content="レクサスLX専門高価買取JP（カーショップグローリー／株式会社ライジングサン）">
<meta name="theme-color" content="#0a0a0a">
<link rel="canonical" href="https://lexus-lx.car-kaitori.net/">

<!-- ファビコン -->
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon-192.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

<!-- 地域SEO -->
<meta name="geo.region" content="JP-23">
<meta name="geo.placename" content="愛知県一宮市">
<meta name="geo.position" content="35.3033;136.8025">
<meta name="ICBM" content="35.3033, 136.8025">

<!-- OGP (Facebook / LINE等) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="レクサスLX専門高価買取JP">
<meta property="og:title" content="レクサスLX買取専門｜業界最高水準の査定額で高価買取">
<meta property="og:description" content="レクサスLX専門店だから出せる業界最高水準の査定額。流通マージンを徹底カットし高価買取・即日お振込み。LINEで30秒カンタン無料査定。全国出張査定OK。">
<meta property="og:url" content="https://lexus-lx.car-kaitori.net/">
<meta property="og:image" content="https://lexus-lx.car-kaitori.net/ogp.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="レクサスLX、それ以外は買いません。専門店だから出せる業界最高水準の査定額">
<meta property="og:locale" content="ja_JP">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="レクサスLX買取専門｜業界最高水準の査定額で高価買取">
<meta name="twitter:description" content="レクサスLX専門店だから出せる業界最高水準の査定額。流通マージンを徹底カットし高価買取・即日お振込み。LINEで30秒カンタン無料査定。">
<meta name="twitter:image" content="https://lexus-lx.car-kaitori.net/ogp.jpg">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Noto+Serif+JP:wght@500;600;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css?v=20260629z">

<!-- 構造化データ: AutoDealer (LocalBusiness) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoDealer",
  "@id": "https://lexus-lx.car-kaitori.net/#dealer",
  "name": "レクサスLX専門高価買取JP",
  "alternateName": "カーショップグローリー",
  "description": "レクサスLX専門の高価買取店。流通マージンを徹底カットし業界最高水準の査定額で買取・即日お振込み対応。全国出張査定OK。",
  "url": "https://lexus-lx.car-kaitori.net/",
  "logo": "https://lexus-lx.car-kaitori.net/ogp.jpg",
  "image": "https://lexus-lx.car-kaitori.net/ogp.jpg",
  "telephone": "+81-586-47-6055",
  "email": "carshopglory.yasuda@gmail.com",
  "priceRange": "¥¥¥",
  "foundingDate": "1997",
  "parentOrganization": {
    "@type": "Organization",
    "name": "株式会社ライジングサン",
    "url": "https://carshop-glory.jp/"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "大和町南高井字袋田3番",
    "addressLocality": "一宮市",
    "addressRegion": "愛知県",
    "addressCountry": "JP"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 35.3033,
    "longitude": 136.8025
  },
  "areaServed": {"@type": "Country", "name": "日本"},
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "10:00",
    "closes": "18:00"
  },
  "makesOffer": {
    "@type": "Offer",
    "name": "レクサスLX 高価買取",
    "itemOffered": {
      "@type": "Service",
      "name": "レクサスLX 専門買取・査定サービス",
      "serviceType": "中古車買取・査定"
    }
  },
  "sameAs": ["https://carshop-glory.jp/"]
}
</script>

<!-- 構造化データ: パンくず -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "ホーム", "item": "https://lexus-lx.car-kaitori.net/"},
    {"@type": "ListItem", "position": 2, "name": "レクサスLX 買取・査定"}
  ]
}
</script>

<!-- 構造化データ: WebSite -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "レクサスLX専門高価買取JP",
  "url": "https://lexus-lx.car-kaitori.net/",
  "inLanguage": "ja",
  "publisher": {"@type": "Organization", "name": "レクサスLX専門高価買取JP", "logo": {"@type": "ImageObject", "url": "https://lexus-lx.car-kaitori.net/ogp.jpg"}}
}
</script>

<!-- 構造化データ: AggregateRating -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoDealer",
  "@id": "https://lexus-lx.car-kaitori.net/#dealer-rating",
  "name": "レクサスLX専門高価買取JP",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "87",
    "reviewCount": "87"
  }
}
</script>

<!-- 構造化データ: Service -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "レクサスLX 高価買取・無料査定サービス",
  "description": "レクサスLX（LX600/LX700h/EXECUTIVE/OFFROAD/OVERTRAIL+）の専門買取サービス。無料出張査定・即日振込対応。愛知・岐阜・三重・全国対応。",
  "provider": {
    "@type": "AutoDealer",
    "@id": "https://lexus-lx.car-kaitori.net/#dealer"
  },
  "areaServed": {"@type": "Country", "name": "日本"},
  "serviceType": "中古車買取・無料査定",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "JPY",
    "description": "査定・出張・引き取り完全無料"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "買取対応グレード",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "レクサス LX600 買取"}},
      {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "レクサス LX600 EXECUTIVE 買取"}},
      {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "レクサス LX600 OFFROAD / OVERTRAIL+ 買取"}},
      {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "レクサス LX700h 買取"}},
      {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "レクサス LX700h EXECUTIVE 買取"}}
    ]
  }
}
</script>

<!-- 構造化データ: FAQ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "査定は無料ですか？", "acceptedAnswer": {"@type": "Answer", "text": "はい、査定・出張・引き取りすべて無料です。査定後のキャンセルも一切費用は発生しません。"}},
    {"@type": "Question", "name": "現金での車輌代金受け取りは可能ですか？", "acceptedAnswer": {"@type": "Answer", "text": "はい、弊社は現金での支払い可能です。"}},
    {"@type": "Question", "name": "ローン中のレクサスLXでも買取できますか？", "acceptedAnswer": {"@type": "Answer", "text": "はい、可能です。残債を弊社で清算し、差額をお支払いする流れになります。詳細はLINEでご相談ください。"}},
    {"@type": "Question", "name": "修復歴があっても買取してもらえますか？", "acceptedAnswer": {"@type": "Answer", "text": "はい、買取いたします。修復歴の有無により査定額は変動しますが、レクサスLXは人気車種のため修復歴ありでも高値が期待できます。"}},
    {"@type": "Question", "name": "遠方ですが査定に来てもらえますか？", "acceptedAnswer": {"@type": "Answer", "text": "愛知・岐阜・三重を中心に全国対応しています。北海道から沖縄まで出張査定に伺います。"}},
    {"@type": "Question", "name": "納車待ち（注文済み）のレクサスLXも買取してもらえますか？", "acceptedAnswer": {"@type": "Answer", "text": "はい、買取または購入権譲渡のご相談を承ります。LINEで詳細をお聞かせください。"}},
    {"@type": "Question", "name": "レクサスLXの買取相場はどのくらいですか？", "acceptedAnswer": {"@type": "Answer", "text": "2026年現在、現行モデル（4代目2022年〜）のLX600は1,000〜1,600万円台、LX600 EXECUTIVEは1,300〜1,800万円台、LX700hは1,200〜1,800万円台が目安です。年式・走行距離・装備・カラーにより大きく変動します。弊社は専門店として市場価値を最大限評価し、他店より高値での買取を実現しています。"}},
    {"@type": "Question", "name": "レクサスLXはどこで売るのが一番高い？", "acceptedAnswer": {"@type": "Answer", "text": "レクサスLXは専門買取店が最も高値になるケースが多いです。一般の買取チェーンはオークションへ転売するため中間マージンが発生しますが、弊社のようなレクサスLX専門店は直接国内外のユーザーへ販売するため、その分を査定額に還元できます。複数社での相見積もりも歓迎しており、他社査定後のご相談も多数いただいています。"}},
    {"@type": "Question", "name": "レクサスLXは新車納期が長いですが、納車後すぐ売っても高く売れますか？", "acceptedAnswer": {"@type": "Answer", "text": "はい。レクサスLXは新車の受注停止・長期納待ちが続いた影響で、登録済み・低走行の中古車に非常に高い需要があります。納車後まもない車両は新車価格を上回る査定額がつくケースもあります。"}},
    {"@type": "Question", "name": "レクサスLXの高年式・低走行車は特別査定がありますか？", "acceptedAnswer": {"@type": "Answer", "text": "はい、2022年以降の現行モデルで走行1万km以下の車両は、海外輸出需要が特に高く、通常査定より大幅に高値がつくケースがあります。まずはLINEで車検証と写真をお送りください。最短当日に概算査定額をお出しします。"}}
  ]
}
</script>
</head>
<body id="top">

<!-- Header -->
<header class="site-header">
  <div class="header-inner">
    <h1 class="logo">
      <a href="#top">
        <span class="logo-jp">レクサスLX専門高価買取JP</span>
      </a>
    </h1>
    <ul class="header-cta">
      <li>
        <a href="tel:0586-47-6055" class="hcta-tel">
          <span class="hcta-label">買取専門ダイヤル</span>
          <span class="hcta-num">0586-47-6055</span>
        </a>
      </li>
      <li>
        <a href="https://lin.ee/XyL9Wbh" class="hcta-line" target="_blank" rel="noopener">
          <span class="hcta-label">LINEでカンタン</span>
          <span class="hcta-num">見積もり相談</span>
        </a>
      </li>
    </ul>
    <button class="menu-toggle" aria-label="メニュー" id="menuToggle">
      <span></span><span></span><span></span>
    </button>
  </div>
  <nav class="globalmenu" id="globalmenu">
    <ul>
      <li><a href="#hero">トップ</a></li>
      <li><a href="#models">買取車種</a></li>
      <li><a href="#price">安心</a></li>
      <li><a href="#value">人気の理由</a></li>
      <li><a href="#reasons">選ばれる理由</a></li>
      <li><a href="#flow">買取の流れ</a></li>
      <li><a href="#docs">必要書類</a></li>
      <li><a href="#qa">Q&amp;A</a></li>
      <li><a href="/blog/">買取コラム</a></li>
      <li><a href="#company">会社情報</a></li>
    </ul>
  </nav>
</header>

<!-- Hero -->
<section id="hero" class="hero">
  <h2 class="sr-only">レクサスLX、それ以外は買いません。一台入魂、専門店だから出せる業界最高水準の査定額。買取国内最高水準・即日お振込み対応。</h2>
  <div class="hero-stage">
    <picture class="hero-img-wrap">
      <source media="(max-width:768px)" srcset="lexus_lx_hero_metal_mobile2.webp?v=2" width="864" height="1694">
      <img src="lexus_lx_hero_metal4.webp" alt="レクサスLXしか買いません！専門店だからこそ出来る高価買取・即日見積もり・現金買取に対応" class="hero-img" width="1672" height="941" fetchpriority="high" decoding="async">
    </picture>
  </div>
  <div class="hero-cta-wrap">
    <a href="#line-cta" class="hero-cta">
      <span class="cta-label">▼ 30秒でカンタン ▼</span>
      <span class="cta-main">LINEで見積もり相談</span>
    </a>
  </div>
</section>

<!-- 強化買取バッジ -->
<section class="strong-buy">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">STRONG BUYING</span>
      <span class="st-jp"><strong>レクサスLXのOFFROAD／EXECUTIVE／モデリスタエアロ付きは</strong> 買取強化中!!</span>
    </h2>
    <p class="lead">
      弊社はレクサスLX専門店として、最大限の評価査定で納得価格の買取をさせていただきます。これまでの実績から幅広いネットワークを活用し、カーオークションの流通マージンを抑え直接海外に販売又は国内ユーザー様に直接販売する事でお客様に有利な買取価格のご提供が可能です。<br>
      他社の買取価格にご不満の方は、ぜひ当社にご相談ください。
    </p>
  </div>
</section>

<!-- 買取車種 -->
<section id="models" class="models">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">BUY MODELS</span>
      <span class="st-jp"><strong>レクサスLX 買取対応グレード</strong></span>
    </h2>
    <ul class="model-list">
      <li><a href="#price"><span class="model-name">LX600</span><span class="model-sub">STANDARD</span></a></li>
      <li><a href="#price"><span class="model-name">LX600</span><span class="model-sub">EXECUTIVE</span></a></li>
      <li><a href="#price"><span class="model-name">LX600</span><span class="model-sub">OFFROAD / OVERTRAIL+</span></a></li>
      <li><a href="#price"><span class="model-name">LX700h</span><span class="model-sub">HYBRID</span></a></li>
      <li><a href="#price"><span class="model-name">LX700h</span><span class="model-sub">EXECUTIVE</span></a></li>
    </ul>
  </div>
</section>

<!-- 安心 / TRUST -->
<section id="price" class="trust">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">TRUST</span>
      <span class="st-jp"><strong>弊社なら安心してお売りできます！</strong></span>
    </h2>
    <div class="trust-inner">
      <div class="trust-badge">
        <img src="trust_badge.webp" alt="帝国データバンク評点61点 レクサスLX専門高価買取JP" width="180" height="180" loading="lazy" decoding="async" onerror="this.style.display='none'">
      </div>
      <p class="trust-text">
        昨今車買取りでの未入金トラブルが多いです！安心して下さい！レクサスLX専門高価買取JPの運営会社は国内最大スーパーカーショップ『カーショップグローリー』を運営する株式会社ライジングサンです。お陰様で財務状況も問題なく帝国データバンクさんの評点は上場企業なみの<strong>61点</strong>を頂いております。
      </p>
    </div>

    <div class="trust-cta-wrap">
      <a href="#line-cta" class="trust-cta">▶ あなたのレクサスLXを<br>今すぐ査定する</a>
    </div>
  </div>
</section>

<!-- 【追加セクション】LXの人気の理由 / 市場価値解説 -->
<section id="value" class="value">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">MARKET VALUE</span>
      <span class="st-jp"><strong>レクサスLXが高く売れる理由</strong></span>
    </h2>
    <p class="value-lead">
      レクサスLXは、国内外で圧倒的な需要を誇るフラッグシップSUV。<strong>新車の長期納待ち・受注状況</strong>を背景に、中古車市場では新車価格に迫る、あるいは上回る価格で取引されるケースも珍しくありません。専門店だからこそ、その市場価値を最大限に引き出します。
    </p>
    <div class="value-grid">
      <div class="value-card">
        <span class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18" stroke-linecap="round"/><circle cx="12" cy="12" r="9"/></svg>
        </span>
        <h3>世界的に高い海外需要</h3>
        <p>堅牢な悪路走破性と信頼性で、中東・アジアを中心に世界中で需要が継続。輸出ルートを持つ専門店だから、国内相場を超える評価が可能です。</p>
      </div>
      <div class="value-card">
        <span class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 7v5h-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
        <h3>長期納待ちで中古相場が高騰</h3>
        <p>新車の納期が長く、すぐ乗れる登録済み・低走行車に人気が集中。タイミング次第では新車価格を上回る査定額がつくこともあります。</p>
      </div>
      <div class="value-card">
        <span class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2l2.6 5.7L21 8.6l-4.5 4.3 1.1 6.1L12 16.8 6.4 19l1.1-6.1L3 8.6l6.4-.9z" stroke-linejoin="round"/></svg>
        </span>
        <h3>EXECUTIVE・OFFROADは希少価値大</h3>
        <p>4人乗りの最上級EXECUTIVE、日本専用OFFROAD／OVERTRAIL+はタマ数が少なく、専門店ならではの上乗せ査定が期待できます。</p>
      </div>
      <div class="value-card">
        <span class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z" stroke-linejoin="round"/><path d="M9.2 12l2 2 3.6-3.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
        <h3>モデリスタ・社外パーツも加点評価</h3>
        <p>モデリスタエアロ、大径ホイール、サンルーフ、マークレビンソンなどの人気装備は一点ずつ丁寧に査定。装備の価値を取りこぼしません。</p>
      </div>
    </div>

    <!-- 相場の目安テーブル -->
    <div class="value-table-wrap">
      <h3 class="value-table-title">レクサスLX 買取相場の目安（2026年）</h3>
      <table class="value-table">
        <thead>
          <tr><th>グレード</th><th>買取相場の目安</th></tr>
        </thead>
        <tbody>
          <tr><td>LX600（標準）</td><td>1,000〜1,600万円</td></tr>
          <tr><td>LX600 EXECUTIVE</td><td>1,300〜1,800万円</td></tr>
          <tr><td>LX600 OFFROAD / OVERTRAIL+</td><td>1,200〜1,750万円</td></tr>
          <tr><td>LX700h / LX700h EXECUTIVE</td><td>1,200〜1,900万円</td></tr>
        </tbody>
      </table>
      <p class="value-note">※年式・走行距離・装備・カラー・市場動向により変動します。正確な金額はLINEまたは無料査定フォームよりお問い合わせください。</p>
    </div>
  </div>
</section>

<!-- 選ばれる理由 -->
<section id="reasons" class="reasons">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">REASONS</span>
      <span class="st-jp"><strong>レクサスLX専門高価買取JP<br>が選ばれる理由</strong></span>
    </h2>
    <ol class="reason-list">
      <li>
        <span class="reason-num">01</span>
        <h3>レクサスLX専門だから可能な高額査定</h3>
        <p>レクサスLX専門店として市場価値を熟知。年式・グレード・装備・カラーまで細部を評価し、適正かつ最大限の査定額を提示します。</p>
      </li>
      <li>
        <span class="reason-num">02</span>
        <h3>流通マージンを徹底カット</h3>
        <p>カーオークションを介さず直接海外に輸出又は国内のユーザー様に直接販売しその分を買取り価格に還元します。</p>
      </li>
      <li>
        <span class="reason-num">03</span>
        <h3>直接現金でのお支払可能</h3>
        <p>ご希望のお客様には現金でのお支払が可能です。</p>
      </li>
      <li>
        <span class="reason-num">04</span>
        <h3>全国出張査定・無料引き取り</h3>
        <p>愛知・岐阜・三重を中心に全国対応。出張査定・引き取り費用は一切無料です。</p>
      </li>
      <li>
        <span class="reason-num">05</span>
        <h3>LINEで完結する簡単査定</h3>
        <p>車検証と車両写真を送るだけで概算査定が完了。電話が苦手な方もLINEで気軽にご相談いただけます。</p>
      </li>
      <li>
        <span class="reason-num">06</span>
        <h3>創業1997年の信頼と実績</h3>
        <p>運営会社は平成9年創業の日本一のスーパーカーショップ、カーショップグローリーを運営する株式会社ライジングサンです。お支払いも安心です。</p>
      </li>
    </ol>
  </div>
</section>

<!-- 買取の流れ -->
<section id="flow" class="flow">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">FLOW</span>
      <span class="st-jp"><strong>買取の流れ</strong></span>
    </h2>
    <ol class="flow-list">
      <li><span class="flow-step">STEP 01</span><h3>LINEで見積もり相談</h3><p>下のボタンからLINE友だち追加。車検証と車両写真を送るだけ。</p></li>
      <li><span class="flow-step">STEP 02</span><h3>概算査定額のご提示</h3><p>専門スタッフが情報を確認し、最短当日中に概算査定額をご返信します。</p></li>
      <li><span class="flow-step">STEP 03</span><h3>最短でのお振込・現金でのお渡しOK</h3><p>最短でお振込、お車は無料で引き取ります。</p></li>
      <li><span class="flow-step">STEP 04</span><h3>ご契約・必要書類のご準備</h3><p>査定額にご納得いただけたら契約書を取り交わし、必要書類をご準備いただきます。</p></li>
      <li><span class="flow-step">STEP 05</span><h3>最短お振込み・お車のお引き取り</h3><p>最短振込みでお振込み完了。お車は無料で引き取りに伺います。</p></li>
    </ol>
  </div>
</section>

<!-- 必要書類 -->
<section id="docs" class="docs">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">DOCUMENT</span>
      <span class="st-jp"><strong>ご売却で必要な書類</strong></span>
    </h2>
    <div class="doc-grid">
      <div class="doc-card">
        <h3>ローン中でないお車</h3>
        <ul>
          <li>自動車検査証（車検証）</li>
          <li>自動車税納税証明書</li>
          <li>自賠責保険証</li>
          <li>リサイクル券</li>
          <li>実印・印鑑証明（発行3ヶ月以内）</li>
          <li>譲渡証明書・委任状（弊社にて準備）</li>
        </ul>
      </div>
      <div class="doc-card">
        <h3>ローン中のお車</h3>
        <ul>
          <li>上記書類一式</li>
          <li>ローン残債証明書</li>
          <li>所有者名義人の委任状</li>
        </ul>
      </div>
    </div>
    <p class="price-note">ローン残債がある場合も買取可能です。残債清算もまとめて対応いたしますのでご安心ください。</p>
  </div>
</section>

<!-- Q&A -->
<section id="qa" class="qa">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">Q&amp;A</span>
      <span class="st-jp"><strong>買取に関するよくあるご質問</strong></span>
    </h2>
    <div class="qa-list">
      <div>
        <p class="qa-q"><span>Q</span>査定は無料ですか？</p>
        <p class="qa-a"><span>A</span>はい、査定・出張・引き取りすべて無料です。査定後のキャンセルも一切費用は発生しません。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>現金での車輌代金受け取りは可能ですか？</p>
        <p class="qa-a"><span>A</span>はい、弊社は現金での支払い可能です。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>ローン中のレクサスLXでも買取できますか？</p>
        <p class="qa-a"><span>A</span>はい、可能です。残債を弊社で清算し、差額をお支払いする流れになります。詳細はLINEでご相談ください。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>修復歴があっても買取してもらえますか？</p>
        <p class="qa-a"><span>A</span>はい、買取いたします。修復歴の有無により査定額は変動しますが、レクサスLXは人気車種のため修復歴ありでも高値が期待できます。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>遠方ですが査定に来てもらえますか？</p>
        <p class="qa-a"><span>A</span>愛知・岐阜・三重を中心に全国対応しています。北海道から沖縄まで出張査定に伺います。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>納車待ち（注文済み）のレクサスLXも買取してもらえますか？</p>
        <p class="qa-a"><span>A</span>はい、買取または購入権譲渡のご相談を承ります。LINEで詳細をお聞かせください。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>レクサスLXの買取相場はどのくらいですか？</p>
        <p class="qa-a"><span>A</span>2026年現在、現行モデル（4代目2022年〜）のLX600は1,000〜1,600万円台、LX600 EXECUTIVEは1,300〜1,800万円台、LX700hは1,200〜1,800万円台が目安です。年式・走行距離・装備・カラーにより大きく変動します。弊社は専門店として市場価値を最大限評価し、他店より高値での買取を実現しています。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>レクサスLXはどこで売るのが一番高い？</p>
        <p class="qa-a"><span>A</span>レクサスLXは専門買取店が最も高値になるケースが多いです。一般の買取チェーンはオークションへ転売するため中間マージンが発生しますが、弊社のようなレクサスLX専門店は直接国内外のユーザーへ販売するため、その分を査定額に還元できます。他社査定後のご相談も大歓迎です。</p>
      </div>
      <div>
        <p class="qa-q"><span>Q</span>レクサスLXの高年式・低走行車は特別査定がありますか？</p>
        <p class="qa-a"><span>A</span>はい、2022年以降の現行モデルで走行1万km以下の車両は、海外輸出需要が特に高く、通常査定より大幅に高値がつくケースがあります。まずはLINEで車検証と写真をお送りください。最短当日に概算査定額をお出しします。</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT / LINE CTA -->
<section id="line-cta" class="contact">
  <div class="container">
    <p class="contact-en">CONTACT</p>
    <h2 class="contact-title">他店との差額に驚いてください。<br>まずはLINEで見積もり相談を。</h2>
    <p class="contact-desc">車検証の写真とお車の写真を送るだけ。<br>30秒で査定依頼が完了します。<br>もちろん査定後のキャンセルも無料です。</p>

    <a href="https://lin.ee/XyL9Wbh" class="contact-line-btn" target="_blank" rel="noopener">
      <span>LINE 友だち追加して</span><strong>見積もり相談する</strong>
    </a>
    <p class="contact-note">ラインから車両データ頂ければ、来店無しでスピード査定！</p>

    <a href="tel:0586-47-6055" class="contact-tel-btn">
      <span>お電話でもどうぞ</span><strong>0586-47-6055</strong><span class="tel-time">受付 10:00-18:00 / 火曜定休</span>
    </a>

    <!-- 査定フォーム -->
    <div class="inquiry-form-wrap" id="assessment-form">
      <h3 class="inquiry-form-title">無料査定フォーム</h3>
      <p class="inquiry-form-desc">下記フォームにご入力いただき送信してください。担当者よりご連絡いたします。</p>
      <form id="inquiryForm" class="inquiry-form" novalidate>

        <p class="form-section-label">お車の情報</p>

        <div class="form-row">
          <label for="f-grade">グレード</label>
          <input type="text" id="f-grade" name="grade" placeholder="例：LX600 EXECUTIVE / LX600 OFFROAD / LX700h">
        </div>

        <div class="form-row form-row--checkbox">
          <label>装備（該当するものにチェック）</label>
          <div class="form-check-group">
            <label class="form-check"><input type="checkbox" name="equipment[]" value="モデリスタエアロ">モデリスタエアロ</label>
            <label class="form-check"><input type="checkbox" name="equipment[]" value="サンルーフ">サンルーフ</label>
            <label class="form-check"><input type="checkbox" name="equipment[]" value="マークレビンソン">マークレビンソン</label>
            <label class="form-check"><input type="checkbox" name="equipment[]" value="リアエンターテイメント">リアエンターテイメント</label>
          </div>
        </div>

        <div class="form-row">
          <label for="f-equipment-other">その他装備</label>
          <input type="text" id="f-equipment-other" name="equipment_other" placeholder="例：デジタルインナーミラー・社外ホイール　等">
        </div>

        <div class="form-row form-row--2col">
          <div>
            <label for="f-year">年式 <span class="req">必須</span></label>
            <select id="f-year" name="year" required>
              <option value="">年</option>
              <option>2026年式（令和8年）</option>
              <option>2025年式（令和7年後期）</option>
              <option>2025年式（令和7年）</option>
              <option>2024年式（令和6年）</option>
              <option>2023年式（令和5年）</option>
              <option>2022年式（令和4年）</option>
              <option>2021年式（令和3年）</option>
              <option>2020年式（令和2年）</option>
              <option>2019年式（令和元年）</option>
              <option>2018年式（平成30年）</option>
              <option>2017年式（平成29年）</option>
              <option>2016年式（平成28年）</option>
              <option>2015年式（平成27年）</option>
              <option>2014年式（平成26年）</option>
              <option>2013年式（平成25年）</option>
              <option>2012年式（平成24年）</option>
              <option>2011年式（平成23年）</option>
              <option>2010年式（平成22年）</option>
              <option>2009年式以前</option>
            </select>
          </div>
          <div>
            <label for="f-month">月</label>
            <select id="f-month" name="month">
              <option value="">月</option>
              <option>1月</option><option>2月</option><option>3月</option>
              <option>4月</option><option>5月</option><option>6月</option>
              <option>7月</option><option>8月</option><option>9月</option>
              <option>10月</option><option>11月</option><option>12月</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <label for="f-mileage-select">走行距離 <span class="req">必須</span></label>
          <select id="f-mileage-select" name="mileage_range" required>
            <option value="">選択してください</option>
            <option>0～1,000km</option>
            <option>1,001～5,000km</option>
            <option>5,001〜10,000km</option>
            <option>10,001〜15,000km</option>
            <option>15,001〜20,000km</option>
            <option>20,001〜25,000km</option>
            <option>25,001〜30,000km</option>
            <option>30,001〜40,000km</option>
            <option>40,001〜50,000km</option>
            <option>50,001〜60,000km</option>
            <option>60,001〜80,000km</option>
            <option>80,001〜100,000km</option>
            <option>100,001km〜</option>
          </select>
        </div>

        <div class="form-row">
          <label for="f-mileage-exact">現在の走行距離（正確にわかる場合）</label>
          <div class="form-input-unit">
            <input type="text" id="f-mileage-exact" name="mileage_exact" placeholder="例：15000">
            <span class="unit">km</span>
          </div>
        </div>

        <div class="form-row">
          <label for="f-color">車体カラー</label>
          <input type="text" id="f-color" name="color" placeholder="例：ソニッククォーツ／ブラック／マニラゴールド">
        </div>

        <div class="form-row">
          <label for="f-other-estimate">他社での査定額</label>
          <input type="text" id="f-other-estimate" name="other_estimate" placeholder="例：1,300万円">
        </div>

        <div class="form-row">
          <label for="f-hope-price">希望金額</label>
          <input type="text" id="f-hope-price" name="hope_price" placeholder="例：1,450万円">
        </div>

        <div class="form-row">
          <label for="f-purchase-condition">購入時の状態</label>
          <select id="f-purchase-condition" name="purchase_condition">
            <option value="">選択してください</option>
            <option>新車</option>
            <option>中古車</option>
          </select>
        </div>

        <div class="form-row">
          <label for="f-repair">板金・塗装や修復歴</label>
          <select id="f-repair" name="repair">
            <option value="">選択してください</option>
            <option>ある</option>
            <option>ない</option>
            <option>わからない</option>
          </select>
        </div>

        <div class="form-row">
          <label for="f-damage-detail">ダメージ詳細</label>
          <textarea id="f-damage-detail" name="damage_detail" rows="3" placeholder="ダメージがある場合は詳細をご記入ください"></textarea>
        </div>

        <div class="form-row form-row--radio">
          <label>車両の喫煙状態 <span class="req">必須</span></label>
          <div class="form-radio-group">
            <label class="form-radio"><input type="radio" name="smoking" value="喫煙車" required>喫煙車</label>
            <label class="form-radio"><input type="radio" name="smoking" value="禁煙車">禁煙車</label>
          </div>
        </div>

        <div class="form-row">
          <label for="f-sell-timing">売却予定時期 <span class="req">必須</span></label>
          <select id="f-sell-timing" name="sell_timing" required>
            <option value="">選択してください</option>
            <option>金額が合えばすぐ</option>
            <option>1週間以内</option>
            <option>2週間以内</option>
            <option>1ヶ月以内</option>
            <option>1ヶ月～</option>
            <option>未定</option>
          </select>
        </div>

        <p class="form-section-label" style="margin-top:2rem;">お客様の情報</p>

        <div class="form-row">
          <label for="f-name">お名前 <span class="req">必須</span></label>
          <input type="text" id="f-name" name="name" placeholder="例：山田 太郎" required>
        </div>

        <div class="form-row">
          <label for="f-kana">フリガナ</label>
          <input type="text" id="f-kana" name="kana" placeholder="例：ヤマダ タロウ">
        </div>

        <div class="form-row">
          <label for="f-tel">電話番号 <span class="req">必須</span></label>
          <input type="tel" id="f-tel" name="tel" placeholder="例：090-1234-5678" required>
        </div>

        <div class="form-row">
          <label for="f-email">メールアドレス <span class="req">必須</span></label>
          <input type="email" id="f-email" name="email" placeholder="例：example@gmail.com" required>
        </div>

        <div class="form-row form-row--radio">
          <label>ご希望の連絡方法 <span class="req">必須</span></label>
          <div class="form-radio-group">
            <label class="form-radio"><input type="radio" name="contact_method" value="メール" required>メール</label>
            <label class="form-radio"><input type="radio" name="contact_method" value="電話も可能">電話も可能</label>
          </div>
        </div>

        <div class="form-row">
          <label for="f-message">備考・その他ご要望</label>
          <textarea id="f-message" name="message" rows="4" placeholder="ご自由にお書きください"></textarea>
        </div>

        <div id="form-status" class="form-status"></div>
        <button type="submit" class="form-submit">無料査定を申し込む</button>
      </form>
    </div>
  </div>
</section>

<!-- 運営会社 -->
<section id="company" class="company">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">COMPANY</span>
      <span class="st-jp"><strong>運営会社</strong></span>
    </h2>
    <table class="company-table">
      <tr><th>運営店舗</th><td>レクサスLX専門高価買取JP</td></tr>
      <tr><th>運営会社</th><td>カーショップグローリー（株式会社ライジングサン）</td></tr>
      <tr><th>代表取締役</th><td>小塚 洋範</td></tr>
      <tr><th>創業</th><td>平成9年（1997年）</td></tr>
      <tr><th>所在地</th><td>愛知県一宮市大和町南高井字袋田３番</td></tr>
      <tr><th>営業時間</th><td>10:00 - 18:00</td></tr>
      <tr><th>定休日</th><td>毎週火曜日</td></tr>
      <tr><th>事業内容</th><td>輸入車・スーパーカー・レクサスLXの販売 / 高価買取 / 委託販売 / 自社認証整備工場</td></tr>
      <tr><th>公式サイト</th><td><a href="https://carshop-glory.jp/" target="_blank" rel="noopener">https://carshop-glory.jp/</a></td></tr>
      <tr><th>メール</th><td><a href="mailto:carshopglory.yasuda@gmail.com">carshopglory.yasuda@gmail.com</a></td></tr>
    </table>
  </div>
</section>

<!-- 買取コラム（最新記事） -->
<?php if (!empty($latestPosts)): ?>
<section id="blog-latest" class="blog-latest">
  <div class="container">
    <h2 class="section-title">
      <span class="st-en">COLUMN</span>
      <span class="st-jp"><strong>買取コラム</strong></span>
    </h2>
    <p class="blog-latest-lead">レクサスLXの買取相場・高く売るコツ・グレード別の査定ポイントを専門店が解説します。</p>
    <div class="blog-latest-grid">
      <?php foreach ($latestPosts as $p):
        $url   = '/blog/article.php?slug=' . rawurlencode($p['slug']);
        $thumb = function_exists('safe_img_name') ? safe_img_name($p['image'] ?? '') : '';
        $img   = $thumb !== '' ? (UPLOADS_URL . '/' . rawurlencode($thumb)) : '/ogp.jpg';
        $date  = substr($p['created'] ?? '', 0, 10);
      ?>
      <article class="blog-latest-card">
        <a href="<?= e($url) ?>" class="blc-thumb">
          <img src="<?= e($img) ?>" alt="<?= e($p['title']) ?>" loading="lazy" decoding="async" width="400" height="250">
        </a>
        <div class="blc-body">
          <?php if ($date): ?><time class="blc-date" datetime="<?= e($date) ?>"><?= e(date('Y年n月j日', strtotime($date))) ?></time><?php endif; ?>
          <h3 class="blc-title"><a href="<?= e($url) ?>"><?= e($p['title']) ?></a></h3>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="blog-latest-more">
      <a href="/blog/" class="blog-latest-link">買取コラムをもっと見る →</a>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="site-footer">
  <p class="footer-nav"><a href="/blog/">買取コラム</a></p>
  <p class="copyright">© 2026 レクサスLX専門高価買取JP / カーショップグローリー（株式会社ライジングサン）</p>
</footer>

<!-- 固定フッターCTAバー（モバイル用） -->
<div class="fixed-cta-bar" role="navigation" aria-label="お問い合わせ">
  <a href="tel:0586-47-6055" class="fcta-btn fcta-tel">
    <svg class="fcta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="22" height="22"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.61 21 3 13.39 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.21 2.2z"/></svg>
    <span class="fcta-label">電話で確認</span>
    <span class="fcta-shine" aria-hidden="true"></span>
  </a>
  <a href="https://lin.ee/XyL9Wbh" class="fcta-btn fcta-line" target="_blank" rel="noopener">
    <svg class="fcta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="22" height="22"><path d="M12 2C6.48 2 2 6.05 2 11.08c0 3.52 2.22 6.6 5.56 8.34l-.56 2.08c-.08.3.23.56.5.39l2.55-1.57c.79.11 1.6.17 2.45.17 5.52 0 10-4.05 10-9.08C22 6.05 17.52 2 12 2zm-3 11.5H7v-5h1.5v5zm3 0h-1.5V8h1.5v5.5zm3 0H13.5v-3h1.5v3z"/></svg>
    <span class="fcta-label">LINEで確認</span>
    <span class="fcta-shine" aria-hidden="true"></span>
  </a>
  <a href="#assessment-form" class="fcta-btn fcta-mail" id="fcta-form-btn">
    <svg class="fcta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="22" height="22"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
    <span class="fcta-label">無料査定</span>
    <span class="fcta-shine" aria-hidden="true"></span>
  </a>
</div>

<script>
  // メニュートグル
  const mt = document.getElementById('menuToggle');
  const gm = document.getElementById('globalmenu');
  if (mt && gm) {
    mt.addEventListener('click', () => {
      mt.classList.toggle('open');
      gm.classList.toggle('open');
    });
    gm.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        mt.classList.remove('open');
        gm.classList.remove('open');
      });
    });
  }
  // スムーススクロール
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href');
      if (id.length > 1 && document.querySelector(id)) {
        e.preventDefault();
        document.querySelector(id).scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
  // スクロール出現アニメーション
  const io = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) {
        en.target.classList.add('is-show');
        io.unobserve(en.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.model-list li, .reason-list li, .flow-list li, .doc-card, .qa-list > div, .company-table, .lead, .price-note, .value-card, .value-table-wrap, .value-lead').forEach(el => {
    el.classList.add('reveal');
    io.observe(el);
  });
  // 査定申込フォーム送信（send.php → carshopglory.yasuda@gmail.com 宛）
  var form = document.getElementById('inquiryForm');
  if (form) {
    form.addEventListener('submit', async function(e) {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      var status = document.getElementById('form-status');
      var btn = form.querySelector('.form-submit');
      btn.disabled = true;
      btn.textContent = '送信中…';
      if (status) status.textContent = '';
      var data = new FormData(form);
      var body = {};
      data.forEach(function(v, k) {
        if (k in body) {
          if (!Array.isArray(body[k])) body[k] = [body[k]];
          body[k].push(v);
        } else {
          body[k] = v;
        }
      });
      try {
        var res = await fetch('./send.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
          body: JSON.stringify(body)
        });
        var json = await res.json().catch(function(){ return {}; });
        if (res.ok && json.ok) {
          if (status) { status.textContent = '✅ 送信が完了しました。担当者よりご連絡いたします。'; status.style.color = '#4ade80'; }
          form.reset();
        } else {
          throw new Error(json.error || '');
        }
      } catch(err) {
        if (status) { status.textContent = '❌ 送信に失敗しました。お電話またはLINEでご連絡ください。'; status.style.color = '#f87171'; }
      }
      btn.disabled = false;
      btn.textContent = '無料査定を申し込む';
    });
  }
</script>
</body>
</html>
