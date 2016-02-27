<!doctype html> <html lang="en"> <head> <meta charset="UTF-8"> <title>Laravel and Angular Article System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .article    { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
    <script src="js/services/articleService.js"></script> <!-- load our service -->
    <script src="js/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="articleApp" ng-controller="mainController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Laravel and Angular Single Page Application</h2>
        <h4>Article System</h4>
    </div>

    <!-- NEW COMMENT FORM =============================================== -->
    <form ng-submit="submitArticle()"> <!-- ng-submit will disable the default form action and use our function -->

        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="author" ng-model="articleData.author" placeholder="Name">
        </div>

        <!-- COMMENT TEXT -->
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="content" ng-model="articleData.text" placeholder="Say what you have to say">
        </div>

        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

    <!-- THE COMMENTS =============================================== -->
    <!-- hide these comments if the loading variable is true -->
    <div class="article" ng-hide="loading" ng-repeat="article in articles">
        <h3>Article #{{ article.id }} <small>by {{ article.author }}</h3>
        <p>{{ article.content }}</p>

        <p><a href="#" ng-click="deleteArticle(article.id)" class="text-muted">Delete</a></p>
    </div>

</div>
</body>
</html>