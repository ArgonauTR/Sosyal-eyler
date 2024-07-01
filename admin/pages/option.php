<div class="col-lg-9">
    <div class="card bg-dark text-white">
        <div class="card-header">
            <i class="bi bi-database-fill-gear me-2"></i>
            AYARLAR
        </div>
        <div class="card-body">

            <form action="./functions/option-update.php" method="POST">

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="number" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_logo_image"]; ?>" name="option_logo_image" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Site logosu resminin ID'si.
                            <a href="image.php" class="btn btn-sm btn-outline-info" style="text-decoration: none;">Resimler</a>
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="number" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_favicon_image"]; ?>" name="option_favicon_image" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Site ikonu resminin ID'si.
                            <a href="image.php" class="btn btn-sm btn-outline-info" style="text-decoration: none;">Resimler</a>
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="text" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_url"]; ?>" name="option_url" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Site URL'sini girin.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="text" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_name"]; ?>" name="option_name" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Site adını(başlığını) girin.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <textarea class="form-control bg-dark text-white" rows="2" name="option_description" required?><?php echo $optionfetch["option_description"]; ?></textarea>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Sitenin SEO açıklamasını girin.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <textarea class="form-control bg-dark text-white" rows="2" name="option_footer" required?><?php echo $optionfetch["option_footer"]; ?></textarea>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Sitenin altında görünecek olan açıklama yazısını girin.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <textarea class="form-control bg-dark text-white" rows="2" name="option_analitics" required?><?php echo $optionfetch["option_analitics"]; ?></textarea>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Google Analitics doğrulama kodunu girin
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <textarea class="form-control bg-dark text-white" rows="2" name="option_console" required?><?php echo $optionfetch["option_console"]; ?></textarea>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Google SearchConsole doğrulama kodunu girin
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <textarea class="form-control bg-dark text-white" rows="2" name="option_adsense" required?><?php echo $optionfetch["option_adsense"]; ?></textarea>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Google Adsense doğrulama kodunu girin
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <select class="form-select bg-dark text-white" name="option_index_page">
                            <?php
                            if ($optionfetch["option_index_page"] == "blog") {
                                echo '<option value="blog" selected>Blog</option>';
                                echo '<option value="manga">Manga</option>';
                                echo '<option value="summary">Özet</option>';
                            } elseif ($optionfetch["option_index_page"] == "manga") {
                                echo '<option value="blog">Blog</option>';
                                echo '<option value="manga" selected>Manga</option>';
                                echo '<option value="summary">Özet</option>';
                            } elseif ($optionfetch["option_index_page"] == "summary") {
                                echo '<option value="blog">Blog</option>';
                                echo '<option value="manga">Manga</option>';
                                echo '<option value="summary" selected>Özet</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Anasayfayı Seçiniz
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <select class="form-select bg-dark text-white" name="option_can_register">
                            <?php
                            if ($optionfetch["option_can_register"] == "yes") {
                                echo '<option value="yes" selected>Evet</option>';
                                echo '<option value="no">Hayır</option>';
                            } else {
                                echo '<option value="yes">Evet</option>';
                                echo '<option value="no" selected>Hayır</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Ziyaretçiler kayıt olabilsin mi?
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="email" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_admin_mail"]; ?>" name="option_admin_mail" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Admin e-postasını giriniz.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="text" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_mailserver_url"]; ?>" name="option_mailserver_url">
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            SMTP Sunucu URL'sini giriniz.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="text" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_mailserver_login"]; ?>" name="option_mailserver_login">
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            SMTP kullanıcı adını giriniz
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="password" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_mailserver_pass"]; ?>" name="option_mailserver_pass">
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            SMTP kullanıcı şifresini giriniz.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="number" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_mailserver_port"]; ?>" name="option_mailserver_port">
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            SMTP portunu giriniz.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="number" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_posts_per_page"]; ?>" name="option_posts_per_page" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Anasayfada görünecek içerik sayısı.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="number" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_comments_per_page"]; ?>" name="option_comments_per_page" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            İçeriklerde görünecek yorum sayısı.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <select class="form-select bg-dark text-white" name="option_maintenance">
                            <?php
                            if ($optionfetch["option_maintenance"] == "yes") {
                                echo '<option value="yes" selected>Açık</option>';
                                echo '<option value="no">Kapalı</option>';
                            } else {
                                echo '<option value="yes">Açık</option>';
                                echo '<option value="no" selected>Kapalı</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Bakım modu.
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <select class="form-select bg-dark text-white" name="option_default_author">
                            <?php
                            $userask = $db->prepare("SELECT * FROM users WHERE user_role = 'admin' || user_role='author' ORDER BY user_name ASC");
                            $userask->execute(array());
                            while ($userfetch = $userask->fetch(PDO::FETCH_ASSOC)) {
                                if ($optionfetch["option_default_author"] == $userfetch["user_id"]) {
                                    echo '<option value="' . $userfetch["user_id"] . '" selected>' . $userfetch["user_name"] . '</option>';
                                } else {
                                    echo '<option value="' . $userfetch["user_id"] . '">' . $userfetch["user_name"] . '</option>';
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Varsayılan Yazar
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <select class="form-select bg-dark text-white" name="option_default_category_id">
                            <?php
                            $categoryask = $db->prepare("SELECT * FROM categories WHERE category_status='blog' ORDER BY category_title ASC ");
                            $categoryask->execute(array());
                            while ($categoryfetch = $categoryask->fetch(PDO::FETCH_ASSOC)) {
                                if ($optionfetch["option_default_category_id"] == $categoryfetch["category_id"]) {
                                    echo '<option value="' . $categoryfetch["category_id"] . '" selected>' . $categoryfetch["category_title"] . '</option>';
                                } else {
                                    echo '<option value="' . $categoryfetch["category_id"] . '">' . $categoryfetch["category_title"] . '</option>';
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Varsayılan Kategori
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="text" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_terms"]; ?>" name="option_terms" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Şartlar ve Koşullar Sayfası Linki
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <select class="form-select bg-dark text-white" name="option_popup_status">
                            <?php
                            if ($optionfetch["option_popup_status"] == "open") {
                                echo '<option value="open" selected>Açık</option>';
                                echo '<option value="closed">Kapalı</option>';
                            } else {
                                echo '<option value="open">Açık</option>';
                                echo '<option value="closed" selected>Kapalı</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Pop-Up Durumu
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="number" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_popup_time"] ?>" name="option_popup_time" required>
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Pop-Up'un kullanıcı başına görünme saat aralığı
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-3">
                        <input type="text" class="form-control bg-dark text-white" value="<?php echo $optionfetch["option_disquss_api"] ?>" name="option_disquss_api">
                    </div>
                    <div class="col-lg-9">
                        <label class="col-form-label">
                            Disquss Api
                            <br>
                            <b> Örn: </b>https://siteadi.disquss.com/embed.js
                        </label>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary" name="option_update">Kaydet & Güncelle</button>
                </div>
        </div>
    </div>
</div>