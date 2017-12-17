<div class="row  ">
    <nav style="margin-bottom: 0;" role="navigation" class="navbar navbar-fixed-top ">
    <div class="navbar-header">
         <a href="javascript:void(0)" class="navbar-minimalize minimalize-btn  ">
            <i class="fa fa-bars"></i> 
         </a>    
             
    </div>

     <ul class="nav navbar-top-links ">
     @if(Auth::user()->group_id == 1 or Auth::user()->group_id ==2 )
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <i class="fa fa-sliders"></i>  CMS 
            </a>    
        <ul class="dropdown-menu">
             
            <li ><a href="{{ url('core/users')}}">  @lang('core.m_users') <br /></a> </li> 
            <li ><a href="{{ url('core/groups')}}">  @lang('core.m_groups') </a> </li>
            <li><a href="{{ url('core/users/blast')}}">  @lang('core.m_blastemail') </a></li> 
            <li class="divider"></li>
            <li><a href="{{ url('core/pages')}}">   @lang('core.m_pagecms')  </a></li>
            <li ><a href="{{ url('core/posts')}}">  @lang('core.m_post')</a></li>
           
        </ul>
    </li>
    @endif

     @if(Auth::user()->group_id == 1  )
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <i class="fa fa-gear"></i>  System 
            </a>    
        <ul class="dropdown-menu">
          <li><a href="{{ url('') }}/sximo/config"> @lang('core.t_generalsetting') </a> </li> 
          <li class="divider"></li>
          <li><a href="{{ url('sximo/module')}}"> @lang('core.m_codebuilder')  </a> </li>
          <li><a href="{{ url('sximo/rac')}}"> RestAPI Generator </a> </li> 
          <li><a href="{{ url('sximo/tables')}}"> @lang('core.m_database') </a> </li>
          <li><a href="{{ url('sximo/form')}}"> @lang('core.m_formbuilder') </a> </li>
          <li><a href="{{ url('core/elfinder')}}"> Dropzone Media </a> </li>
          <li class="divider"></li>
          <li><a href="{{ url('sximo/menu')}}">  @lang('core.m_menu')</a> </li>              
          <li> <a href="{{ url('sximo/code')}}"> @lang('core.m_sourceeditor') </a>  </li>
          
          <li> <a href="{{ url('sximo/config/clearlog')}}" class="clearCache"> @lang('core.m_clearcache')</a> </li>
          <li class="divider"></li>
          <li> <a href="{{ url('sximo/server/repository')}}"> Install Software </a>  </li>
          <li> <a href="{{ url('sximo/server')}}" onclick="SximoModal(this.href,'Version'); return false ;"> Version Update </a>  </li>


        </ul>
    </li>
    @endif
  <li class="dropdown notifications-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-green notif-alert">0</span>
      </a>
      <ul class="dropdown-menu">
        <li class="header"> </li>
        <li>
          <!-- inner menu: contains the actual data -->
          <ul class="menu" id="notification-menu">
            
          </ul>  
        <li><a href="{{ url('notification')}}">View all</a></li>
      </ul>
    </li> 
    
        @if(config('sximo.cnf_multilang') ==1)
        <li class="dropdown tasks-menu pull-right">
          <?php 
          $flag ='en';
          $langname = 'English'; 
          foreach(SiteHelpers::langOption() as $lang):
            if($lang['folder'] == session('lang') or $lang['folder'] == config('sximo.cnf_lang')) {
              $flag = $lang['folder'];
              $langname = $lang['name']; 
            }
            
          endforeach;?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img class="flag-lang" src="{{ asset('sximo5/images/flags/'.$flag.'.png') }}" width="16" height="12" alt="lang" /> {{ strtoupper($flag) }}
            <span class="hidden-xs">
            
            </span>
          </a>

           <ul class="dropdown-menu dropdown-menu-right icons-right">
            @foreach(SiteHelpers::langOption() as $lang)
              <li><a href="{{ url('home/lang/'.$lang['folder'])}}"><img class="flag-lang" src="{{ asset('sximo5/images/flags/'. $lang['folder'].'.png')}}" width="16" height="11" alt="lang"  /> {{  $lang['name'] }}</a></li>
            @endforeach 
          </ul>

        </li> 
        @endif  
        <li ><a href="{{ url('')}}" target="_blank"> <i class="fa fa-globe"></i> </a></li>  
      <li class="dropdown pull-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        {!! SiteHelpers::avatar('20',session('uid'))!!} {{ session('fid')}}
        </a>    
        <ul class="dropdown-menu">               
        <li ><a href="{{ url('user/profile')}}">  @lang('core.m_profile') <br /></a> </li> 
        <li class="divider"></li>
        <li><a href="javascript://ajax" class="switch-theme" code="light-theme.css"> Light Theme </a></li>
        <li><a href="javascript://ajax" class="switch-theme" code="blue-theme.css"> Ligh Blue Theme </a></li>
        <li><a href="javascript://ajax" class="switch-theme" code="navy-theme.css"> Dark Blue Theme </a></li>           
        <li ><a href="{{ url('user/logout')}}"> @lang('core.m_logout') </a></li>
        </ul>
      </li>
    </ul>   
    </nav>   
     


</div>  