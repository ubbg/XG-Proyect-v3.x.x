<?php

$lang = [
    'pr_title' => 'Premium-Einstellungen',
    'pr_sub_title' => 'Alles, was mit Dunkler Materie zu tun hat, kann hier verwaltet werden. Von Offizieren bis hin zu Händlern.',
    'pr_general' => 'Allgemein',
    'pr_pay_url' => 'Zahlungs-URL',
    'pr_registration_dark_matter' => 'Anfängliche Dunkle Materie',
    'pr_trader' => 'Rohstoffmarkt - Rohstoffe tauschen',
    'pr_trader_price' => 'Preis, um den Händler zu rufen (Dunkle Materie)',
    'pr_merchant_base_min_exchange_rate' => 'Minimaler Wechselkurs',
    'pr_merchant_base_max_exchange_rate' => 'Maximaler Wechselkurs',
    'pr_merchant_metal_multiplier' => 'Metall-Basisrate',
    'pr_merchant_crystal_multiplier' => 'Kristall-Basisrate',
    'pr_merchant_deuterium_multiplier' => 'Deuterium-Basisrate',
    'pr_merchant_explanation' => 'Die Händlerraten variieren im Verhältnis 3/2/1 (Standardwerte), gegeben durch die 3 Basisraten. Bei jedem Aufruf des Händlers schwankt der Preis zwischen 0,7% und 1%. Wenn wir zum Beispiel Metall verkaufen, beträgt der Basispreis 3, aber Kristall und Deuterium werden basierend auf einer Zufallszahl zwischen 0,7 (Standard) und 1 (Standard) berechnet.<br><br>Beispiel:<br>Zufall(0,7,1)=0,88;<br>Metallpreis = 3 <br>Kristallpreis = 2 * 0,88 (3 Metall = 1,76 Kristall)<br>Deuteriumpreis = 1 * 0,88 (3 Metall = 0,88 Deuterium)<br><br>Dies wird bei den 3 Rohstoffen gleichermaßen wiederholt, wobei der verkaufte Rohstoff immer konstant ist.',
    'pr_save_changes' => 'Änderungen speichern',
    'pr_all_ok_message' => 'Änderungen erfolgreich gespeichert!',
];
