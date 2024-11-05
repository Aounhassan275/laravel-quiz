<aside class="col-sm-3 page-sidebar sidebar-offcanvas" id="faceted-search-container">
    <nav>
       <span id="close-sidebar" class=" fa fa-times" ></span>
       <!-- BEGIN Side All Categories -->
       <div class="module  sidebar--categories" >
          <h5 class="block-title"><i class="fa fa-diamond"></i> All Categories</h5>
          <div class="block-content clearfix">
             <ul class="navList">
                 @for($i = 1; $i <= 25;$i++)
                <li class="navList-item">
                   <a class="navList-action" href="#" alt="Category {{$i}}" title="Category {{$i}}">Category {{$i}}</a>
                </li>
                @endfor
                <li class="navList-item">
                   <a class="navList-action is-current" href="#" alt="All Categories" title="All Categories">All Categories</a>
                </li>
             </ul>
          </div>
       </div>
    </nav>
</aside>