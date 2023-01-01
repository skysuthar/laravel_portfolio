<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('design/apple-icon-180x180.png')}}">
  <link href="{{asset('design/favicon.icon')}}" rel="icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

  <title>Home page</title>  

<link href="{{asset('design/main.3f6952e4.css')}}" rel="stylesheet">
<link href="{{asset('design/css/style.css')}}" rel="stylesheet">


</head>

<body class="minimal">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
<!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-inverse">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav" style="display: inline!important;">
          <li><a href="/index" title="">01 : Home</a></li>
          <li><a href="/works" title="">02 : Projects</a></li>
          <li><a href="{{ route('about') }}" title="" target="_blank" rel="noopener noreferrer">03 : About me</a></li>
          <li><a href="{{ route('service') }}" title="">04 : Services</a></li>
          <li><a href="{{route('blog')}}" title="">05 : Blogs</a></li>
          <li><a href="/contact" title="">06 : Contact</a></li>
        </ul>
      </div> 
    </div>
  </nav>

</header>
