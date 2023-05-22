<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## こちらのファイル群はLaravelでの動作を前提として記述しております。

<p>・Laravelのenvironmentファイルがある場所に、任意のディレクトリを作り、そこにこのファイル群をおいて、起動してください。（作者はtodolistディレクトリで起動）</p>

<p>・ユーザー登録機能</p>
<p>・ログイン機能</p>
<p>・ユーザー毎のタスク登録、テキスト記述、タスクの削除、編集機能</p>
<p>・優先順位でのソートによる一覧表示</p>
<p>・管理者用のログイン機能</p>
<p>・管理者用の管理画面（現在登録件数、アカウント毎の入力一覧、削除など）</p>


<p>ポートフォリオなので、メール登録などは簡易になっています。</p>
<p>同じく、本来ならDBでの書き込みにてエラーが出たさい、ロールバックと共に、エラー内容を記述する挙動を取りますが、ここもエラー内容書き込みの処理を簡易処理にしています。</p>

<p>・web.phpにRoute::を用いた処理を記述しています。</p>
<p>・各種Controllerにて、Modelを使った書き込み、formRequestクラスを用いたバリデート、redirectでのページ遷移などの動作を記述しています。</p>
<p>・Modelにて、各種テーブルの書き込みルールを記述しています。</p>
<p>・migration機能を利用するために、migrationに初期設定を記述しています。　DBに作られるテーブルの設定はここを確認してください。</p>
<p>・.blade.phpにて、展開されるファイルの記述をしています。　layout.blade.phpにテンプレートを記述していますので、雛形はこちらを確認してください。</p>
