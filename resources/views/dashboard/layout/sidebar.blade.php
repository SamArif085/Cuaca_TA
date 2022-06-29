 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
     <div class="position-sticky pt-5">
         <ul class="nav flex-column">
             <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="/dashboard">
                     <h5 class=" bold"> <i class="fa-solid fa-house"></i>
                         Dashboard </h5>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="/dashboard/gempa">
                     <h5 class=" bold"><i class="fa-solid fa-house-crack"></i> Gempa</h5>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="/dashboard/historis">
                     <h5 class="bold"><i class="fa-solid fa-clock-rotate-left"></i> Histori User
                     </h5>
                 </a>
             </li>
         </ul>
     </div>
     <div class="nav-item ">
         <form class="nav-link" action="/logout" method="POST">
             @csrf
             <button class=" btn btn-danger px-3 " href="#">Logout <span data-feather="log-out"></button>
         </form>
     </div>
 </nav>
