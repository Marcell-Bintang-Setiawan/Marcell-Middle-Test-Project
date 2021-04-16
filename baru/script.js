function cariFilm() {
    $('#movie-list').html('');

    $.ajax({
        url : 'http://omdbapi.com',
        type : 'get',
        dataType:'json',
        data: {
            'apikey' : 'e6386336',
            's' : $('#search-input').val()
        },
        success: function(result) {
            if(result.Response == "True"){
                
                let movies = result.Search;

                $.each(movies, function(i, data){
                    $('#movie-list').append(`
                        <div class="col-md-3"> 
                            <div class="card mb-3">
                                <img class="card-img-top" src="`+ data.Poster +`" alt="">
                                <div class="card-body bg-warning">
                                <h5 class="card-title">`+ data.Title +`</h5>
                                <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
                                <a href="#" class="card-link see-detail text-dark" data-toggle="modal" data-target="#exampleModal" data-id="`+ data.imdbID +`">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        <div>
                    `)
                });
                
                $('#search-input').val('');

            }else{
                $('#movie-list').html(`
                
                <div class="col">
                    <h1 class="text-center text-light" style="color: white;"> Film Tidak Ditemukan </h1>
                <div>

                `)
            }
        }
    });

}


$('#search-button').on('click', function (){
    cariFilm();
});

$('#search-input').on('keyup', function(e){
    if(e.keyCode === 13){
        cariFilm();
    }
});




$('#movie-list').on('click','.see-detail', function () {
    
    $.ajax({
        url:'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apikey' : 'e6386336',
            'i' : $(this).data('id')
        } ,
        success : function(movie){
            if (movie.Response === "True"){
                
                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="`+ movie.Poster +`" class="img-fluid">
                            </div>

                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><h3>`+ movie.Title +`</h3></li>
                                    <li class="list-group-item">Rilis : `+ movie.Released +`</li>
                                    <li class="list-group-item">Genre : `+ movie.Genre +`</li>
                                    <li class="list-group-item">Penulis : `+ movie.Writer +`</li>
                                    <li class="list-group-item">Pemain : `+ movie.Actors +`</li>
                                    <li class="list-group-item">Bahasa : `+ movie.Language +`</li>
                                    <li class="list-group-item">Negara : `+ movie.Country +`</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `)
            }
        }
    });
});