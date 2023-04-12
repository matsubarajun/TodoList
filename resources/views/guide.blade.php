@extends('layouts.master')

@section('title', 'Guide')

@section('content')

<div class="container mt-3">
    <h1 class="border-bottom">使い方ガイド</h1>
    <div class="row">
        <div>
          <h3 class="panel-heading mt-3 text-primary">トップページ</h3>
          <p><img class="img-fluid col col-md-4" src="images/Top.png"></p>
          <p>　トップページでは使い方ガイド・ユーザー登録をはじめ、マイページ及び当サイトに備わっている３つのサービスにアクセスすることができます。<br>
          ですが、マイページ及びサービスにつきましてはアカウント制限があるのでまずは新規登録をしましょう！
          </p>
        </div>
        <div>
            <h3 class="panel-heading mt-3 text-primary">新規登録</h3>
            <p>
                　まずは画面上部にあるナビゲーションバー右側にある「会員登録」をクリックしてください。
            </p>
            <p><img class="img-fluid col col-md-4" src="images/touroku.png"></p>
            
            <p><img class="img-fluid col col-md-4" src="images/Shinki.png"></p>
            
            <p>
                新規登録画面に移動するので、名前・メールアドレス・パスワードを入力してください。<br>
                <span class="text-danger">※メールアドレスとパスワードはログイン時に必要なため控えてください。</span><br>
                登録ボタンをクリック後、右上に貴方の名前が表示されたら登録完了です！
            </p>
        </div>
        <div>
            <h3 class="panel-heading mt-3 text-primary">マイページ</h3>
            <p><img class="img-fluid col col-md-4" src="images/Mypage.png"></p>
            <p>
                マイページではそれぞれのサービスへのリンク及び保存されている内容を閲覧することができます。
            </p>
            <h4>リマインド</h4>
            <p>ここではリマインド機能に保存されている内容を確認できます。リマインドの作成・編集は対象のページへお進みください。</p>
            <h4>タスク</h4>
            <p>
                タスクではより細分化された管理を行うことができ、ここでは分類されたフォルダ一覧を確認することができます。
            </p>
            <h4>カレンダー</h4>
            <p>
                カレンダーでは本日の日付を確認できます。
            </p>
        </div>
        <div>
            <h3 class="panel-heading mt-3 text-primary">リマインド</h3>
            <p><img class="img-fluid col col-md-4" src="images/remindpage.png"></p>
            <p>
                ここでは自分のやることを簡易的に記録することができます。<br>
                リマインド内容の入力は必須ですが期限は入力せずに登録することも可能です。
            </p>
            <p><img class="img-fluid col col-md-4" src="images/remind2.png"></p>
            <p>
                リマインドを追加されると上記のように表示されます。<br>
                追加されたリマインドには編集と削除項目が表示されるので簡単に操作が可能です！
            </p>
        </div>
        <div>
            <h3 class="panel-heading mt-3 text-primary">タスク</h3>
            <p>タスクではまず、分類分けをするためにファイルを作成します。</p>
            <p><img class="img-fluid col col-md-4" src="images/file.png"></p>
            <p>ファイルを作成すると以後は下記のような画面になります。これによりファイルごとのタスク作成が可能になります。</p>
            <p><img class="img-fluid col col-md-4" src="images/task1.png"></p>
            <p>タスクを追加するとタスクごとに状態を変えることが可能です</p>
            <p><img class="img-fluid col col-md-4" src="images/task2.png"></p>
            <p>タスクの状況を変える際には「編集」より下記の画面が表示され、状態を変化させられます。</p>
            <p><img class="img-fluid col col-md-4" src="images/task3.png"></p>
        </div>
        <div>
            <h3 class="panel-heading mt-3 text-primary">カレンダー</h3>
            <p><img class="img-fluid col col-md-4" src="images/calendar1.png"></p>
            <p>
                カレンダーでは月の予定を一目で確認できます。<br>
                カレンダーに直接予定を入力することができ、またリマインド機能の内容も表示されます。
            </p>
        </div>
</div>

@endsection