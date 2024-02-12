<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AJAX Demo</title>
<script>
function fetchData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById("result").innerHTML = xhr.responseText;
            } else {
                console.error('Error fetching data. Status:', xhr.status);
            }
        }
    };
    xhr.open("GET", "data.txt", true);
    xhr.send();
}
</script>
</head>
<body>

<h2>AJAX Demo</h2>

<button onclick="fetchData()">Fetch Data</button>

<div id="result"></div>

</body>
</html>
