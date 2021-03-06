--TEST--
Decimal128: [decq702] Selected DPD codes
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('180000001364000A00000000000000000000000000403000');
$canonicalExtJson = '{"d" : {"$numberDecimal" : "10"}}';

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
180000001364000a00000000000000000000000000403000
{"d":{"$numberDecimal":"10"}}
180000001364000a00000000000000000000000000403000
===DONE===