--TEST--
Decimal128: [decq082] Nmin and below (Subnormal)
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('180000001364000100000000000000000000000000020000');
$canonicalExtJson = '{"d" : {"$numberDecimal" : "1E-6175"}}';

// Canonical BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON 
echo json_canonicalize(toCanonicalJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON 
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
180000001364000100000000000000000000000000020000
{"d":{"$numberDecimal":"1E-6175"}}
180000001364000100000000000000000000000000020000
===DONE===