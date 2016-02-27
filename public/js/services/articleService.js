angular.module('articleService', [])

.factory('Article',  function($http){
    return {

        //get all the articles
        get : function(){
            return  $http.get('/api/articles')
        },

        //save article
        store : function(articleData) {
            return $http({
                method : 'POST',
                url : '/api/articles',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data : $.param(articleData)
            });
        },

        //delete comment
        destroy : function(id){
            return $http.delete('/api/articles' + id);
        }
    }
});