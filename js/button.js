
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