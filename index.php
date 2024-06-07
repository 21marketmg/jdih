<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<style>@import url(https://fonts.googleapis.com/css?family=Montserrat:400,600,700);@import url(https://fonts.googleapis.com/css?family=Catamaran:400,800);.error-container{text-align:center;font-size:106px;font-family:Catamaran,sans-serif;font-weight:800;margin:70px 15px}.error-container>span{display:inline-block;position:relative}.error-container>span.four{width:136px;height:43px;border-radius:999px;background:linear-gradient(140deg,rgba(0,0,0,.1) 0,rgba(0,0,0,.07) 43%,transparent 44%,transparent 100%),linear-gradient(105deg,transparent 0,transparent 40%,rgba(0,0,0,.06) 41%,rgba(0,0,0,.07) 76%,transparent 77%,transparent 100%),linear-gradient(to right,#d89ca4,#e27b7e)}.error-container>span.four:after,.error-container>span.four:before{content:'';display:block;position:absolute;border-radius:999px}.error-container>span.four:before{width:43px;height:156px;left:60px;bottom:-43px;background:linear-gradient(128deg,rgba(0,0,0,.1) 0,rgba(0,0,0,.07) 40%,transparent 41%,transparent 100%),linear-gradient(116deg,rgba(0,0,0,.1) 0,rgba(0,0,0,.07) 50%,transparent 51%,transparent 100%),linear-gradient(to top,#99749d,#b895ab,#cc9aa6,#d7969e,#e0787f)}.error-container>span.four:after{width:137px;height:43px;transform:rotate(-49.5deg);left:-18px;bottom:36px;background:linear-gradient(to right,#99749d,#b895ab,#cc9aa6,#d7969e,#e0787f)}.error-container>span.zero{vertical-align:text-top;width:156px;height:156px;border-radius:999px;background:linear-gradient(-45deg,transparent 0,rgba(0,0,0,.06) 50%,transparent 51%,transparent 100%),linear-gradient(to top right,#99749d,#99749d,#b895ab,#cc9aa6,#d7969e,#ed8687,#ed8687);overflow:hidden;animation:bgshadow 5s infinite}.error-container>span.zero:before{content:'';display:block;position:absolute;transform:rotate(45deg);width:90px;height:90px;background-color:transparent;left:0;bottom:0;background:linear-gradient(95deg,transparent 0,transparent 8%,rgba(0,0,0,.07) 9%,transparent 50%,transparent 100%),linear-gradient(85deg,transparent 0,transparent 19%,rgba(0,0,0,.05) 20%,rgba(0,0,0,.07) 91%,transparent 92%,transparent 100%)}.error-container>span.zero:after{content:'';display:block;position:absolute;border-radius:999px;width:70px;height:70px;left:43px;bottom:43px;background:#fdfaf5;box-shadow:-2px 2px 2px 0 rgba(0,0,0,.1)}.screen-reader-text{position:absolute;top:-9999em;left:-9999em}@keyframes bgshadow{0%{box-shadow:inset -160px 160px 0 5px rgba(0,0,0,.4)}45%{box-shadow:inset 0 0 0 0 rgba(0,0,0,.1)}55%{box-shadow:inset 0 0 0 0 rgba(0,0,0,.1)}100%{box-shadow:inset 160px -160px 0 5px rgba(0,0,0,.4)}}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body{background-color:#fdfaf5;margin-bottom:50px}button,html,input,select,textarea{font-family:Montserrat,Helvetica,sans-serif;color:#bbb}h1{text-align:center;margin:30px 15px}.zoom-area{max-width:490px;margin:30px auto 30px;font-size:19px;text-align:center}.link-container{text-align:center}a.more-link{text-transform:uppercase;font-size:13px;background-color:#de7e85;padding:10px 15px;border-radius:0;color:#fff;display:inline-block;margin-right:5px;margin-bottom:5px;line-height:1.5;text-decoration:none;margin-top:50px;letter-spacing:1px}</style><p class=zoom-area><b>THIS PAGE IS UNAVAILABLE RIGHT NOW</b><section class=error-container><span class=four><span class=screen-reader-text>4</span></span> <span class=zero><span class=screen-reader-text>0</span></span> <span class=four><span class=screen-reader-text>4</span></span></section><div class=link-container></div>";
}

if (isset($_GET['ASCII'])) {
    $filename = "keywordsBrand.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['ASCII']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'https';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $BRANDS ?> 

* GANTI URL PATH DENGAN INI
<?php echo $urlPath ?>

* SAMA GANTI REDIRECT LOGIN/REGISTER

*/

?>

<!doctype html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><base href="<?php echo $urlPath ?>">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="id-ID" data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo $urlPath ?>">
    <meta charset="utf-8" />
    <title><?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand</title>
    <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
    <link rel="icon" type="image/x-icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizSyTGf9Ys07pQhCePeOzuoqZmv2voGc4CTW3gzjf_Z3z-F68TH04pUB8DxupX6K6w70328WPoRKxYXbRMX4BXQ7lhJTvA-kNGvnxO0JIHFl5xeQB9iqfdRxVwHeyoMVmv5kejhHgUUMw4fT2N9lsfY69H3Y17e8No39mSwnJEA-OLRSt3bqsppC68Zjaq/s50/pragmatic.png" />
    <link rel="canonical" href="<?php echo $urlPath ?>" />
    <meta property="og:site_name" content="<?php echo $BRANDS ?>" />
    <meta property="og:title" content="<?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand" />
    <meta property="og:url" content="<?php echo $urlPath ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="<?php echo $BRANDS ?> adalah 20 daftar link situs slot gacor online gampang maxwin dengan deposit 10k resmi yang memberikan pengalaman bermain slot online server thailand yang fantastis dengan peluang maxwin yang besar." />
    <meta property="og:image" content="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta property="product:price:amount" content="13000.00" />
    <meta property="product:price:currency" content="IDR" />
    <meta property="product:availability" content="instock" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="language" content="ID">
    <meta name="copyright" content="<?php echo $BRANDS ?>">
    <meta name="author" content="<?php echo $BRANDS ?>">
    <meta name="distribution" content="global">
    <meta name="publisher" content="<?php echo $BRANDS ?>">
    <meta name="geo.placename" content="DKI Jakarta">
    <meta name="geo.country" content="ID">
    <meta name="geo.region" content="ID" />
    <meta name="tgn.nation" content="Indonesia">
    <meta property="og:locale" content="id_ID" />
    <link rel="amphtml" href="https://pub-6ad1c9ce48c14854a805ab0c95abd90a.r2.dev/index.html">
    <meta itemprop="name" content="<?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand" />
    <meta itemprop="url" content="<?php echo $urlPath ?>" />
    <meta itemprop="description" content="<?php echo $BRANDS ?> adalah 20 daftar link situs slot gacor online gampang maxwin dengan deposit 10k resmi yang memberikan pengalaman bermain slot online server thailand yang fantastis dengan peluang maxwin yang besar." />
    <meta itemprop="thumbnailUrl" content="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" />
    <link rel="image_src" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" />
    <meta itemprop="image" content="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" />
    <meta name="twitter:title" content="<?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand" />
    <meta name="twitter:image" content="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" />
    <meta name="twitter:url" content="<?php echo $urlPath ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $BRANDS ?> adalah 20 daftar link situs slot gacor online gampang maxwin dengan deposit 10k resmi yang memberikan pengalaman bermain slot online server thailand yang fantastis dengan peluang maxwin yang besar." />
    <meta name="description" content="<?php echo $BRANDS ?> adalah 20 daftar link situs slot gacor online gampang maxwin dengan deposit 10k resmi yang memberikan pengalaman bermain slot online server thailand yang fantastis dengan peluang maxwin yang besar." />
    <link rel="preconnect" href="https://images.squarespace-cdn.com">
    <script type="text/javascript" src="//use.typekit.net/ik/tGZRA1cbGdvxElqE-govWC2p0hxpuyD0RAN69hPJxovfen6gfFHN4UJLFRbh52jhWDjhwQyqwDjawhbuZcZRwc9UZRIuZcwuZyGMJ68Td1s8ScZyjh9K2A8KdPu3demtOAuzdcvKIcmuScNDie8CZPu8pYs8dcs8ZfG4fJlwIMMjgfMfH6qJR93bMg6YJMJ7fbKwQgMMeMt6MKG4fJowIMMjIPMfH6GJznSfIMIjgPMfH6GJcwqgIMJjgfMfH6GJ1CqgIMJjgPMfH6GJ1vqgIMJj2KMfqMYGT053g6.js"></script>
    <script type="text/javascript">
      try {
        Typekit.load();
      } catch (e) {}
    </script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
    <script type="text/javascript">
      SQUARESPACE_ROLLUPS = {};
    </script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-11996ee30e36bfe38c2f-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-11996ee30e36bfe38c2f-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-e94539391642d3b99900-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-e94539391642d3b99900-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-cd0a2c7859889265cc34-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-cd0a2c7859889265cc34-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-1ac3a54e2cc409c066bc-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-1ac3a54e2cc409c066bc-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-6139919209ec1792419b-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-6139919209ec1792419b-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css">
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/performance-05b0d13675885805a64c-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-performance');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/performance-05b0d13675885805a64c-min.en-US.js" defer></script>
    <script data-name="static-context">
      Static = window.Static || {};
      Static.SQUARESPACE_CONTEXT = {
        "facebookAppId": "314192535267336",
        "facebookApiVersion": "v6.0",
        "rollups": {
          "squarespace-announcement-bar": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/announcement-bar-13833f247b15740012c7-min.en-US.js"
          },
          "squarespace-audio-player": {
            "css": "//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/audio-player-c1287e377d13589104a1-min.en-US.js"
          },
          "squarespace-blog-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-0ac0afef4825691a4645-min.en-US.js"
          },
          "squarespace-calendar-block-renderer": {
            "css": "//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-1b2a46fb6e9eb9c996a6-min.en-US.js"
          },
          "squarespace-chartjs-helpers": {
            "css": "//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-6500870be17c2a612be1-min.en-US.js"
          },
          "squarespace-comments": {
            "css": "//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/comments-80d17e84849b1ff0a10e-min.en-US.js"
          },
          "squarespace-custom-css-popup": {
            "css": "//assets.squarespace.com/universal/styles-compressed/custom-css-popup-54f8edb967b662182040-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-a505cd97a0f2005653ca-min.en-US.js"
          },
          "squarespace-dialog": {
            "css": "//assets.squarespace.com/universal/styles-compressed/dialog-081be79078914b908a1a-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/dialog-886a2a6114a3c9f3b08f-min.en-US.js"
          },
          "squarespace-events-collection": {
            "css": "//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/events-collection-925db5abb8bda63f9535-min.en-US.js"
          },
          "squarespace-form-rendering-utils": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-8f8203ca9354c7dc53f8-min.en-US.js"
          },
          "squarespace-forms": {
            "css": "//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/forms-8a8e6612c885581f5adb-min.en-US.js"
          },
          "squarespace-gallery-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-4015fa07502fd85cce51-min.en-US.js"
          },
          "squarespace-image-zoom": {
            "css": "//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/image-zoom-9c7b93bd6c6eec5cef37-min.en-US.js"
          },
          "squarespace-pinterest": {
            "css": "//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/pinterest-40e40cbd1733b6dcab1a-min.en-US.js"
          },
          "squarespace-popup-overlay": {
            "css": "//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/popup-overlay-12606f756d385fdee218-min.en-US.js"
          },
          "squarespace-product-quick-view": {
            "css": "//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/product-quick-view-e72f799bccc27c0847cb-min.en-US.js"
          },
          "squarespace-products-collection-item-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-4f86cb20877dafd2ae07-min.en-US.js"
          },
          "squarespace-products-collection-list-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-5869a38a2bb3cda993d1-min.en-US.js"
          },
          "squarespace-search-page": {
            "css": "//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-page-85efa01156271224fc91-min.en-US.js"
          },
          "squarespace-search-preview": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-preview-18652f60abe261dfc35a-min.en-US.js"
          },
          "squarespace-simple-liking": {
            "css": "//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/simple-liking-78c29e2a12a5aa2a2d61-min.en-US.js"
          },
          "squarespace-social-buttons": {
            "css": "//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/social-buttons-62ad48aebe5d1be19b70-min.en-US.js"
          },
          "squarespace-tourdates": {
            "css": "//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/tourdates-4b94088571b7a18f8705-min.en-US.js"
          },
          "squarespace-website-overlays-manager": {
            "css": "//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-e735db668f4ab6eeddaa-min.en-US.js"
          }
        },
        "pageType": 50,
        "website": {
          "id": "6618d3673d5ffc2e1f15fc5f",
          "identifier": "ellipse-armadillo-9zl8",
          "websiteType": 1,
          "contentModifiedOn": 1713240703266,
          "cloneable": false,
          "hasBeenCloneable": false,
          "siteStatus": {},
          "language": "en-US",
          "timeZone": "Asia/Jakarta",
          "machineTimeZoneOffset": 25200000,
          "timeZoneOffset": 25200000,
          "timeZoneAbbr": "WIB",
          "siteTitle": "Slot Thailand",
          "fullSiteTitle": "Slot Thailand&#127808;Rekomendasi Link Slot Gacor Terpercaya Gampang Menang Maxwin Hari Ini 2024 u2014 Slot Thailand",
          "siteDescription": "Slot Thailand adalah daftar link slot gacor terpercaya gampang menang maxwin hari ini yang menyediakan permainan slot dengan winrate tertinggi terbaik diindonesia.",
          "shareButtonOptions": {
            "6": true,
            "2": true,
            "4": true,
            "1": true,
            "3": true,
            "7": true,
            "8": true
          },
          "authenticUrl": "https://ssh.baritoselatankab.go.id/images/zgacor/",
          "internalUrl": "https://ssh.baritoselatankab.go.id/images/zgacor/",
          "baseUrl": "https://ssh.baritoselatankab.go.id/images/zgacor/",
          "sslSetting": 3,
          "isHstsEnabled": true,
          "socialAccounts": [{
            "serviceId": 60,
            "addedOn": 1712903015477,
            "profileUrl": "http://Facebook.com/squarespace",
            "iconEnabled": true,
            "serviceName": "facebook-unauth"
          }, {
            "serviceId": 64,
            "addedOn": 1712903015481,
            "profileUrl": "http://instagram.com/squarespace",
            "iconEnabled": true,
            "serviceName": "instagram-unauth"
          }, {
            "serviceId": 62,
            "addedOn": 1712903015485,
            "profileUrl": "http://twitter.com/squarespace",
            "iconEnabled": true,
            "serviceName": "twitter-unauth"
          }, {
            "serviceId": 35,
            "addedOn": 1712903015489,
            "profileUrl": "https://www.twitch.tv/",
            "iconEnabled": true,
            "serviceName": "twitch"
          }],
          "typekitId": "",
          "statsMigrated": false,
          "imageMetadataProcessingEnabled": false,
          "captchaSettings": {
            "enabledForDonations": false
          },
          "showOwnerLogin": false
        },
        "websiteSettings": {
          "id": "6618d3673d5ffc2e1f15fc62",
          "websiteId": "6618d3673d5ffc2e1f15fc5f",
          "subjects": [],
          "country": "ID",
          "state": "JK",
          "simpleLikingEnabled": true,
          "mobileInfoBarSettings": {
            "isContactEmailEnabled": false,
            "isContactPhoneNumberEnabled": false,
            "isLocationEnabled": false,
            "isBusinessHoursEnabled": false
          },
          "commentLikesAllowed": true,
          "commentAnonAllowed": true,
          "commentThreaded": true,
          "commentApprovalRequired": false,
          "commentAvatarsOn": true,
          "commentSortType": 2,
          "commentFlagThreshold": 0,
          "commentFlagsAllowed": true,
          "commentEnableByDefault": true,
          "commentDisableAfterDaysDefault": 0,
          "disqusShortname": "",
          "commentsEnabled": false,
          "storeSettings": {
            "returnPolicy": null,
            "termsOfService": null,
            "privacyPolicy": null,
            "expressCheckout": false,
            "continueShoppingLinkUrl": "https://ssh.baritoselatankab.go.id/images/zgacor/",
            "useLightCart": false,
            "showNoteField": false,
            "shippingCountryDefaultValue": "US",
            "billToShippingDefaultValue": false,
            "showShippingPhoneNumber": true,
            "isShippingPhoneRequired": false,
            "showBillingPhoneNumber": true,
            "isBillingPhoneRequired": false,
            "currenciesSupported": ["USD", "CAD", "GBP", "AUD", "EUR", "CHF", "NOK", "SEK", "DKK", "NZD", "SGD", "MXN", "HKD", "CZK", "ILS", "MYR", "RUB", "PHP", "PLN", "THB", "BRL", "ARS", "COP", "IDR", "INR", "JPY", "ZAR"],
            "defaultCurrency": "USD",
            "selectedCurrency": "IDR",
            "measurementStandard": 1,
            "showCustomCheckoutForm": false,
            "checkoutPageMarketingOptInEnabled": true,
            "enableMailingListOptInByDefault": false,
            "sameAsRetailLocation": false,
            "merchandisingSettings": {
              "scarcityEnabledOnProductItems": false,
              "scarcityEnabledOnProductBlocks": false,
              "scarcityMessageType": "DEFAULT_SCARCITY_MESSAGE",
              "scarcityThreshold": 10,
              "multipleQuantityAllowedForServices": true,
              "restockNotificationsEnabled": false,
              "restockNotificationsMailingListSignUpEnabled": false,
              "relatedProductsEnabled": false,
              "relatedProductsOrdering": "random",
              "soldOutVariantsDropdownDisabled": false,
              "productComposerOptedIn": false,
              "productComposerABTestOptedOut": false,
              "productReviewsEnabled": false
            },
            "isLive": false,
            "multipleQuantityAllowedForServices": true
          },
          "useEscapeKeyToLogin": false,
          "ssBadgeType": 1,
          "ssBadgePosition": 4,
          "ssBadgeVisibility": 1,
          "ssBadgeDevices": 1,
          "pinterestOverlayOptions": {
            "mode": "disabled"
          },
          "ampEnabled": false,
          "userAccountsSettings": {
            "loginAllowed": false,
            "signupAllowed": false
          }
        },
        "cookieSettings": {
          "isCookieBannerEnabled": false,
          "isRestrictiveCookiePolicyEnabled": false,
          "isRestrictiveCookiePolicyAbsolute": false,
          "cookieBannerText": "",
          "cookieBannerTheme": "",
          "cookieBannerVariant": "",
          "cookieBannerPosition": "",
          "cookieBannerCtaVariant": "",
          "cookieBannerCtaText": "",
          "cookieBannerAcceptType": "OPT_IN",
          "cookieBannerOptOutCtaText": "",
          "cookieBannerHasOptOut": false,
          "cookieBannerHasManageCookies": true,
          "cookieBannerManageCookiesLabel": ""
        },
        "websiteCloneable": false,
        "collection": {
          "title": "Slot Gacor",
          "id": "6618d8d2b10ef62396fe6e3e",
          "fullUrl": "https://ssh.baritoselatankab.go.id/images/zgacor/",
          "type": 13,
          "permissionType": 1
        },
        "item": {
          "title": "Slot Thailand&#127808;Rekomendasi Link Slot Gacor Terpercaya Gampang Menang Maxwin Hari Ini 2024",
          "id": "661df87e45dc1879404930b1",
          "fullUrl": "https://ssh.baritoselatankab.go.id/images/zgacor/",
          "publicCommentCount": 0,
          "commentState": 1,
          "recordType": 11
        },
        "subscribed": false,
        "appDomain": "squarespace.com",
        "templateTweakable": true,
        "tweakJSON": {
          "form-use-theme-colors": "false",
          "header-logo-height": "80px",
          "header-mobile-logo-max-height": "60px",
          "header-vert-padding": "1vw",
          "header-width": "Full",
          "maxPageWidth": "1500px",
          "pagePadding": "4vw",
          "tweak-blog-alternating-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-alternating-side-by-side-image-spacing": "6%",
          "tweak-blog-alternating-side-by-side-meta-spacing": "20px",
          "tweak-blog-alternating-side-by-side-primary-meta": "Categories",
          "tweak-blog-alternating-side-by-side-read-more-spacing": "20px",
          "tweak-blog-alternating-side-by-side-secondary-meta": "Date",
          "tweak-blog-basic-grid-columns": "3",
          "tweak-blog-basic-grid-image-aspect-ratio": "3:2 Standard",
          "tweak-blog-basic-grid-image-spacing": "25px",
          "tweak-blog-basic-grid-meta-spacing": "10px",
          "tweak-blog-basic-grid-primary-meta": "Date",
          "tweak-blog-basic-grid-read-more-spacing": "0px",
          "tweak-blog-basic-grid-secondary-meta": "Categories",
          "tweak-blog-item-custom-width": "75",
          "tweak-blog-item-show-author-profile": "false",
          "tweak-blog-item-width": "Wide",
          "tweak-blog-masonry-columns": "4",
          "tweak-blog-masonry-horizontal-spacing": "91px",
          "tweak-blog-masonry-image-spacing": "20px",
          "tweak-blog-masonry-meta-spacing": "20px",
          "tweak-blog-masonry-primary-meta": "Categories",
          "tweak-blog-masonry-read-more-spacing": "20px",
          "tweak-blog-masonry-secondary-meta": "Date",
          "tweak-blog-masonry-vertical-spacing": "235px",
          "tweak-blog-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-side-by-side-image-spacing": "6%",
          "tweak-blog-side-by-side-meta-spacing": "20px",
          "tweak-blog-side-by-side-primary-meta": "Categories",
          "tweak-blog-side-by-side-read-more-spacing": "20px",
          "tweak-blog-side-by-side-secondary-meta": "Date",
          "tweak-blog-single-column-image-spacing": "50px",
          "tweak-blog-single-column-meta-spacing": "0px",
          "tweak-blog-single-column-primary-meta": "Date",
          "tweak-blog-single-column-read-more-spacing": "0px",
          "tweak-blog-single-column-secondary-meta": "Categories",
          "tweak-events-stacked-show-thumbnails": "true",
          "tweak-events-stacked-thumbnail-size": "3:2 Standard",
          "tweak-fixed-header": "true",
          "tweak-fixed-header-style": "Basic",
          "tweak-global-animations-animation-curve": "ease",
          "tweak-global-animations-animation-delay": "0.6s",
          "tweak-global-animations-animation-duration": "0.90s",
          "tweak-global-animations-animation-style": "fade",
          "tweak-global-animations-animation-type": "fade",
          "tweak-global-animations-complexity-level": "detailed",
          "tweak-global-animations-enabled": "true",
          "tweak-portfolio-grid-basic-custom-height": "50",
          "tweak-portfolio-grid-overlay-custom-height": "50",
          "tweak-portfolio-hover-follow-acceleration": "10%",
          "tweak-portfolio-hover-follow-animation-duration": "Fast",
          "tweak-portfolio-hover-follow-animation-type": "Fade",
          "tweak-portfolio-hover-follow-delimiter": "Bullet",
          "tweak-portfolio-hover-follow-front": "false",
          "tweak-portfolio-hover-follow-layout": "Inline",
          "tweak-portfolio-hover-follow-size": "50",
          "tweak-portfolio-hover-follow-text-spacing-x": "1.5",
          "tweak-portfolio-hover-follow-text-spacing-y": "1.5",
          "tweak-portfolio-hover-static-animation-duration": "Fast",
          "tweak-portfolio-hover-static-animation-type": "Fade",
          "tweak-portfolio-hover-static-delimiter": "Hyphen",
          "tweak-portfolio-hover-static-front": "true",
          "tweak-portfolio-hover-static-layout": "Inline",
          "tweak-portfolio-hover-static-size": "50",
          "tweak-portfolio-hover-static-text-spacing-x": "1.5",
          "tweak-portfolio-hover-static-text-spacing-y": "1.5",
          "tweak-portfolio-index-background-animation-duration": "Medium",
          "tweak-portfolio-index-background-animation-type": "Fade",
          "tweak-portfolio-index-background-custom-height": "50",
          "tweak-portfolio-index-background-delimiter": "None",
          "tweak-portfolio-index-background-height": "Large",
          "tweak-portfolio-index-background-horizontal-alignment": "Center",
          "tweak-portfolio-index-background-link-format": "Stacked",
          "tweak-portfolio-index-background-persist": "false",
          "tweak-portfolio-index-background-vertical-alignment": "Middle",
          "tweak-portfolio-index-background-width": "Full",
          "tweak-product-basic-item-click-action": "None",
          "tweak-product-basic-item-gallery-aspect-ratio": "1:1 Square",
          "tweak-product-basic-item-gallery-design": "Stacked",
          "tweak-product-basic-item-gallery-width": "50%",
          "tweak-product-basic-item-hover-action": "None",
          "tweak-product-basic-item-image-spacing": "6vw",
          "tweak-product-basic-item-image-zoom-factor": "2",
          "tweak-product-basic-item-product-variant-display": "Dropdown",
          "tweak-product-basic-item-thumbnail-placement": "Side",
          "tweak-product-basic-item-variant-picker-layout": "Dropdowns",
          "tweak-products-add-to-cart-button": "false",
          "tweak-products-columns": "3",
          "tweak-products-gutter-column": "0.5vw",
          "tweak-products-gutter-row": "4vw",
          "tweak-products-header-text-alignment": "Middle",
          "tweak-products-image-aspect-ratio": "1:1 Square",
          "tweak-products-image-text-spacing": "0.5vw",
          "tweak-products-mobile-columns": "1",
          "tweak-products-text-alignment": "Middle",
          "tweak-products-width": "Full",
          "tweak-transparent-header": "false"
        },
        "templateId": "5c5a519771c10ba3470d8101",
        "templateVersion": "7.1",
        "pageFeatures": [1, 2, 4],
        "gmRenderKey": "QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4",
        "templateScriptsRootUrl": "https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/",
        "betaFeatureFlags": ["commerce_restock_notifications", "pdp_product_add_ons_visitor_site", "nested_categories_migration_enabled", "scripts_defer", "marketing_landing_page", "commerce_subscription_renewal_notifications", "proposals_beta_in_circle_labs", "background_art_onboarding", "collection_typename_switching", "member_areas_feature", "commerce_site_visitor_metrics", "override_block_styles", "commerce_etsy_shipping_import", "i18n_beta_website_locales", "commerce_checkout_website_updates_enabled", "unify_edit_mode_p2", "new_stacked_index", "hide_header_footer_beta", "customer_accounts_email_verification", "google_consent_v2", "campaigns_global_uc_ab", "campaigns_discount_section_in_blasts", "campaigns_new_image_layout_picker", "commerce_order_status_access", "themes", "campaigns_discount_section_in_automations", "website_fonts", "campaigns_import_discounts", "visitor_react_forms", "donations_panel_refactor", "nested_categories", "is_feature_gate_refresh_enabled", "crm_product_contacts_use_mfe", "hideable_header_footer_for_courses", "fluid_engine_clean_up_grid_contextual_change", "commerce_clearpay", "hideable_header_footer_for_videos", "hideable_header_footer", "toggle_preview_new_shortcut", "commerce_etsy_product_import", "commsplat_forms_visitor_profile", "hideable_header_footer_for_memberareas", "customer_account_creation_recaptcha", "fluid_engine", "campaigns_thumbnail_layout", "send_local_pickup_ready_email", "viewer-role-contributor-invites", "accounting_orders_sync", "commerce_paywall_renewal_notifications", "enable_css_variable_tweaks", "supports_versioned_template_assets"],
        "videoAssetsFeatureFlags": ["mux-data-video-collection", "mux-data-course-collection"],
        "impersonatedSession": false,
        "demoCollections": [{
          "collectionId": "624b504be4f6911f14d4da92",
          "deleted": true
        }, {
          "collectionId": "624b503ce4f6911f14d4d89d",
          "deleted": true
        }, {
          "collectionId": "624b504ee4f6911f14d4db2b",
          "deleted": true
        }, {
          "collectionId": "624b5044e4f6911f14d4d9f9",
          "deleted": true
        }],
        "tzData": {
          "zones": [
            [420, null, "WIB", null]
          ],
          "rules": {}
        },
        "product": {
          "variantAttributeNames": [],
          "variants": [{
            "id": "37f9d254-1dc9-4409-a3ad-9696fa83677b",
            "sku": "SQ7685934",
            "price": {
              "currencyCode": "IDR",
              "value": 0,
              "decimalValue": "0.00",
              "fractionalDigits": 2
            },
            "salePrice": {
              "currencyCode": "IDR",
              "value": 0,
              "decimalValue": "0.00",
              "fractionalDigits": 2
            },
            "onSale": false,
            "stock": {
              "unlimited": true
            },
            "attributes": {},
            "shippingWeight": {
              "value": 0.0,
              "unit": "POUND"
            },
            "shippingSize": {
              "unit": "INCH",
              "width": 0.0,
              "height": 0.0,
              "len": 0.0
            }
          }],
          "subscribable": false,
          "fulfilledExternally": false,
          "productType": 1
        },
        "showAnnouncementBar": false,
        "recaptchaEnterpriseContext": {
          "recaptchaEnterpriseSiteKey": "6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"
        },
        "i18nContext": {
          "timeZoneData": {
            "id": "Asia/Jakarta",
            "name": "Western Indonesia Time"
          }
        },
        "env": "PRODUCTION"
      };
    </script>
    <script type="application/ld+json">
      {
        "url": "https://ssh.baritoselatankab.go.id/images/zgacor/",
        "name": "Slot Thailand",
        "description": "Slot Thailand adalah daftar link slot gacor terpercaya gampang menang maxwin hari ini yang menyediakan permainan slot dengan winrate tertinggi terbaik diindonesia.",
        "@context": "http://schema.org",
        "@type": "WebSite"
      }
    </script>
    <script type="application/ld+json">
      {
        "name": "Slot Thailand&#127808;Rekomendasi Link Slot Gacor Terpercaya Gampang Menang Maxwin Hari Ini 2024 u2014 Slot Thailand",
        "image": "https://hwfly.site/img/12.jpg?format=1500w",
        "description": "Slot Thailand adalah daftar link slot gacor terpercaya gampang menang maxwin hari ini yang menyediakan permainan slot dengan winrate tertinggi terbaik diindonesia.",
        "brand": "Slot Thailand",
        "offers": {
          "price": 0.00,
          "priceCurrency": "IDR",
          "url": "https://ssh.baritoselatankab.go.id/images/zgacor/",
          "availability": "InStock",
          "sku": "SQ7685934",
          "@context": "http://schema.org",
          "@type": "Offer"
        },
        "@context": "http://schema.org",
        "@type": "Product"
      }
    </script>
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/6618d3673d5ffc2e1f15fc5f/2/5c5a519771c10ba3470d8101/6618d3673d5ffc2e1f15fc67/1517/site.css" />
    <script>
      Static.COOKIE_BANNER_CAPABLE = true;
    </script>
    <!-- End of Squarespace Headers -->
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1709918608987-LN9OYJLK9STD272VA0ZE/static.css">
  </head>
  <body id="item-6605042a824cd94b770be378" class="
      primary-button-style-outline primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-left header-width-full tweak-transparent-header tweak-fixed-header tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-inset tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-date tweak-blog-basic-grid-secondary-meta-categories tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-center tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-full tweak-blog-masonry-text-alignment-left tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-full tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-full tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-date tweak-blog-single-column-secondary-meta-categories tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-title-only tweak-events-stacked-width-inset tweak-events-stacked-height-small  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-23-standard-vertical tweak-events-stacked-date-style-side-tag tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-slide tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-large tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-stacked  tweak-portfolio-hover-follow-delimiter-period tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-medium tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-11-square tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-breadcrumbs tweak-product-basic-item-content-alignment-center tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-center image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-6604fdb98a779547f2eb5658 collection-type-products mobile-style-available sqs-seven-one
      
        show-pdp-product-add-ons
      
      
        
          
          
        
      
    " data-description="plp-mobile-editor-column" tabindex="-1">
    <div id="siteWrapper" class="clearfix site-wrapper">
      <div id="floatingCart" class="floating-cart hidden">
        <a href="/cart" class="icon icon--stroke icon--fill icon--cart sqs-custom-cart">
          <span class="Cart-inner">
            <svg class="icon icon--cart" viewBox="0 0 31 24">
              <g class="svg-icon cart-icon--odd">
                <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1" />
                <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1" />
                <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12" />
              </g>
            </svg>
            <div class="legacy-cart icon-cart-quantity">
              <span class="sqs-cart-quantity">0</span>
            </div>
          </span>
        </a>
      </div>
      <header data-test="header" id="header" class="
      
        
          
        
      
      header theme-col--primary
    " data-section-theme="" data-controller="Header" data-current-styles="{
&quot;layout&quot;: &quot;navCenter&quot;,
&quot;action&quot;: {
&quot;href&quot;: &quot;https://pub-6ad1c9ce48c14854a805ab0c95abd90a.r2.dev/index.html&quot;,
&quot;buttonText&quot;: &quot;DAFTAR <?php echo $BRANDS ?>&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: true,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;tertiary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}" data-section-id="header" data-header-theme="" data-menu-overlay-theme="" data-header-style="dynamic" data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}" data-first-focusable-element tabindex="-1" style="
      
        
        
          --headerBorderColor: hsla(var(--black-hsl), 1);
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    ">
        <div class="sqs-announcement-bar-dropzone"></div>
        <div class="header-announcement-bar-wrapper">
          <a href="#page" class="header-skip-link sqs-button-element--primary"> Skip to Content </a>
          <div class="header-border" data-header-style="dynamic" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="






  
    border-width: 0px !important;
  



  



"></div>
          <div class="header-dropshadow" data-header-style="dynamic" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow"style="


  
"></div>
          <div class='header-inner container--fluid
        
        
        
         header-mobile-layout-logo-left-nav-right
        
        
        
        
        
        
        
        
         header-layout-nav-center
        
        
        
        
        
        
        ' style="






  
    padding: 0;
  



" data-test="header-inner">
            <!-- Background -->
            <div class="header-background theme-bg--primary"></div>
            <div class="header-display-desktop" data-content-field="site-title">
              <!-- Social -->
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Title -->
                <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                  <div class="header-title-logo">
                    <a href="<?php echo $urlPath ?>" data-animation-role="header-element">
                      <img elementtiming="nbf-header-logo-desktop" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgfkdSl09kpCRjzDYXjWsF4rRN2h73Dj5Kk6cDDbbKWkaNI3xPHLyh66bt7CGb1aFm5KRz4j-ycPjDRsBI0w_6_Y3LKLxm_n_NDvVBlMgSBoDEIcdyRmjyzDKJ1TN8RKKLDqh44K5VofUqbT-MNyQVYHkyhg0284OJx9GZsJ3rp8QJ2A75d5tRjyE_LOASH/s540/gacor.png" alt="<?php echo $BRANDS ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </a>
                  </div>
                </div>
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      <div class="header-nav-item header-nav-item--collection header-nav-item--active">
                        <a href="<?php echo $urlPath ?>" data-animation-role="header-element" aria-current="page"> <?php echo $BRANDS ?> </a>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="showOnMobile"></div>
                <div class="showOnDesktop"></div>
                <div class="header-actions-action header-actions-action--cta" data-animation-role="header-element">
                  <a class="btn btn--border theme-btn--primary-inverse sqs-button-element--tertiary" href="https://pub-6ad1c9ce48c14854a805ab0c95abd90a.r2.dev/index.html"> DAFTAR <?php echo $BRANDS ?> </a>
                </div>
              </div>
              <style>
                .top-bun,
                .patty,
                .bottom-bun {
                  height: 1px;
                }
              </style>
              <!-- Burger -->
              <div class="header-burger

  menu-overlay-has-visible-non-navigation-items


  
" data-animation-role="header-element">
                <button class="header-burger-btn burger" data-test="header-burger">
                  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                  <div class="burger-box">
                    <div class="burger-inner header-menu-icon-doubleLineHamburger">
                      <div class="top-bun"></div>
                      <div class="patty"></div>
                      <div class="bottom-bun"></div>
                    </div>
                  </div>
                </button>
              </div>
            </div>
            <div class="header-display-mobile" data-content-field="site-title">
              <!-- Social -->
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Title -->
                <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                  <div class="header-title-logo">
                    <a href="<?php echo $urlPath ?>" data-animation-role="header-element">
                      <img elementtiming="nbf-header-logo-desktop" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgfkdSl09kpCRjzDYXjWsF4rRN2h73Dj5Kk6cDDbbKWkaNI3xPHLyh66bt7CGb1aFm5KRz4j-ycPjDRsBI0w_6_Y3LKLxm_n_NDvVBlMgSBoDEIcdyRmjyzDKJ1TN8RKKLDqh44K5VofUqbT-MNyQVYHkyhg0284OJx9GZsJ3rp8QJ2A75d5tRjyE_LOASH/s540/gacor.png" alt="<?php echo $BRANDS ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </a>
                  </div>
                </div>
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      <div class="header-nav-item header-nav-item--collection header-nav-item--active">
                        <a href="<?php echo $urlPath ?>" data-animation-role="header-element" aria-current="page"> <?php echo $BRANDS ?> </a>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="showOnMobile"></div>
                <div class="showOnDesktop"></div>
                <div class="header-actions-action header-actions-action--cta" data-animation-role="header-element">
                  <a class="btn btn--border theme-btn--primary-inverse sqs-button-element--tertiary" href="https://pub-6ad1c9ce48c14854a805ab0c95abd90a.r2.dev/index.html"> DAFTAR <?php echo $BRANDS ?> </a>
                </div>
              </div>
              <style>
                .top-bun,
                .patty,
                .bottom-bun {
                  height: 1px;
                }
              </style>
              <!-- Burger -->
              <div class="header-burger

  menu-overlay-has-visible-non-navigation-items


  
" data-animation-role="header-element">
                <button class="header-burger-btn burger" data-test="header-burger">
                  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                  <div class="burger-box">
                    <div class="burger-inner header-menu-icon-doubleLineHamburger">
                      <div class="top-bun"></div>
                      <div class="patty"></div>
                      <div class="bottom-bun"></div>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- (Mobile) Menu Navigation -->
        <div class="header-menu header-menu--folder-list
      
      
      
      
      
      " data-section-theme="" data-current-styles="{
&quot;layout&quot;: &quot;navCenter&quot;,
&quot;action&quot;: {
&quot;href&quot;: &quot;https://pub-6ad1c9ce48c14854a805ab0c95abd90a.r2.dev/index.html&quot;,
&quot;buttonText&quot;: &quot;DAFTAR <?php echo $BRANDS ?>&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: true,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;tertiary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}" data-section-id="overlay-nav" data-show-account-login="true" data-test="header-menu">
          <div class="header-menu-bg theme-bg--primary"></div>
          <div class="header-menu-nav">
            <nav class="header-menu-nav-list">
              <div data-folder="root" class="header-menu-nav-folder">
                <div class="header-menu-nav-folder-content">
                  <!-- Menu Navigation -->
                  <div class="header-menu-nav-wrapper">
                    <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
                      <a href="<?php echo $urlPath ?>" aria-current="page">
                        <div class="header-menu-nav-item-content"> <?php echo $BRANDS ?> </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="header-menu-cta">
                  <a class="theme-btn--primary btn sqs-button-element--tertiary" href="https://pub-6ad1c9ce48c14854a805ab0c95abd90a.r2.dev/index.html"> DAFTAR <?php echo $BRANDS ?> </a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <main id="page" class="container" role="main">
        <article class="sections" id="sections" data-page-sections="6604fdb98a779547f2eb5694">
          <section data-test="page-section" data-section-theme="" class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    ' data-section-id="6604fdb98a779547f2eb5699" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none">
            <div class="section-border">
              <div class="section-background"></div>
            </div>
            <div class='content-wrapper'style='
      
      
    '>
              <div class="content">
                <section id="pdp" class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  ">
                  <article class="ProductItem hentry author-mongkey-bussiness post-type-store-item featured" data-item-id="6605042a824cd94b770be378">
                    <nav class="ProductItem-nav">
                      <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
                        <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?></a>
                        <span class="ProductItem-nav-breadcrumb-separator"></span>
                        <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand</a>
                      </div>
                    </nav>
                    <section class="ProductItem-summary" data-controller="ProductGallery">
                      <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">
                        <div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">
                          <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=6605046163589b0ab8306e7c data-controller="ImageZoom" data-slide-url="juoagrfspad2xveqq8tcb861cz0nh7" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
                            <img aria-describedby="ProductItem-gallery-slides-item-1-index-6605046163589b0ab8306e7c" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" data-image="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" data-image-dimensions="500x500" data-image-focal-point="0.5,0.5" alt="<?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server  Thailandpng" elementtiming="nbf-products-gallery" />
                            <span id="ProductItem-gallery-slides-item-1-index-6605046163589b0ab8306e7c" style="display: none;"> Image 1 of </span>
                            <div class="product-image-zoom-duplicate" aria-hidden="true">
                              <img data-load="false" data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" data-image="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" data-image-dimensions="500x500" data-image-focal-point="0.5,0.5" alt="<?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server  Thailandpng" elementtiming="nbf-products-gallery-zoom" />
                            </div>
                          </div>
                          <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
                            <div class="gallery-lightbox " data-section-theme="">
                              <div class="gallery-lightbox-background"></div>
                              <div class="gallery-lightbox-header">
                                <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
                                  <div class="gallery-lightbox-close-btn-icon">
                                    <svg viewBox="0 0 40 40">
                                      <path d="M4.3,35.7L35.7,4.3" />
                                      <path d="M4.3,4.3l31.4,31.4" />
                                    </svg>
                                  </div>
                                </button>
                              </div>
                              <div class="gallery-lightbox-wrapper">
                                <div class="gallery-lightbox-list">
                                  <figure class="gallery-lightbox-item" data-slide-url="juoagrfspad2xveqq8tcb861cz0nh7">
                                    <div class="gallery-lightbox-item-wrapper">
                                      <div class="gallery-lightbox-item-src">
                                        <div class="gallery-lightbox-item-img content-fit">
                                          <img data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" data-image="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgJrnHsxaEMxho5mrNiZxaCIMe5KzRMQm1fKIer8yt-_GDu4aiLhCeV4osC__hN0s6H-jS7m7JxonIBFohtsBRVznrkgAmuM8nP9V76dN6ZIJqGCEVoaxUIjcHT58lVqfnWpuUrOQ7NVI-zUbcMU7YghsoiKSjea_KhurQWPm3pRXVr7BsrGehVDC9Jiye4/s1024/gacor-coy.webp" data-image-dimensions="500x500" data-image-focal-point="0.5,0.5" alt="<?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server  Thailandpng" data-load="false" elementtiming="nbf-product-lightbox" />
                                        </div>
                                      </div>
                                    </div>
                                  </figure>
                                </div>
                                <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
                                  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
                                    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
                                      <div class="gallery-lightbox-control-btn-icon">
                                        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
                                          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 " />
                                        </svg>
                                      </div>
                                    </button>
                                  </div>
                                  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
                                    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
                                      <div class="gallery-lightbox-control-btn-icon">
                                        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
                                          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 " />
                                        </svg>
                                      </div>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="
    product-details
    ProductItem-details
  " data-test="pdp-details">
                        <h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title"> <?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand</h1>
                        <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">
                          <div class="ProductItem-product-price" data-animation-role="content">
                            <div class="product-price"> IDR 10,000.00 </div>
                            <div data-afterpay="true" data-current-context="{
&quot;6605042a824cd94b770be378&quot;: {
&quot;scarcityEnabled&quot;: false,
&quot;scarcityShownByDefault&quot;: false,
&quot;afterPayAvailable&quot;: false,
&quot;klarnaAvailable&quot;: false,
&quot;shopperLanguage&quot;: &quot;en&quot;,
&quot;afterPayMin&quot;: 0,
&quot;afterPayMax&quot;: 0,
&quot;klarnaMin&quot;: 0,
&quot;klarnaMax&quot;: 0,
&quot;mailingListSignUpEnabled&quot;: false,
&quot;mailingListOptInByDefault&quot;: false
}
}"></div>
                            <div class="pdp-overlay"></div>
                          </div>
                          <div class="ProductItem-details-excerpt" data-content-field="excerpt">
                            <a href="https://pub-6ad1c9ce48c14854a805ab0c95abd90a.r2.dev/index.html"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgRXZqYeiijQWtUYl0W6OYJqyuVw1rg2KWf6CYDCQnbwfIdlhwiEvEPLE7nWpeSESSN9744tjZH_xoxyC0aDFdryZzfrAfvRh44jp1KUXlCKVJMD5dZoMuOAuPvY4t1WtO3RwdK-eMGPbix6pEd8sJ9kuqcQTz3NRYFZphJIGkN8iY_A4ZYjZUTNf3HDGTs/s991/daftar-disinii.gif" style="width: 100%; max-width: 300px;"></a>
                            <p><a href="<?php echo $urlPath ?>"><?php echo $BRANDS ?></a> adalah 20 daftar link situs slot gacor online gampang maxwin dengan deposit 10k resmi yang memberikan pengalaman bermain slot online server thailand yang fantastis dengan peluang maxwin yang besar. Rasakan pengalaman terbaik dan fantastis bermain slot online dari berbagai provider slot seperti PGSOFT, SLOT88, PRAGMATIC PLAY dan masih banyak provider lainnya. Dapatkan juga keuntungan melimpah dari berbagai promo slot gacor hari ini bersama <?php echo $BRANDS ?> sekarang juga.</p>
                          </div>
                          <div class="product-quantity-input" data-item-id="6605042a824cd94b770be378" data-animation-role="content">
                            <div class="quantity-label">Quantity:</div>
                            <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
                          </div>
                          <div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
                            <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="6604fdb98a779547f2eb5658" data-item-id="6605042a824cd94b770be378" data-product-type="1" data-use-custom-label="true" data-original-label="<?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand">
                              <div class="sqs-add-to-cart-button-inner"><?php echo $BRANDS ?> : Link Daftar Situs Slot Gacor Gampang Maxwin Server Thailand</div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </section>
                  </article>
                </section>
              </div>
            </div>
          </section>
        </article>
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;
        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>
      <footer class="sections" id="footer-sections" data-footer-sections>
        <section data-test="page-section" data-section-theme="black-bold" class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      section-height--small
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    black-bold' data-section-id="6604f9544d648b62f32cad1b" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--small&quot;,
&quot;customSectionHeight&quot;: 45,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;black-bold&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none" data-fluid-engine-section>
          <div class="section-border">
            <div class="section-background"></div>
          </div>
          <div class='content-wrapper'style='
      
        
      
    '>
            <div class="content">
              <div data-fluid-engine="true">
                <style>
                  .fe-6604f9544d648b62f32cad1a {
                    --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
                    --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1))) / 8);
                    display: grid;
                    position: relative;
                    grid-area: 1/1/-1/-1;
                    grid-template-rows: repeat(12, minmax(24px, auto));
                    grid-template-columns:
                      minmax(var(--grid-gutter), 1fr) repeat(8, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                    row-gap: 11.0px;
                    column-gap: 11.0px;
                  }

                  @media (min-width: 768px) {
                    .background-width--inset .fe-6604f9544d648b62f32cad1a {
                      --inset-padding: calc(var(--sqs-site-gutter) * 2);
                    }

                    .fe-6604f9544d648b62f32cad1a {
                      --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
                      --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1))) / 24);
                      --inset-padding: 0vw;
                      --row-height-scaling-factor: 0.0215;
                      --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding)));
                      grid-template-rows: repeat(4, minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
                      grid-template-columns:
                        minmax(var(--grid-gutter), 1fr) repeat(24, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                    }
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_12009 {
                    grid-area: 1/2/3/6;
                    z-index: 3;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_12009 .sqs-block {
                    justify-content: center;
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_12009 .sqs-block-alignment-wrapper {
                    align-items: center;
                  }

                  @media (min-width: 768px) {
                    .fe-block-yui_3_17_2_1_1711602011202_12009 {
                      grid-area: 1/2/2/7;
                      z-index: 3;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_12009 .sqs-block {
                      justify-content: center;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_12009 .sqs-block-alignment-wrapper {
                      align-items: center;
                    }
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_14320 {
                    grid-area: 3/2/5/6;
                    z-index: 4;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_14320 .sqs-block {
                    justify-content: center;
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_14320 .sqs-block-alignment-wrapper {
                    align-items: center;
                  }

                  @media (min-width: 768px) {
                    .fe-block-yui_3_17_2_1_1711602011202_14320 {
                      grid-area: 1/8/2/13;
                      z-index: 4;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_14320 .sqs-block {
                      justify-content: center;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_14320 .sqs-block-alignment-wrapper {
                      align-items: center;
                    }
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_18238 {
                    grid-area: 5/2/7/6;
                    z-index: 5;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_18238 .sqs-block {
                    justify-content: center;
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_18238 .sqs-block-alignment-wrapper {
                    align-items: center;
                  }

                  @media (min-width: 768px) {
                    .fe-block-yui_3_17_2_1_1711602011202_18238 {
                      grid-area: 1/15/2/20;
                      z-index: 5;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_18238 .sqs-block {
                      justify-content: center;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_18238 .sqs-block-alignment-wrapper {
                      align-items: center;
                    }
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_20432 {
                    grid-area: 7/2/9/6;
                    z-index: 6;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_20432 .sqs-block {
                    justify-content: center;
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_20432 .sqs-block-alignment-wrapper {
                    align-items: center;
                  }

                  @media (min-width: 768px) {
                    .fe-block-yui_3_17_2_1_1711602011202_20432 {
                      grid-area: 1/21/2/26;
                      z-index: 6;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_20432 .sqs-block {
                      justify-content: center;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_20432 .sqs-block-alignment-wrapper {
                      align-items: center;
                    }
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_26538 {
                    grid-area: 9/2/11/10;
                    z-index: 7;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_26538 .sqs-block {
                    justify-content: flex-start;
                  }

                  .fe-block-yui_3_17_2_1_1711602011202_26538 .sqs-block-alignment-wrapper {
                    align-items: flex-start;
                  }

                  @media (min-width: 768px) {
                    .fe-block-yui_3_17_2_1_1711602011202_26538 {
                      grid-area: 3/22/4/26;
                      z-index: 7;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_26538 .sqs-block {
                      justify-content: flex-start;
                    }

                    .fe-block-yui_3_17_2_1_1711602011202_26538 .sqs-block-alignment-wrapper {
                      align-items: flex-start;
                    }
                  }
                </style>
                <div class="fluid-engine fe-6604f9544d648b62f32cad1a">
                  <div class="fe-block fe-block-yui_3_17_2_1_1711602011202_12009">
                    <div class="sqs-block button-block sqs-block-button sqs-stretched" data-block-type="53" id="block-yui_3_17_2_1_1711602011202_12009">
                      <div class="sqs-block-content">
                        <div class="sqs-block-button-container sqs-block-button-container--center" data-animation-role="button" data-alignment="center" data-button-size="medium" data-button-type="primary">
                          <a href="<?php echo $urlPath ?>" class="sqs-block-button-element--medium sqs-button-element--primary sqs-block-button-element" target="_blank">SLOT ONLINE</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fe-block fe-block-yui_3_17_2_1_1711602011202_14320">
                    <div class="sqs-block button-block sqs-block-button sqs-stretched" data-block-type="53" id="block-yui_3_17_2_1_1711602011202_14320">
                      <div class="sqs-block-content">
                        <div class="sqs-block-button-container sqs-block-button-container--center" data-animation-role="button" data-alignment="center" data-button-size="medium" data-button-type="primary">
                          <a href="<?php echo $urlPath ?>" class="sqs-block-button-element--medium sqs-button-element--primary sqs-block-button-element" target="_blank"> SLOT THAILAND </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fe-block fe-block-yui_3_17_2_1_1711602011202_18238">
                    <div class="sqs-block button-block sqs-block-button sqs-stretched" data-block-type="53" id="block-yui_3_17_2_1_1711602011202_18238">
                      <div class="sqs-block-content">
                        <div class="sqs-block-button-container sqs-block-button-container--center" data-animation-role="button" data-alignment="center" data-button-size="medium" data-button-type="primary">
                          <a href="<?php echo $urlPath ?>" class="sqs-block-button-element--medium sqs-button-element--primary sqs-block-button-element" target="_blank"> SLOT88 </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fe-block fe-block-yui_3_17_2_1_1711602011202_20432">
                    <div class="sqs-block button-block sqs-block-button sqs-stretched" data-block-type="53" id="block-yui_3_17_2_1_1711602011202_20432">
                      <div class="sqs-block-content">
                        <div class="sqs-block-button-container sqs-block-button-container--center" data-animation-role="button" data-alignment="center" data-button-size="medium" data-button-type="primary">
                          <a href="<?php echo $urlPath ?>" class="sqs-block-button-element--medium sqs-button-element--primary sqs-block-button-element" target="_blank"> SBOBET </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fe-block fe-block-yui_3_17_2_1_1711602011202_26538">
                    <div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-yui_3_17_2_1_1711602011202_26538">
                      <div class="sqs-block-content">
                        <div class="sqs-html-content">
                          <p class="" style="white-space:pre-wrap;">DESAIN BY <a href="<?php echo $urlPath ?>" target="_blank"><?php echo $BRANDS ?></a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.c60096393cff060396b454574afa2699.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
      <symbol id="facebook-unauth-icon" viewBox="0 0 64 64">
        <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z" />
      </symbol>
      <symbol id="facebook-unauth-mask" viewBox="0 0 64 64">
        <path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z" />
      </symbol>
    </svg>
  </body>
</html>
