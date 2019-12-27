<nav class="navbar navbar-light bg-light" id="nav">
            <a class="navbar-brand" id="navbar-brandcl"  href="#">
                <img src="/img/logo/logo.svg" width="128" height="40" alt="">
            </a>
            <form method="GET" class="form-inline" id="form-search" action="/lstcours">
                <input id="search-field" class="form-control mr-sm-2" type="search" placeholder="Rechercher un cours" aria-label="Search">
                <button type="submit" class="btn btn-primary" id="btn-search">Rechercher</button>
            </form>
            <a href="#" id="user-sign"> <!-- use React for signed and unsigned users -->
                <p style="color: gray; font-size: 14px; width:20%;">Moussa</p>
                <p style="margin-left:25px;"><img src="/img/other/arrowbottom.svg" alt="" style="width: 16px; height:12px;"></p>
            </a>
        </nav>
        <div class="items">
            <ul class="items-ul">
                <li>
                    <a href="/cours_signed">
                        <img src="/img/items/tests.svg" style=" width: 20px; height:20px; position: relative; top: -2px;">
                        Cours
                    </a>
                </li>
                <li>
                    <a href="/eva">
                        <img src="/img/items/knowledge.svg" style=" width: 20px; height:20px;  position: relative; top: -2px;">
                        Evaluation
                    </a>
                </li>
                <li>
                    <a href="/add_cours">
                        <img src="/img/items/add.svg" style=" width: 20px; height:20px; position: relative;">
                        Ajouter un cours
                    </a>
                </li>
                <li>
                    <a href="/contact_us">
                        <img src="/img/items/recommendation.svg" style=" width: 20px; height:20px; position: relative;">
                        Faire une suggestion
                    </a>
                </li>
            </ul>
</div>