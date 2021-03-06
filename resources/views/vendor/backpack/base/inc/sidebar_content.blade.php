<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item">
<a class="nav-link" href="{{ backpack_url('dashboard') }}">
<i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Users, Roles, Permissions -->

@if(auth('backpack')->user()->hasRole('admin'))
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
	<ul class="nav-dropdown-items">
        <li class='nav-item'>
            <a class='nav-link' href='{{ backpack_url('medecin') }}'><i class='nav-icon la la-users'></i> Users</a>
        </li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('role') }}'><i class='nav-icon la la-question'></i> Roles</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('permission') }}'><i class='nav-icon la la-question'></i> Permissions</a></li>
    </ul>
</li>
@elseif (auth('backpack')->user()->hasRole('medecin'))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('article') }}'><i class='nav-icon la la-question'></i> Articles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-question'></i> Categories</a></li>
@endif
