<?php
/*
    DB-UPDATE Dosyası önceki sürümlerde olmayan veritabanı elemanlarını ekler.
    Bu dosya mümkün mertebe kurcalanmamalıdır. 
    Sürümlere bağlı olarak yeni eklemeler ve çıkarmalar yapılmış olabilir. 
    Bu dosya 05.03.2024 de oluşturulmuş ve her sürümde yeni eklemeler yapılmıştır
*/

// ---------> 1.2 güncellemesinde ki veritabanı değişiklikleri.

// Reklam türlerini ayırabilmek içiin ORDERS tablosuna ORDER_ADS eklendi.
$order_ads_exist = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'orders' AND COLUMN_NAME = 'order_ads'");
if ($order_ads_exist->fetchColumn() == 0) {
    $db->exec("ALTER TABLE orders ADD order_ads VARCHAR(200) DEFAULT NULL");
}

// ---------> 1.5 güncellemesinde ki veritabanı değişiklikleri.


// Şartlar ve Koşullar İçin sayfa kaydediyor.
$terms_exist = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_terms'");
if ($terms_exist->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_terms VARCHAR(250) DEFAULT NULL");
}

// Header için analitics kodları ekliyor.
$analitics_exist = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_analitics'");
if ($analitics_exist->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_analitics VARCHAR(1000) DEFAULT NULL");
}

// Header için Console kodları ekliyor.
$console_exist = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_console'");
if ($console_exist->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_console VARCHAR(1000) DEFAULT NULL");
}

// Header için Adsense kodları ekliyor.
$console_adsense = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_adsense'");
if ($console_adsense->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_adsense VARCHAR(1000) DEFAULT NULL");
}

// Anasayfa seçme olanağı sunuyor.
$index_page = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_index_page'");
if ($index_page->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_index_page VARCHAR(100) DEFAULT NULL");
}

// ---------> 1.6 güncellemesinde ki veritabanı değişiklikleri.

// Şifre sıfırlama olanağı sunuyor
$pass_reset = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'users' AND COLUMN_NAME = 'user_pass_reset'");
if ($pass_reset->fetchColumn() == 0) {
    $db->exec("ALTER TABLE users ADD user_pass_reset VARCHAR(100) DEFAULT NULL");
}

// Varsayılan Yazar Atanmasını sağlıyor
$add_author = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_default_author'");
if ($add_author->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_default_author VARCHAR(20) DEFAULT NULL");
}

// Pop-Up Açık/Kapalı Durumunu Sağlıyor
$pop_up_add = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_popup_status'");
if ($pop_up_add->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_popup_status VARCHAR(20) DEFAULT NULL");
}

// Pop-Up Zamanını ayarlıyor
$pop_up_time = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_popup_time'");
if ($pop_up_time->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_popup_time VARCHAR(50) DEFAULT NULL");
}

// ---------> 1.7 güncellemesinde ki veritabanı değişiklikleri.

// Pop-Up Zamanını ayarlıyor
$disquss_api = $db->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'options' AND COLUMN_NAME = 'option_disquss_api'");
if ($disquss_api->fetchColumn() == 0) {
    $db->exec("ALTER TABLE options ADD option_disquss_api VARCHAR(200) DEFAULT NULL");
}