angular.module('angularCtrl', [])

.controller('mainController', function($scope, $http, Article){
    $scope.articleData = {};

    $scope.loading = true;

    Article.get()
        .success(function(data){
            $scope.articles = data;
            $scope.loading = false;
        });


    $scope.submitArticle = function(){
        $scope.loading = true;

        Article.save($scope.articleData)
            .success(function(data){

                Article.get()
                    .success(function(getData){
                        $scope.articles = getData;
                        $scope.loading = false;
                    });
            })

            .error(function(data){
                console.log(data);
            });
    };

    $scope.deleteArticle = function(id){
        $scope.loading = true;

        Article.destroy(id)
            .success(function(data){

                Article.get()
                    .success(function (getData) {
                        $scope.articles = getData;
                        $scope.loading = false;
                    });
            });
    };
});