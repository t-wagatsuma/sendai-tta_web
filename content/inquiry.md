+++
Title = ""
+++


<div class="bs-docs-section stta">
<h2 id="inquiry" class="bg-primary"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;お問い合わせ</h2>
<form id="form1" name="form1" method="post" action="lib/inquiry.php" >
    <p>以下の情報を入力して、送信ボタンをクリックして下さい。</p>
    <div class="form-group">
      <label for="name">お名前</label>
      <input type="text" class="form-control" id="name" required>
    </div>
    <div class="form-group">
      <label for="team">所属</label>
      <input type="text" class="form-control" id="team" required>
    </div>
    <div class="form-group">
      <label for="email">Eメール</label>
      <input type="email" class="form-control" id="email" placeholder="Eメール" required>
    </div>
    <div class="form-group">
      <label for="tel">電話番号</label>
      <input type="tel" class="form-control" id="tel" placeholder="090-1234-5678" required>
    </div>
    <div class="form-group">
      <label for="title">お問い合わせタイトル</label>
      <input type="text" class="form-control" id="title" required>
    </div>
    <div class="form-group">
      <label for="content">お問い合わせ内容</label>
      <textarea class="form-control" id="content" required></textarea>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox">当協会のプライバシーポリシーに同意します。
      </label>
    </div>
    <!-- 登録ボタンの表示 -->
    <input type="submit" value="送信する">
    <button type="submit" class="btn btn-default">送信</button>
</form>
</div>


{{< inquiry >}}
