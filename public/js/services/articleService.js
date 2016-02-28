angular.module('articleService', [])

    .factory('Article', function($http){
        return{

            get : function(){
                return $http.get('/api/articles');
            },

            save : function(articleData) {
                return $http({
                    method  :   'POST',
                    url     :   '/api/articles',
                    data    : $.param(articleData),
                    headers : {'Content-Type' : 'application/x-www-form-urlencoded'}

                });
            },

            destroy : function(id) {
                return $http.delete('/api/articles/' + id);
            },

            increase : function(id){
                return $http.get('api/articles/increase/' + id);
            }
        }
    });