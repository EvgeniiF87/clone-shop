<div class="dashboard-search">

    <div class="search-wrap">

        <input type="text" class="search">

        <button class="search-svg-btn">

            <svg class="search-svg" fill="currentColor">
                <use xlink:href="{{ asset('/images/top-bar/search.svg') }}#Capa_1"/>
            </svg>

        </button>

    </div>

</div>

<div class="dashboard-top-bar_menu">

    <a href="/" class="btn-home">

        <svg class="home" fill="currentColor">
            <use xlink:href="{{ asset('/images/top-bar/home.svg') }}#Capa_1"/>
        </svg>

    </a>

    <a href="#" class="btn-all-group">

        <svg class="th" fill="currentColor">
            <use xlink:href="{{ asset('/images/top-bar/th.svg') }}#Capa_1"/>
        </svg>

    </a>

    <img src="{{ asset('/images/top-bar/avatar.jpeg') }}" alt="" class="admin-avatar">

    <div class="admin-pasport">
        <div class="admin-name">Евгений Федоров</div>
        <div class="role">Администратор</div>
    </div>

    <svg class="expand-button" fill="currentColor">
        <use xlink:href="{{ asset('/images/top-bar/expand-button.svg') }}#Capa_1"/>
    </svg>


</div>