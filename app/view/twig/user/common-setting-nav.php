<ul class="nav-links center user-profile-nav scrolling-tabs">

    <li class="js-groups-tab <? if($profile_nav=='custom_index'){ echo 'active';} ?>">
        <a href="/user/widgets"><i class="fa fa-arrows" ></i> 自定义面板</a>
    </li>
    <li class="js-groups-tab <? if($profile_nav=='preferences'){ echo 'active';} ?>">
        <a href="/user/preferences"><i class="fa fa-eye" ></i> 界面设置</a>
    </li>
    <li class="js-groups-tab <? if($profile_nav=='filters'){ echo 'active';} ?>">
        <a href="/user/filters"><i class="fa fa-filter" ></i> 自定义过滤器</a>
    </li>
   <li class="js-groups-tab <? if($profile_nav=='notify'){ echo 'active';} ?>">
        <a data-target="div#groups" data-action="groups" data-toggle="tab" href="/users/sven/groups"><i class="fa fa-envelope" ></i> 通知设置(开发中)</a>
    </li>
    <li class="js-snippets-tab <? if($profile_nav=='profile_edit'){ echo 'active';} ?>">
        <a  href="/user/profile_edit"><i class="fa fa-edit" ></i> 修改资料</a>
    </li>
    <li class="js-snippets-tab <? if($profile_nav=='password'){ echo 'active';} ?>">
        <a href="/user/password"><i class="fa fa-lock" ></i> 修改密码</a>
    </li>

</ul>