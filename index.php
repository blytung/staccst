<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129659576-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-129659576-1');
    </script>


    <script src="https://polyfill.io/v3/polyfill.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Open+Sans:wght@700&display=swap" rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />

    <link rel="stylesheet" href="/reset.css">
    <link rel="stylesheet" href="/style.css">

    <meta property="og:title" content="Staccs | The Home of Concerts" />
    <meta property="og:description" content="Legendary concerts on demand. New titles every week.">
    <meta property="og:url" content="https://staccs.com" />
    <meta property="og:image" content="https://staccs.com/logo.png" />

    <title>Staccs | The Home of Concerts</title>
</head>
<body>
    <audio id="background-audio" src="/sound.mp3" loop muted></audio>

    <section class="mute">
        <img id="mute" src="/mute.svg" alt="Mute">
    </section>

    <main>
        <video id="logo" src="/logo.mp4" muted playsinline poster="/poster.png"></video>

        <h1 id="title" class="animate__animated">
            &nbsp;
            <noscript>
                Legendary concerts on demand
            </noscript>
        </h1>

        <p class="animate__animated animate__fadeIn">
            We’re almost ready to let you in.
            Sign up to be the first to know when you can register.
        </p>

        <form action="https://staccs.us17.list-manage.com/subscribe/post?u=a137c6bddf614d82bfed2be58&amp;id=59f0e8a9d1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
            <div class="form-wrapper">
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your email here" required>
                <input type="submit" value="Send">

                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a137c6bddf614d82bfed2be58_59f0e8a9d1" tabindex="-1" value=""></div>
            </div>
        </form>

        <a href="mailto:kevin.callus@dawbell.com" class="press-mailto">
            For press inquiries click here
        </a>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="/app.js"></script>
</body>
</html>
