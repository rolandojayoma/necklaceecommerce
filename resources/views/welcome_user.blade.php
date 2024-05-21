<!doctype html>
<html lang="en">
<head>
    <title>NECKLACE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>

<body>
<header>
    <div class="container">
        <div class="parent">
            <div class="logo">
                <p>NeCkLaCE.coM</p>
            </div>
            <form class="search-container">
                <input id="search-bar" placeholder="Search" type="text"> 
                <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png" alt="Search"></a>
            </form>
            <div class="column-two">
                <div class="item"><img alt="Profile" height="20" src="https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-256.png" width="20"></div>
                <div class="item"><img alt="Cart" height="20" src="{{ asset('assets/images/8.jpeg') }}" width="20"></div>
                <div class="item">
                    <a class="anchor" href="{{url('cart_gold')}}">Cart</a>
                </div>
                <div class="item button-container">
                    <button><a href="{{url('login')}}">Logout</a></button>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="hero-container">
        <img src="{{ asset('assets/images/7.jpeg') }}" alt="Banner Necklaces">
    </section>
    <div class="container">
        <div class="featured-categories">
            <div class="element">
                <h2>New Arrivals</h2>
            </div>
            <div class="columns">
                <div class="column">
                    <img src="{{ asset('assets/images/5.jpeg') }}" alt="Silver Necklace">
                    <h2>Silver</h2>
                </div>
                <div class="column">
                    <img src="{{ asset('assets/images/4.jpeg') }}" alt="Discount Necklace">
                    <h2>7% Off</h2>
                </div>
                <div class="column">
                    <img src="{{ asset('assets/images/3.jpeg') }}" alt="Gold Necklace">
                    <h2>Gold</h2>
                </div>
            </div>
        </div>
        <div class="featured-categories">
            <h2>FEATURED PRODUCTS</h2>
            <div class="columns">
                <div class="column">
                    <a href="{{ url('cross') }}">
                        <img src="{{ asset('assets/images/2.jpeg') }}" alt="Double Cross Gold Necklace">
                        <h2>Double Cross Gold Necklace</h2>
                    </a>
                </div>
                <div class="column">
                    <a href="{{ url('linkup') }}">
                        <img src="{{ asset('assets/images/1.jpeg') }}" alt="LinkUp Silver Necklace">
                        <h2>LinkUp Silver Necklace</h2>
                    </a>
                </div>
                <div class="column">
                    <a href="{{ url('gold') }}">
                        <img src="{{ asset('assets/images/6.jpeg') }}" alt="Gold Shining Snake">
                        <h2>Gold Shining Snake</h2>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="columns">
            <div class="column copyright">
                <p>©2024 NeCkLaCE.coM. All Rights Reserved.</p>
            </div>
            <div class="column-bottom">
                <ul>
                    <li>
                        <a class="anchor" href="#">Terms & Conditions</a>
                    </li>
                    <li>
                        <a class="anchor" href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
