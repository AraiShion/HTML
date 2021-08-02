<!DOCTYPE html>
<html lang"ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
  <img src="4eachblog_logo.jpg">
            <heder>
                <ul class="menu">
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </heder>  
    <main>
            <div class="main-container">
                <div class="right">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <h2>入力フォーム</h2>
    <form method="XXX" action="XXX">
        <div>
        <label>名前</label>
        <br>
        <input type="text" class="text" size="35" name="XXX">
        </div>
    <div>
         <label>メールアドレス</label>
        <br>
        <input type="text" class="text" size="35" name="XXX">
     </div>
    <div>
         <label>年齢</label>
        <br>
        <select class="dropdown" name="XXX">
        <option>選択してください</option>
        <script>
            for(var i=18;i<=65;i++){
                document.write("<option value="+i+">"+i+"歳<option">)
            } 
        </script>
        </select>
        </div>
        <div>
        <label>コメント</label>
        <br>
            <textarea cols="35" rows="7" name="XXX"></textarea>
        </div>
           
        <div>
        <input type="submit" class="submit" value="送信する">
        </div>
    </form>
              <?php
              echo "<div class='keiji'>";
              echo "<h3>タイトル</h3>";
              echo "<div class='contens'>";
              echo "記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。";
              echo "記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。<br>";
              echo "記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。<br>";
              echo "記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。<br>";
              echo "<div class='handlename'>posted by 通りすがり</div>";
              echo "</div>";
              echo "</div>";

                
     <div class="left">
               <div class="midasi">人気の記事</div>
                    <div class="komoji">PHPオススメ本</div>
                    <div class="komoji">PHPMyAdminの使い方</div>
                    <div class="komoji">人気のエディタTop5</div>
                    <div class="komoji">HTMLの基礎</div>
                
                <div class="midasi">オススメリンク</div>
                    <div class="komoji">インターノウス株式会社</div>
                    <div class="komoji">XAMORのダウンロード</div>
                    <div class="komoji">Eclipseのダウンロード</div>
                    <div class="komoji">Bracketsのダウンロード</div>
                  <div class="midasi">カテゴリ</div>   
                    <div class="komoji">HTML</div>
                    <div class="komoji">PHP</div>
                    <div class="komoji">MySQL</div>
                    <div class="komoji">JavaScript</div>
                </div>
            </div>
                
            </main>        
    
    
    
</body>