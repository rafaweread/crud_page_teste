<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rota Oeste</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '425833268095000');
            fbq('track', 'PageView');
        </script>

        <script type="text/javascript">
            (function () {
                var options = {
                    facebook: "229289737460987", // Facebook page ID
                    whatsapp: "+55 (065) 996054958", // WhatsApp number
                    call_to_action: "", // Call to action
                    button_color: "#666666", // Color of button
                    position: "right", // Position may be 'right' or 'left'
                    order: "whatsapp,facebook", // Order of buttons
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="img/startup.png" />
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Cadastro</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <div>
            <noscript>
                <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=425833268095000&ev=PageView&noscript=1"/>
            </noscript>
        </div>
        <footer>

        </footer>

        <?php
        ?>
    </body>
</html>
