angular.module('mainCtrl', [])

    // inject the Comment service into our controller
    .controller('mainController', function($scope, $http, Article) {
        // object to hold all the data for the new comment form
        $scope.articleData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        Article.get()
            .success(function(data) {
                $scope.articles = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitArticle = function() {
            $scope.loading = true;

            // save the comment. pass in comment data from the form
            // use the function we created in our service
            Article.save($scope.articleData)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
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

        // function to handle deleting a comment
        // DELETE A COMMENT ====================================================
        $scope.deleteArticle = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Article.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Article.get()
                        .success(function(getData) {
                            $scope.articles = getData;
                            $scope.loading = false;
                        });

                });
        };

    });