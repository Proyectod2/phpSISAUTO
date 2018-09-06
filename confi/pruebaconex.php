<html>
<head>
<script type="text/javascript">
function formReset()
{
document.getElementById("myForm").reset();
}
</script>
</head>

<body>
<p>Enter some text in the text fields below, and then press the "Reset" button to reset the form.</p>

<form id="myForm">
Name: <input type="text" size="20"><br />
Age: <input type="text" size="20"><br />
<br />
<input type="button" onclick="formReset()" value="Reset">
</form>
</body>

</html>
