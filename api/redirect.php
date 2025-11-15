<?php

// Определяем IP (Vercel проксирует через X-Forwarded-For)
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$ip = explode(',', $ip)[0]; // Если их несколько — берем первый

// Получаем GEO
$geo = @json_decode(file_get_contents("http://ip-api.com/json/{$ip}?fields=status,countryCode"), true);

// Если GEO успешно определено
if ($geo && $geo['status'] === 'success') {
    if ($geo['countryCode'] === 'RU') {
        header("Location: https://newwebl.pro/client.php?flow=254249-271444-1", true, 302);
        exit;
    }
}

// Все остальные: мировой трафик
header("Location: https://smark.top/click?o=2&a=1551", true, 302);
exit;
