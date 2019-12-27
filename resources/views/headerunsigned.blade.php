<nav class="navbar navbar-light bg-light" id="nav">
            <a class="navbar-brand" id="navbar-brandcl"  href="#">
                <img src="/img/logo/logo.svg" width="128" height="40" alt="">
            </a>
            <form class="form-inline" id="form-search">
                <input id="search-field" class="form-control mr-sm-2" type="search" placeholder="Rechercher un cours" aria-label="Search">
                <button type="button" class="btn btn-primary" id="btn-search">Rechercher</button>
            </form>
            <div id="user-co"> <!-- use React for signed and unsigned users -->
                <a href="/home" class="sign-in" style="text-decoration:none;">Se connecter</a>
                <a href="/register">
                    <button class="btn btn-primary" id="btn-co" type="submit">Créer un compte</button>
                </a>
            </div>
        </nav>
        <div class="items">
            <ul class="items-ul">
                <li>
                    <a href="/cours">
                        <img src="/img/items/tests.svg" style=" width: 20px; height:20px; position: relative; top: -2px;">
                        Cours
                    </a>
                </li>
                <li>
                    <a href="/uneva">
                        <img src="/img/items/knowledge.svg" style=" width: 20px; height:20px;  position: relative; top: -2px;">
                        Evaluation
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/img/items/add.svg" style=" width: 20px; height:20px; position: relative;">
                        Ajouter un cours
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <img src="/img/items/recommendation.svg" style=" width: 20px; height:20px; position: relative;">
                        Faire une suggestion
                    </a>
                </li>
            </ul>
</div>