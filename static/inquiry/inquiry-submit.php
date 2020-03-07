<?php
$status = isset($_GET["status"]) ? $GET["status"] : "1";
$ret = $status == "1" ? false : true;
?>
<?php include(dirname(__FILE__) . "/header.tmpl"); ?>

<div class="row stta">
<div class="container-fluid bs-docs-container">
<div class="bs-docs-section stta">
<?php if ($ret) { ?>
    <p>送信が完了しました。ありがとうございました。
    </p>
    <p>入力されたメールアドレス宛てに自動応答のメールが送られました。
    </p>
    <p>自動応答が無い場合や、1週間以上が経過しても回答が無い場合、Webサイト担当のTwitterアカウントまでご連絡下さい。
    </p>
    <hr>
    <button id="btn" class="btn btn-success" onclick="window.open('about:blank','_self').close();return false;">閉じる</button>
<?php } else { ?>
    <p>送信が失敗しました。恐れ入りますが、最初からやり直して下さい。</p>
    <button id="btn" class="btn btn-default" onclick="location.href='./inquiry.php';return false;">戻る</button>
<?php } ?>
</div>
</div> 
</div> 

<?php include(dirname(__FILE__) . "/footer.tmpl"); ?>
