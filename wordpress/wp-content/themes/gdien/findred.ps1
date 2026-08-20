Add-Type -AssemblyName System.Drawing;
$img = [System.Drawing.Bitmap]::FromFile('d:\laragon\www\ccn-ngoc-chauv2\wordpress\wp-content\themes\gdien\temp.png');
$width = $img.Width;
$height = $img.Height;
Write-Host "Size: $width x $height";

$minX = $width; $minY = $height; $maxX = 0; $maxY = 0;

for ($y = 0; $y -lt $height; $y += 2) {
    for ($x = 0; $x -lt $width; $x += 2) {
        $pixel = $img.GetPixel($x, $y);
        # A simple check for a prominent red color (high R, low G and B)
        if ($pixel.R -gt 150 -and $pixel.G -lt 80 -and $pixel.B -lt 80) {
            if ($x -lt $minX) { $minX = $x }
            if ($x -gt $maxX) { $maxX = $x }
            if ($y -lt $minY) { $minY = $y }
            if ($y -gt $maxY) { $maxY = $y }
        }
    }
}

if ($minX -lt $maxX) {
    $pctX = [math]::Round(($minX / $width) * 100, 2);
    $pctY = [math]::Round(($minY / $height) * 100, 2);
    $pctW = [math]::Round((($maxX - $minX) / $width) * 100, 2);
    $pctH = [math]::Round((($maxY - $minY) / $height) * 100, 2);
    
    Write-Host "Red Box %: left=$pctX%, top=$pctY%, width=$pctW%, height=$pctH%";
} else {
    Write-Host "No red box found!";
}
