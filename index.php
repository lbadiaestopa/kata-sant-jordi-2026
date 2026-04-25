<?php

require_once __DIR__ . '/src/GiftGenerator.php';

$giftGenerator = new GiftGenerator();

$gift1 = $giftGenerator->generateGift(GiftType::ROSE);
$gift2 = $giftGenerator->generateGift(GiftType::BOOK);
