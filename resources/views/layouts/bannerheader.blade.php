<header class="bannerheader">
    <div id="background">
        <img src="" alt="x" id="logo">

        <a href="/" id="home-button">HOME</a>

        <a href="games" id="allgames-button">ALLGAMES</a>

        <div class="dropdown">
            <button class="dropbtn">PICTUREPAGE</button>
            <div class="dropdown-content">
                <a href="edition1">Edition 1</a>
                <a href="edition2">Edition 2</a>
                <a href="edition3">Edition 3</a>
            </div>
        </div>

        <a href="infopage" id="information-button">INFORMATION</a>

        <a href="drinks" id="profile-button">PROFILE</a>
    </div>
</header>

<script>
    window.addEventListener('scroll', function () {
        let header = document.querySelector('header');
        header.classList.toggle('scrolling-active', window.scrollY > 0)
    })
</script>
