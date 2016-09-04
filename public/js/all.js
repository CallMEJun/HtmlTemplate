(function(){
    var paths = [
        '/js/jquery.min.js', '/js/jquery.pjax.js','/js/chelper.js','/js/jquery.validate.min.js','/js/bootstrap.min.js'
    ];
    
    for(var i = 0,file; file = paths[i++];){
        // document.write('<script type="text/javascript" src="'+ file + '?v=1.1.0"></script>');
        document.write('<script type="text/javascript" src="'+ file + '"></script>');
    }
})();