<?php ?>
<nav class="sidebar">
            <input type="checkbox" class="sidebar_checkbox" id="navi_toggle">
            <label for="navi_toggle" class="sidebar-toggle_button"><span class="sidebar-menu_icon"></span></label>
            <div class="sidebar-menu_background"></div>
    <ul class="sidebar_nav" id="menu">

<li class="sidebar_list">
    <a href="index.php?page=price-cards" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-home_filled"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Go Home</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="#" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-pencil"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Edit Profile</button>
    </a>
            <!--nested ul-->
<ul class="sidebar_nav">
    <li class="sidebar_list">
        <a data-page="#" href="#modal_popup" class="sidebar_link">
            <svg class="sidebar_icon">
                <use xlink:href="./svg/symbol-defs.svg#icon-file-picture"></use>
            </svg>
            <button type="submit" class="sidebar_link-btn">Edit Photo</button>
        </a>
    </li>
    
    <li class="sidebar_list">
        <a href="../../flexapp/user.php" class="sidebar_link">
            <svg class="sidebar_icon">
                <use xlink:href="./svg/symbol-defs.svg#icon-user-plus"></use>
            </svg>
            <button type="submit" class="sidebar_link-btn">Update Profile</button>
        </a>
    </li>

    <li class="sidebar_list">
        <a href="../../flexapp/edit-user.php" class="sidebar_link">
            <svg class="sidebar_icon">
                <use xlink:href="./svg/symbol-defs.svg#icon-eye"></use>
            </svg>
            <button type="submit" class="sidebar_link-btn">Edit/View Profile</button>
        </a>
    </li>

    <li class="sidebar_list">
        <a href="./edit-password" class="sidebar_link">
            <svg class="sidebar_icon">
                <use xlink:href="./svg/symbol-defs.svg#icon-pencil"></use>
            </svg>
            <button type="submit" class="sidebar_link-btn">Change Password</button>
        </a>
    </li>
</ul>
<!--end of nested ul-->
</li>

<li class="sidebar_list">
    <a href="transactions.php" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-coin-dollar"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Transactions</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="comments-table"  class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-bubbles3"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Comments</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="estate.php" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-attachment"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Create Estate Post</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="index.php?page=unpaid-posts" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-library"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Pay Posts</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="index.php?page=posts" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-loop"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Active Posts</button>
    </a>
</li>

    </ul>
        </nav>
        <!--end of sidebar-->