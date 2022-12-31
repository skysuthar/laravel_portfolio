<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
     <link rel="stylesheet" href="{{asset('design/css/style.css')}}" type="text/css">
     <link rel="stylesheet" type="text/css" href="https://designreset.com/cork/ltr/demo4/plugins/table/datatable/datatables.css">
      <link rel="stylesheet" type="text/css"
        href="https://designreset.com/cork/ltr/demo4/plugins/table/datatable/dt-global_style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <!-- Fonts Link -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
   

    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body> 
  <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{asset('design/images/myimg.jpg')}}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Akash Suthar</span>
                    <span class="profession">php/Laravel developer</span>
                </div>
            </div>

           <i class="fa fa-arrow-right toggle" aria-hidden="true"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class=" active">
                        <a href="{{ route('dashboard') }}">
                           <i class="fa fa-home icon" aria-hidden="true"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ route('project') }}">
                           <i class="fa fa-bar-chart icon" aria-hidden="true"></i>
                            <span class="text nav-text">Project</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ route('showService.index') }}">
                            <i class="fa fa-commenting-o icon" aria-hidden="true"></i>
                            <span class="text nav-text">Service</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ route('showBlog') }}">
                           <i class="fab fa-blogger-b icon"></i>
                            <span class="text nav-text">Blogs</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/">
                            <i class="fa-solid fa-globe icon"></i>
                            <span class="text nav-text">Website</span>
                        </a>
                    </li>

                  

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                       <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

               
                
            </div>
        </div>
        
    </nav>