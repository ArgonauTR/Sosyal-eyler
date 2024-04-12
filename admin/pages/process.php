<?php
if (isset($_GET)) {

    /*
        proccess.php dışarıdan gelen ekle,sil ve güncelle işlemlerini bir merkezden yönetmeyi sağlar.
        Klasik islem.php gibi çalışır ama sadece köprü görevi görür.
        İşlemler function klasörünün içindedir.
    */

    // -----> POST İŞLEMLERİ
    if (isset($_GET["post"])) {

        // Post Ekleme
        if ($_GET["post"] == "post-add") {
            include("pages/post-add.php");
        }

        // Post Silme
        if ($_GET["post"] == "post-update") {
            include("pages/post-update.php");
        }
    }

    // ------> KATEGORİ İŞLEMLERİ
    if (isset($_GET["category"])) {

        // Kategori Ekleme
        if ($_GET["category"] == "category-add") {
            include("pages/category-add.php");
        }

        // Kategori Güncelleme
        if ($_GET["category"] == "category-update") {
            include("pages/category-update.php");
        }
    }

    // ------> KATEGORİ İŞLEMLERİ
    if (isset($_GET["comment"])) {

        // Kategori Güncelleme
        if ($_GET["comment"] == "comment-update") {
            include("pages/comment-update.php");
        }
    }

    // ------> RESİM İŞLEMLERİ
    if (isset($_GET["image"])) {

        // Resim Güncelleme
        if ($_GET["image"] == "image-update") {
            include("pages/image-update.php");
        }
    }

    // ------> ÜYE İŞLEMLERİ
    if (isset($_GET["user"])) {

        // Üye Güncelleme
        if ($_GET["user"] == "user-update") {
            include("pages/user-update.php");
        }
    }

    // ------> MESAJ İŞLEMLERİ
    if (isset($_GET["message"])) {

        // Mesaj Okuma
        if ($_GET["message"] == "read") {
            include("pages/message-read.php");
        }
    }

    // ------> DÜZEN İŞLEMLERİ
    if (isset($_GET["order"])) {

        // Üst ve Alt Menü Ekleme
        if ($_GET["order"] == "menu-add") {
            include("pages/order-menu-add.php");
        }
        // Sidebar Ekleme
        if ($_GET["order"] == "sidebar-add") {
            include("pages/order-sidebar-add.php");
        }
        // Üst ve Alt Menü Güncelleme
        if ($_GET["order"] == "menu-update") {
            include("pages/order-menu-update.php");
        }
        // Sidebar Güncelleme
        if ($_GET["order"] == "sidebar-update") {
            include("pages/order-sidebar-update.php");
        }
        // Reklam ekleme
        if ($_GET["order"] == "ads-add") {
            include("pages/order-ads-add.php");
        }
        // Reklam düzenlem
        if ($_GET["order"] == "ads-update") {
            include("pages/order-ads-update.php");
        }
    }

    // ------> MANGA İŞLEMLERİ
    if (isset($_GET["manga"])) {

        // Manga Ekleme
        if ($_GET["manga"] == "manga-add") {
            include("pages/manga-add.php");
        }
        // Manga Güncelleme
        if ($_GET["manga"] == "manga-update") {
            include("pages/manga-update.php");
        }
        // Bölüm Ekleme
        if ($_GET["manga"] == "manga-chapter-add") {
            include("pages/manga-chapter-add.php");
        }
        // Bölüm Listeleme
        if ($_GET["manga"] == "manga-chapter-list") {
            include("pages/manga-chapter-list.php");
        }
    }
}
