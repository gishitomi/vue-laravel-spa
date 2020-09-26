<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'Vue Laravel SPA')}}</title>
    <!-- resources/css/app.cssにアクセス -->
    <!-- 最初からBootStrapが入っている -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <header-component></header-component>
    <router-view></router-view>
</div>

<!-- 最初からVue.jsが入っている。 -->
<script src="{{mix('/js/app.js')}}" defer></script>
</body>

</html>