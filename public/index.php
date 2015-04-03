<?php
/**
 * Laravel - Web職人のためのフレームワーク
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| オートローダーの登録
|--------------------------------------------------------------------------
|
| omposerは便利なクラスローダーをアプリケーションのために自動的に
| 生成してくれます。使わない手はありません！ここでそのスクリプトを
| 読み込み、これ以降、クラスを「手動で」読み込む手間から
| 解放されましょう。リラックスできて、気分がいいですね。
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| 明かりを灯す
|--------------------------------------------------------------------------
|
| 私達はPHP開発を照らす必要があります。ですから明かりを灯しましょう。
| これはフレームワークのブートストラップで準備は整っています。
| ではこのアプリケーションをロードしましょう。これでユーザーを
| 喜ばせるために、実行し、レスポンスをブラウザに送り返せます。
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| アプリケーションの実行
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| 送り返すことで、彼らを刺激する、私達の創造的で素晴らしい
| アプリケーションを楽しんでもらいましょう。
|
*/

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);