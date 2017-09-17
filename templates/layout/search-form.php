
<div class="global-search">

    <div class="close">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
    </div>

    <div class="search container">

        <div class="input-cnt">
            <form id="searchform" role="search" method="get" action="<?php echo esc_url( home_url('/') ); ?>">
                <input id="search-feild" type="text" value="<?php echo get_search_query(); ?>"
                       name="s" autofocus placeholder="Pretražite Telegram...">
            </form>
        </div>

        <div class="loader">
            <div class="bar"></div>
        </div>

        <div class="search-claim">
            <h2>Upišite pojam koji želite pretraživati</h2>
            <p>Najčešće su to pojmovi poput "Kolinda", "politika", "kriminal", "Trump" i slično...</p>
        </div>

    </div>
</div>
