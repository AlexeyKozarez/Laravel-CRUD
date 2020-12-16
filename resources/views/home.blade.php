@extends('layouts.app')

@section('title-block')
   Главная страница
@endsection

@section('content')

<h1>Главная страница</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quia quisquam error voluptates sit, nesciunt dignissimos iure a blanditiis est temporibus veritatis eos rem odit, unde molestiae quidem neque perferendis.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quaerat, placeat nulla nesciunt veniam non excepturi minima nemo quod ea necessitatibus distinctio, fuga sequi temporibus possimus quidem cumque, recusandae asperiores!</p>

@endsection

@section('aside')
@parent
<p>Дополнительный тест</p>
@endsection