<?php
mysql_connect('mysql1.000webhost.com', 'a5108394_1', 'shr123');
mysql_select_db('a5108394_api');

$sql = "SELECT id, name FROM api";
$res = mysql_query($sql);

$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('countries');

while ($row = mysql_fetch_assoc($res)) {
  $xml->startElement("name");

  $xml->writeAttribute('id', $row['id']);
  $xml->writeRaw($row['name']);

  $xml->endElement();
}

$xml->endElement();

header('Content-type: text/xml');
$xml->flush();


?>
