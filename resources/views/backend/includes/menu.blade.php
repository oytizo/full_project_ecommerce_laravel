<body>
   <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <li class="menu-title">Menu</li>
               <li class="menu-item-has-children dropdown">
                  <a href="{{ Route('categoriesview') }}">Categories</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="{{ Route('productview') }}">Products</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="{{ Route('orderview') }}">Orders</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="{{ Route('userview') }}">User Info</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="{{ Route('contactview') }}">Feedback</a>
               </li>
            </ul>
         </div>
      </nav>
   </aside>