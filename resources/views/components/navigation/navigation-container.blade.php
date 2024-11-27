 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container">
         <!-- Brand Logo -->
         <a class="navbar-brand d-flex align-items-center gap-2" href="/">
             {{ $siteName }}
         </a>

         <!-- Toggler -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Navigation Items -->
         <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
             <ul class="navbar-nav">
                 {{ $slot }}
             </ul>
         </div>
     </div>
 </nav>
