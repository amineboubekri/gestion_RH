
<div class="container-fluid">
  <div class="row">
    <div class="col-3 sidebar">
      <div class="sidebar-header">
        <div class="logo">
          <hr class="line-top">
          <span class="text">Direction Regionale</span>
          <hr class="line-bottom">
        </div>
      </div>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('acceuil') }}">Acceuil</a>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Employes</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('empl.list') }}">Liste des employes</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('empl.create') }}">Ajouter un employe</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Conge</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('conge.list') }}">Liste des conges</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('conge.create2') }}">Ajouter un conge</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Mutation</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('mutation.list') }}">Liste des mutations</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('mutation.create') }}">Ajouter une mutation</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">allocation</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('allocation.list') }}">Liste des allocations</a></li>
            @if(auth()->check())
            <li ><a class="nav-item" href="{{ route('allocation.create') }}">Ajouter une allocation</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Diplome</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('diplome.list') }}">Liste des diplomes</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('diplome.create') }}">Ajouter un diplome</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Echelle</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('echelle.list') }}">Liste des echelles</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('echelle.create') }}">Ajouter un echelle</a></li>
            @endif
          </ul>
        </li>

          <!-- <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Grade</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('grade.list') }}">Liste des grades</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('grade.create') }}">Ajouter un grade</a></li>
            @endif
          </ul>
        </li>
          -->
        

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Mission</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('mission.list') }}">Liste des missions</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('mission.create') }}">Ajouter une mission</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Absnece</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('absence.list') }}">Liste des absences</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('absence.create') }}">Ajouter une absence</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Motivation</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('motivation.list') }}">Liste des motivations</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('motivation.create') }}">Ajouter une motivation</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item with-submenu">
          <a class="nav-link submenu-toggle">Notation</a>
          <ul class="submenu">
            <li><a class="nav-item" href="{{ route('notation.list') }}">Liste des notations</a></li>
            @if(auth()->check())
            <li><a class="nav-item" href="{{ route('notation.create') }}">Ajouter une notation</a></li>
            @endif
          </ul>
        </li>
        
      

      </ul>

      @if(auth()->check())
          <div class="sidebar-footer">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.show') }}">{{ auth()->user()->name }}</a>
              </li>
            </ul>
          </div>
          @else
          <div class="sidebar-footer">
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">Connexion</a>
              </li>
            </ul>
          </div>
          @endif
          
        </div>

    </div>
  </div>
</div>



<script>
  const submenuToggles = document.querySelectorAll('.submenu-toggle');
  submenuToggles.forEach((toggle) => {
    toggle.addEventListener('click', (event) => {
      event.preventDefault();
      const submenu = toggle.nextElementSibling;
      submenu.classList.toggle('submenu-open');
    });
  });

  
  const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
  sidebarLinks.forEach(link => {
    link.addEventListener('click', () => {
      sidebarLinks.forEach(link => link.classList.remove('active'));
      link.classList.add('active');
    });
  });
 
</script>

  <style>

    .navbar-nav .nav-link {
      display: inline-block;
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 10px;
      text-decoration: none;
      color: #333;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      
      cursor: pointer;
    }
      .nav-link {
      text-decoration: none;
      
      font-size: 16px;
      display: flex;
      align-items: center;
    }

    .nav-link i {
      margin-right: 10px;
      font-size: 20px;
      
    }

    .nav-link:hover i {
      
    }

    .nav-link:hover {
      
      color: #fff;
    }
    .nav-item.with-submenu:hover .submenu {
        display: block;
    }
    .nav-link.submenu-toggle:hover {
      cursor: pointer;
    }
    .title:hover {
      cursor: pointer;
    }
    .open .submenu-list {
    display: block;
    }

    .sidebar .nav-link.active {
    font-weight: bold;
    }

    a {
      color: white;
      font-family: Arial, sans-serif;
      font-size: 16px; 
    }

    .navbar-nav li a {
      font-family: 'Open Sans', sans-serif;
      font-size: 18px;
      color: #fff;
    }

    .navbar-nav .submenu-toggle {
      font-family: 'Open Sans', sans-serif;
      font-size: 18px;
      color: #fff;
    }
    .submenu {
      display: none;
    }
    .submenu-open {
      display: block;
    }
    .sidebar {
      background-color: #007bff;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px;
      overflow-y: scroll;
    }
    .sidebar-header {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
      
    }
    .sidebar-logo {
      max-width: 200px;
      margin-right: 0px;
    }
    .nav-link {
      color: #fff;
      font-weight: 500;
      margin-bottom: 10px;
    }
    .nav-link:hover {
      color: #fff;
      text-decoration: none;
    }
    .sidebar-footer {
    position: sticky; 
    bottom: 0; 
    background-color: #007bff; 
    padding: 0px; 
    border-top: 0px solid #ddd; 

  } 
    #leftCol {
    position: fixed;
    width: 150px;
    overflow-y: scroll;
    top: 0;
    bottom: 0;
  }
  .WhateverYourNavIs {
      max-height: calc(100vh - 9rem);
      overflow-y: auto;
  }
  ::-webkit-scrollbar {
    width: 10px;
  }
  ::-webkit-scrollbar-track {
    background: #007bff;
  }
  ::-webkit-scrollbar-thumb {
    background: #888;
  }
  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
  .logo {
  text-align: center; 
  }
.line-top,
.line-bottom {
  border: none; 
  border-top: 4px solid #FFFFFF; 
  margin: 10px 0; 
}

.text {
  font-size: 21.6px; 
  font-weight: Bold; 
  color: #FFFFFF;
  margin-bottom: 0px;
}
  </style>