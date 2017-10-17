@extends('layouts.master')

@section('title', $title)

@section('sidebar')
  @parent
  
  <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  {{$title}}
  {{$abs}}
  <div class="article">
    <h1><?php echo $article['title'] ?></h1>
    <div class="content">
      <?php echo $article['content'] ?>
    </div>
  </div>
  <ul class="fuckme">
    <li>Fuck Me !</li>
    <li>
      <?php echo $fuck_me ?>
    </li>
  </ul>
@endsection

