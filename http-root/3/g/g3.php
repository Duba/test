<?php

include('g1.php');
include('g2.php');

$analyzer = new Analyzer();

$analyzer->addISBN('977-3-446-41394-8');
$analyzer->addISBN('978-3-446-41394-8');

$analyzer->addISBN('978-3-89864-450-1');
$analyzer->addISBN('978-3-89864-451-1');

$analyzer->addISBN('978-0-470-87249-9');
$analyzer->addISBN('978-8-470-87249-9');

$analyzer->addISBN('978-0-307-57878-7');
$analyzer->addISBN('978-0-307-58778-7');

var_dump('list of all valid isbn', $analyzer->getValidISBNs());
var_dump('list of all invalid isbn', $analyzer->getInvalidISBNs());
var_dump('percentage of all valid isbn', $analyzer->getPercentageOfValidISBNs());
var_dump('percentage of all invalid isbn', $analyzer->getPercentageOfInvalidISBNs());