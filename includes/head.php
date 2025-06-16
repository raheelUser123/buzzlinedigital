<?php
include_once("token.php");
if (isset($_SERVER['HTTPS'])) {
  $requesMet = "https";
} else {
  $requesMet = "http";
}
?>
<?php
// Get the requested URI
$request_uri = $_SERVER['REQUEST_URI'];

// Check if the requested URI matches /home/
if ($request_uri === '/home/') {
  // Set HTTP response code 404 Not Found
  http_response_code(404);

  // Include your existing 404.php file for the content
  include('./404.php'); // Adjust the path if '404.php' is in a different directory
  exit;
}

// Continue with your application logic here
// For example, include your main application files or handle other URLs
?>
<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">
<link rel="canonical" href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TW29QTLD');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <title><?php echo isset($metaTitle) ? $metaTitle : 'Award-Winning Digital Marketing Firm | Tabsoft Marketing'; ?></title>
  <meta name="description" content="<?php echo isset($metaDescription) ? $metaDescription : 'Specializing in Digital Marketing and Ad Management, we don’t just build your online presence. We drive ROI with our result-driven services. '; ?>">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8">
  <meta name="facebook-domain-verification" content="18q1ixhjp4q0xxpaqx3yzvrf1kfroh" />
  <!-- Open Graph Meta Tags (Dynamic) -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo isset($metaTitle) ? $metaTitle : 'Award-Winning Digital Marketing Firm | Tabsoft Marketing'; ?>">
  <meta property="og:description" content="<?php echo isset($metaDescription) ? $metaDescription : 'Specializing in Digital Marketing and Ad Management, we don’t just build your online presence. We drive ROI with our result-driven services.'; ?>">
  <meta property="og:url" content="<?php echo isset($metaUrl) ? $metaUrl : 'https://www.tabsoftmarketing.com/'; ?>">
  <meta property="og:image" content="<?php echo isset($metaImage) ? $metaImage : 'https://www.tabsoftmarketing.com/assets/images/Tab-Soft-Marketing.png'; ?>">
  <link rel="shortcut icon" href="../assets/images/fav-icon.png" type="image/png">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="icon" href="../assets/images/Tab-Soft-Marketing-fav-icon.png" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <link href=" https://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "TabSoft Marketing",
      "alternateName": "Tabsoft Marketing",
      "url": "https://www.tabsoftmarketing.com/",
      "logo": "https://www.tabsoftmarketing.com/assets/images/Tab-Soft-Marketing.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "(888) 205-2301",
        "contactType": "customer service",
        "contactOption": "TollFree",
        "areaServed": ["US", "GB", "CA"],
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.facebook.com/Tabsoftmarketing",
        "https://www.instagram.com/tabsoftmarketing/"
      ]
    }
  </script>
  <style>
    .jun {
      visibility: hidden;
      position: absolute;
    }
  </style>

</head>