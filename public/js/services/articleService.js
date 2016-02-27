angular.module('articleService', [])

    .factory('Article', function($http) {

        return {
            // get all the articles
            get : function() {
                return $http.get('/api/articles');
            },

            // save a article (pass in article data)
            save : function(articleData) {
                return $http({
                    method: 'POST',
                    url: '/api/articles',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(articleData)
                });
            },

            // destroy a article
            destroy : function(id) {
                return $http.delete('/api/articles/' + id);
            }
        }

    });