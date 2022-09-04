<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="<?= $this->getStyleSheet() ?>">
    <script defer src="https://kit.fontawesome.com/3fb918250b.js" crossorigin="anonymous"></script>
    <title>Dashboard | blog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
    <aside class="dashboard_aside">
        <div class="user_info">
            <img src="https://github.com/samuel-mil.png" alt="user">
            <div class="user_info_box">
                <h3>Samuel Milhomens</h3>
                <strong>admin</strong>
            </div>
        </div>

        <main>
            <ul>
                <li class="page_category_title">Dashboard</li>

                <li class="page_title">
                    <a href="/dashboard">Home</a>
                </li>

                <li class="page_category_title">Users</li>

                <li class="page_title">
                    <a href="/dashboard/listUsers">List users</a>
                </li>

                <li class="page_title">
                    <a href="/dashboard/createUser">Create user</a>
                </li>

                <li class="page_category_title">Posts</li>

                <li class="page_title">
                    <a href="/dashboard/listPosts">List posts</a>
                </li>

                <li class="page_title">
                    <a href="#">Create post</a>
                </li>
            </ul>
        </main>
    </aside>
    <header class="dashboard_header">
        <h1>Dashboard <span>v: 1.0.0 beta</span></h1>
    </header>
    <div class="dashboard_pages">
        {{content}}
    </div>
    <div class="clear"></div>
</body>
</html>
