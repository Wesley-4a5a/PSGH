<html>
<head>
     <title>apache.php</title>
</head>
<body id='copy'>


<script>

function copyToClipboard(text) {
    if (window.clipboardData && window.clipboardData.setData) {
        // IE specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text); 

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
}

document.querySelector("#copy").onclick = function() {
    var result = copyToClipboard('LoadModule php5_module "C:/PHP/php5apache2_4.dll" AddHandler application/x-httpd-php .php PHPIniDir C:/PHP');
    console.log("copied?", result);
};
</script>
</body>
</html>
