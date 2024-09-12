<?PHP

// Ana fonskiyon dosyası ekleniyor.
include("../../codex.php");

if (isset($_GET["status"])) {

    $status = $_GET["status"];
    $comment_id = $_GET["comment_id"];

    //GET den değer DRAFT olarka gelmişse içeriğin TASLAK olarak güncellenmesi gerekir.
    // Aşağıda içerik TASLAK olarak güncelleniyor.
    if ($status == "draft") {
        
        $comments = $db->prepare("UPDATE comments SET
        comment_status=:comment_status
        WHERE comment_id=$comment_id");

        $update = $comments->execute(array(
            'comment_status' => "draft"
        ));

        if ($update) {
            header("Location:/admin/comments.php?status=draft");
            exit();
        } else {

            header("Location:/admin/comments.php?status=publish");
            exit();
        }
    }


    //GET den değer PUBLİSH olarka gelmişse içeriğin YAYIN olarak güncellenmesi gerekir.
    // Aşağıda içerik YAYIN olarak güncelleniyor.
    if ($status == "publish") {
        
        $comments = $db->prepare("UPDATE comments SET
        comment_status=:comment_status
        WHERE comment_id=$comment_id");

        $update = $comments->execute(array(
            'comment_status' => "publish"
        ));

        if ($update) {
            header("Location:/admin/comments.php?status=publish");
            exit();
        } else {

            header("Location:/admin/commentts.php?status=draft");
            exit();
        }
    }
}