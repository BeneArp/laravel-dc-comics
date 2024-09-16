@php
    $comicsMenu = config('menues.nav');
    $shopMenu = config('menues.footerNav.shopLinks');
    $dcMenu = config('menues.footerNav.dcLinks');
    $siteMenu = config('menues.footerNav.siteLinks')
    // dump($dcMenu)

@endphp

<footer>
    <div id="nav-container">
        <div class="container">

            <nav>



            </nav>

            <img src="/img/dc-logo-bg.png" alt="">

        </div>
    </div>

    <div id="footer-banner">
        <div class="container">

            <div class="button">
                SIGN-UP NOW!
            </div>

            <div id="social">
                <h3>FOLLOW US</h3>
                <a :href="social.url" v-for="social in socialLinks"><img :src="getImagePath(`../assets/${social.image}`)" :alt="social.alt"></a>
            </div>

        </div>
    </div>
</footer>
