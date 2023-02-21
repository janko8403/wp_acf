<?php $url = $_SERVER['REQUEST_URI']; ?>

<script>
    window.dataLayer = window.dataLayer || []
    window.dataLayer.push({
        originalLocation: document.location.protocol + '//' +
            document.location.hostname +
            document.location.pathname +
            document.location.search
    });
</script>

<script>
    window.dataLayer = window.dataLayer || [];
    dataLayer.push({
        'event': 'virtualPageview',
        'virtualPageURL': '<?php echo $url; ?>' ,
        'virtualPageTitle': '<?php echo get_the_title(); ?>',
        'pageType': 'tikrow.com',
        'userStatus': 'Niezalogowany',
        'userType': '',
        'userId': ''
    });
</script>

<!-- Google Tag Manager -->
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || []
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        })
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : ''
        j.async = true
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl
        f.parentNode.insertBefore(j, f)
    })(window, document, 'script', 'dataLayer', 'GTM-PVSC2XR');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110711065-1"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-826368636"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LR28QNK05G"></script>

<script>
    window.dataLayer = window.dataLayer || []

    function gtag() {
        dataLayer.push(arguments)
    }
    gtag('js', new Date())
    gtag('config', 'UA-110711065-1', {
        'linker': {
            'domains': ['tikrow.com', 'app.tikrow.com']
        }
    })
    gtag('config', 'AW-826368636')
    gtag('config', 'G-LR28QNK05G');
</script>

<script src="https://pixel.fasttony.es/1487583684759969/" async defer></script>
<meta name="facebook-domain-verification" content="9yjh75g9233wt302886q8ro2xrpukq" />