<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Header file -->
    <?php include("head.php"); ?>
    <title>Jonah Louis | Post</title>
</head>
<body>
    <div class="page-wrapper">
    <!-- Navigation bar -->
    <?php include("layout/nav.php"); ?>
    <!-- Social icon bar (Static left side) -->
    <?php include("layout/social.php"); ?>

    <!-- Main header -->
        <div class="c-intro">
            <h1 class="uni-mainHeader">My Posts & Blogs</h1>
        </div>
    <!-- Blog content -->
        <div class="container-sm" id="post-content">
            <!--- Section #1 -->
            <h4 class="uni-subHeader" id="post-subHeader">Intro to Web Programming</h4>
            <table class="table table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Post Name</th>
                        <th scope="col">Post Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable-row" data-href="myPosts/HTML_Lesson_1">
                        <td>1</td>
                        <td>HTML Basics</td>
                        <td>11/16/2020</td>
                    </tr>               
                </tbody>
            </table>
            <!-- Section #2 -->
        </div>
    </div>
</body>
</html>