(function(){
    "use strict";

    angular.module('Bookmarks',[
        //dependencies here
    ])

    .controller('MainController',function($scope){
        $scope.name = 'Carl'
        $scope.categories = ['Id','Nombre','Genero','Precio'];
        $scope.bookmarks = [ //<--- Adding the data
            {id:1,name:'Harry Potter',gender:'ficcion',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMTY2MTk3MDQ1N15BMl5BanBnXkFtZTcwMzI4NzA2NQ@@._V1_SX300.jpg'},
            {id:2,name:'Mad Max',gender:'ficcion',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMTM4Mjg5ODEzMV5BMl5BanBnXkFtZTcwMDc3NDk0NA@@._V1_SX300.jpg'},
            {id:3,name:'Titanic',gender:'suspenso',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMjExNzM0NDM0N15BMl5BanBnXkFtZTcwMzkxOTUwNw@@._V1_SX300.jpg'},
            {id:4,name:'Frozen',gender:'aventura',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_SX300.jpg'},
            {id:5,name:'Iron Man',gender:'ficcion',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMTczNTI2ODUwOF5BMl5BanBnXkFtZTcwMTU0NTIzMw@@._V1_SX300.jpg'},
            {id:6,name:'Crepusculo',gender:'ficcion',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMTQ2NzUxMTAxN15BMl5BanBnXkFtZTcwMzEyMTIwMg@@._V1_SX300.jpg'},
            {id:7,name:'Acrividad Paranormal',gender:'terror',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMjY1NjcxODQ4MV5BMl5BanBnXkFtZTcwMzUxNjM4Mg@@._V1_SX300.jpg'},
            {id:7,name:'Volver al Futuro',gender:'aventura',year:2010,url:'http://ia.media-imdb.com/images/M/MV5BMjA5NTYzMDMyM15BMl5BanBnXkFtZTgwNjU3NDU2MTE@._V1_SX300.jpg'}
        ];
    });

})();