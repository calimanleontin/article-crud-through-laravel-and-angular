angular.module('mainCtrl', [])

    // inject the Article service into our controller
    .controller('mainController', function($scope, $http, Article) {
        // object to hold all the data for the new Article form
        $scope.articleData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the Articles first and bind it to the $scope.Articles object
        // use the function we created in our service
        // GET ALL ArticleS ==============
        Article.get()
            .success(function(data) {
                $scope.articles = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A Article ================
        $scope.submitArticle = function() {
            $scope.loading = true;

            // save the Article. pass in Article data from the form
            // use the function we created in our service
            Article.save($scope.articleData)
                .success(function(data) {

                    // if successful, we'll need to refresh the Article list
                    Article.get()
                        .success(function(getData) {
                            $scope.articles = getData;
                            $scope.loading = false;
                        });

                })
                .error(function(data) {
                    console.log(data);
                });
        };

        // function to handle deleting a Article
        // DELETE A Article ====================================================
        $scope.deleteArticle = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Article.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the Article list
                    Article.get()
                        .success(function(getData) {
                            $scope.articles = getData;
                            $scope.loading = false;
                        });

                });
        };

    });