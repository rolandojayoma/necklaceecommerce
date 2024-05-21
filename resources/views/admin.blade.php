<!doctype html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <style>
        body {
            color: #00171F;
            font-family: 'Lato', sans-serif;
            background-color: #f6f6f6;
            margin: 0;
        }

        a {
            color: #007EA7;
            text-decoration: none;
        }

        p {
            color: #444;
            font-size: 14px;
            line-height: 20px;
        }

        h1, h2 {
            font-family: 'Montserrat', sans-serif;
        }

        h1 {
            padding-bottom: 10px;
            margin-top: 0;
            font-size: 42px;
            letter-spacing: 1px;
            border-bottom: 2px solid #007EA7;
            cursor: default;
        }

        h2 {
            color: #003459;
            margin-bottom: 10px;
        }

        table {
            margin-top: 20px;
            width: 100%;
            color: #29516d;
            font-size: 14px;
            border-spacing: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
        }

        thead th {
            text-align: left;
            border-bottom: 2px solid #007EA7;    
        }

        tbody tr:nth-of-type(odd) {
            background-color: #f6f6f6;
        }

        tbody tr:hover {
            background-color: #ecf7ff;
        }

        .btn {
            padding: 10px;
            margin: 0 5px;
            border: 0;
            color: white;
            background-color: #00A8E8;
            border-radius: 5px;
            transition: background-color 200ms ease-out;
        }

        .btn:hover {
            background-color: #007EA7;
        }

        .btn-delete {
            background-color: #d90000;
        }

        .btn-delete:hover {
            background-color: #a30000;
        }

        .app-container {
            display: flex;
            flex-flow: row wrap;
            height: 100vh;
        }

        .nav {
            flex: 1;
            max-width: 200px;
            background-color: #007EA7;
            -webkit-font-smoothing: antialiased;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .nav__logo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
            color: #ccc;
            font-size: 24px;
            letter-spacing: 1px;
            background-color: #00171F;
            cursor: default;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 1);
        }

        .nav__list {
            margin: 40px 0 0;
            padding: 0;
            list-style: none;
        }

        .nav__list-item {
            position: relative;
        }

        .nav__item-link {
            display: block;
            padding: 15px 30px;
            color: #eee;
            font-weight: 500;
            transition: background-color 200ms ease-out, color 200ms ease-out;
        }

        .nav__item-link:hover, .nav__list-item--active .nav__item-link {
            background-color: #FFFBFC;
            color: #007EA7;
            font-weight: 700;
            padding-left: 40px;
        }

        .app-view {
            display: flex;
            flex: 1;
            flex-direction: column;
            overflow-y: auto;
        }

        .utility-bar {
            height: 60px;
            font-size: 13px;
            font-weight: 300;
            background-color: #002a38;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .utility-bar__inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            height: 100%;
        }

        .utility-bar__list {
            display: flex;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .utility-bar__item-link {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            color: #007EA7;
            transition: color 200ms ease-out;
        }

        .utility-bar__item-link:hover {
            color: #00A8E8;
        }

        .utility-bar__indicator {
            position: relative;
            left: -7px;  
            top: 9px;
            width: 14px;
            height: 14px;
            color: white;
            font-size: 10px;
            text-align: center;
            background-color: #d90000;
            border-radius: 100%;
        }

        .utility-bar__account {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .utility-bar__account:hover .utility-bar__account-name {
            color: #eee;
        }

        .utility-bar__account-avatar {
            display: inline-block;
            margin-right: 10px;  
            width: 40px;
            height: 40px;
            background-color: #666;
            background-image: url('{{ asset('assets/images/23.jpeg') }}');
            background-size: 100%;
            border-radius: 100%;
        }

        .utility-bar__account-name {
            color: #00A8E8;
            font-weight: 500;
            transition: color 200ms ease-out;
        }

        .content {
            flex: 1;
            padding: 30px;
            background-color: #FFFBFC;
            -webkit-font-smoothing: antialiased;  
        }
    </style>
</head>
<body>
    <div class="app-container">
        <nav class="nav">
            <a href="#" class="nav__logo">Admin</a>
            <ul class="nav__list">
                <li class="nav__list-item">
                    <a href="#" class="nav__item-link">Dashboard</a>
                </li>
                <li class="nav__list-item">
                    <a href="#" class="nav__item-link">Products</a>
                </li>
                <li class="nav__list-item">
                    <a href="#" class="nav__item-link">Statuses</a>
                </li>
                <li class="nav__list-item">
                    <a href="{{url('login')}}" class="nav__item-link">Logout</a>
                </li>
            </ul>
        </nav>
        <div class="app-view">
            <nav class="utility-bar">
                <div class="utility-bar__inner">
                    <ul class="utility-bar__list">
                        <li class="utility-bar__list-item">
                            <a href="#" class="utility-bar__item-link">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.2" baseProfile="tiny" x="0px" y="0px" viewBox="0 0 100 100" width="26px" xml:space="preserve">
                                    <path fill="#999" d="M10,66h16v24l24-24h40V10H10V66z M26,26h48v8H26V26z M26,42h48v8H26V42z"/>
                                </svg>
                                <span class="utility-bar__indicator">3</span>
                            </a>
                        </li>
                        <li class="utility-bar__list-item">
                            <a href="#" class="utility-bar__item-link">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" fill="#999" width="20px" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 0.276083 0.32331250000000004" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd">
                                    <defs></defs>
                                    <g>
                                        <path class="fil0" d="M0.185915 0.247296c-0.00283406,0.024408 -0.0235765,0.0433539 -0.0487436,0.0433539 -0.0251671,0 -0.0459057,-0.0189459 -0.0487436,-0.0433539l0.0974872 0zm-0.11863 -0.198392c0.015799,-0.0138347 0.0311442,-0.0218257 0.0461308,-0.0250946 6.4844e-005,-0.0131595 0.0107527,-0.0238092 0.0239312,-0.0238092 0.0130794,0 0.0237062,0.0104933 0.0239236,0.0235193 0.0154252,0.00307055 0.0312395,0.0111227 0.047523,0.0253845 0.0264907,0.0291493 0.0340927,0.0621854 0.0291378,0.0978076 -0.00316973,0.076226 0.0178474,0.055453 0.0381511,0.0874021 -0.0460163,0 -0.0920289,0 -0.138041,0 -0.0460163,0 -0.0920289,0 -0.138041,0 0.0203038,-0.031949 0.0413171,-0.0111761 0.0381511,-0.0874021 -0.00495866,-0.0356222 0.00264335,-0.0686583 0.029134,-0.0978076z"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="utility-bar__account">
                        <span class="utility-bar__account-avatar"></span>
                        <span class="utility-bar__account-name">Rolando Jayoma</span>
                    </a>
                </div>
            </nav>
            <main class="content">
                <h1>Dashboard</h1>
                <h2>Subheading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maiores hic, magnam deserunt ex voluptatum, ducimus consectetur et aut nobis quod maxime odit itaque natus ipsam quisquam quo inventore laudantium.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptates fuga debitis explicabo voluptatum deleniti?</p>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</body>
</html>
