<nav class="nav-top" id="menu">
    <a href="Home.php" id="btn_home" class="nav-item nav-logo">Sito Figo</a>
    <a href="Contacts.php" id="btn_contacts" class="nav-item">Contatti</a>
    <button id="btn_user" class="nav-user" onclick="toggleItem('#options')">U</button>
        
    <div class="user-options hide" id="options">
        <ul>
            <li><a id="btn_theme" onclick="toggleTheme()">Cambia Tema</a></li>
            <li><a href="Scripts/PHP/Logout.php" id="btn_logout">Esci</a></li>
        </ul>
    </div>
</nav>