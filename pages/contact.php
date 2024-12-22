<?php
// Bot saldırılarına karşı cookie korumalı sistem
$code = md5(time());
setcookie("code", $code, time() + 600, "/", "", true, true);


?>
<div class="m-4">
    <h2 class="text-center"><i class="bi bi-telephone"></i> İletişim</h2>
    <form method="POST" action="<?php echo $site_name . "/functions/new-contact.php?code=".$code; ?>">

        <div class="mb-3 mt-4">
            <input type="text" class="form-control" name="contact_name" placeholder="Adınızı Girin" required>
        </div>

        <div class="mb-3 mt-4">
            <input type="email" class="form-control" name="contact_mail" placeholder="E-Mail Adresi Girin" required>
        </div>

        <div class="mb-3 mt-4">
            <input type="text" class="form-control" name="contact_title" placeholder="Başlık Girin" required>
        </div>

        <div class="mb-3">
            <textarea class="form-control" name="contact_content" rows="5" placeholder="Mesajınızı bu alana yazınız" required></textarea>
        </div>

        <div class="form-group mt-4 d-grid gap-2 col-6 mx-auto text-center">
            <button type="submit" class="btn btn-outline-secondary" name="new_contact">
                <i class="bi bi-send-plus"></i> Mesajı Gönder
            </button>
        </div>

    </form>

</div>