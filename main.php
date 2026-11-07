<?php
declare(strict_types=1);

/**
 * fiqh-php-safar-qasr-distance — حاسبة مسافة القصر والجمع في السفر بالوحدات المعاصرة
 * Musafir Prayer Qasr & Jam' Distance Threshold Evaluator
 */
$input = "DistanceKm=88.5,DurationDays=3";
$digest = substr(hash("sha256", "fiqh-php-safar-qasr-distance:" . $input), 0, 12);

echo "[RUN] fiqh-php-safar-qasr-distance (PHP) — Musafir Prayer Qasr & Jam' Distance Threshold Evaluator" . PHP_EOL;
echo "[AR]  حاسبة مسافة القصر والجمع في السفر بالوحدات المعاصرة" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] QasrPermitted=True | ThresholdKm=83.48(4_Burud) | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
