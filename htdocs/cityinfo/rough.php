<script type="text/javascript"> 

function showMe (it, box) { 
var vis = (box.checked) ? "block" : "none"; 
document.getElementById(it).style.display = vis; 
} 
function showMe2 (it) { 
var vis = document.getElementById(it).style.display 
if (vis == "block") { document.getElementById(it).style.display = "none"; } 
else { document.getElementById(it).style.display = "block"; } 
} 

</script>
<style type="text/css">

.divstyle
{
display: none;
border: 1px solid #000;
height: 100px;
width: 200px;
}

</style>
</head>

<body>
<table>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="one" /> 
One</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="two" />
Two</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="three" />
Three</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="four" />
Four</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="five" /> 
Five
</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="six" />
Six
</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="seven" />
Seven</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="eight" />
Eight</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="nine" />
Nine</td>
</tr>
<tr>
<td><input name="class[]" type="checkbox" onclick="showMe('div1', this)" id="ten" />
Ten</td>
</tr>
<input name="submit" type="submit" value="submit" />
</table>

<div class="divstyle" id="div1">
<table>
<td><input name="a" type="checkbox" value="" /></td>
<td><input name="b" type="checkbox" value="" /></td>
<td><input name="c" type="checkbox" value="" /></td>
<td><input name="d" type="checkbox" value="" /></td>
</table>
</div>
</body>
