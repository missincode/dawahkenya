<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
table {font-size:12px;
font-family: Arial, sans-serif;
}

tr, td {
    padding: 5px;
}

tr:nth-child(even) {
    background-color: #FCD00B;}

tr:nth-child(odd) {
   background-color:#FCD00B;

</style>
</head>

<body>
<table>
<tr>
<td width="117">Ayah of the day.</td>
<td width="1181"><?php include "cms/ayah.php"; ?></td>
</tr>
<tr>
<td>Hadith of the day.</td>
<td><?php include "cms/hadith.php"; ?></td>
</tr>
<tr>
<td>Wise Saying of the day.</td>
<td><?php include "cms/wise.php"; ?></td>
</tr>
</table>
</body>
</html>