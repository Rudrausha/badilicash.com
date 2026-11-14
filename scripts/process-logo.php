<?php

$src = __DIR__ . '/../public/assets/images/badilicash-logo-original.jpg';
$im = @imagecreatefromjpeg($src);
if (!$im) {
    $im = imagecreatefrompng(__DIR__ . '/../public/assets/images/badilicash-logo-original.png');
}
if (!$im) {
    fwrite(STDERR, "GD failed to load logo\n");
    exit(1);
}

$w = imagesx($im);
$h = imagesy($im);
echo "size {$w} x {$h}\n";

$out = imagecreatetruecolor($w, $h);
imagealphablending($out, false);
imagesavealpha($out, true);
$transparent = imagecolorallocatealpha($out, 0, 0, 0, 127);
imagefilledrectangle($out, 0, 0, $w, $h, $transparent);

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        $rgb = imagecolorat($im, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        $mx = max($r, $g, $b);
        $mn = min($r, $g, $b);
        $isDarkGray = $mx < 36 || ($mx < 50 && ($mx - $mn) < 18);
        if ($isDarkGray) {
            imagesetpixel($out, $x, $y, $transparent);
        } else {
            $c = imagecolorallocatealpha($out, $r, $g, $b, 0);
            imagesetpixel($out, $x, $y, $c);
        }
    }
}

imagepng($out, __DIR__ . '/../public/assets/images/badilicash-logo.png');

$fw = (int) min($h, max(80, $w * 0.22));
$fav = imagecreatetruecolor($h, $h);
imagealphablending($fav, false);
imagesavealpha($fav, true);
$t = imagecolorallocatealpha($fav, 0, 0, 0, 127);
imagefilledrectangle($fav, 0, 0, $h, $h, $t);
imagealphablending($fav, true);
imagecopy($fav, $out, (int) (($h - $fw) / 2), 0, 0, 0, $fw, $h);
imagepng($fav, __DIR__ . '/../public/assets/images/favicon.png');
imagepng($fav, __DIR__ . '/../public/favicon.png');

echo "logo processed\n";
