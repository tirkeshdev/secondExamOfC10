<div class="container-xl">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <a href="{{route('book.index')}}"><img src="{{asset('img/LITERARY-criticism-books-shareimage.jpg')}}" alt="" class="img-fluid"></a>
                <div class="carousel-caption bg-dark bg-opacity-75">
                    <h3>Type of books</h3><p>There are many type of books on TGbookstore</p>
                </div>
            </div>
            <div class="carousel-item text-center">
                <a href="{{route('book.index')}}"><img src="{{asset('img/new-books-category-share-image.jpg')}}" alt="New books" class="img-fluid" ></a>
                <div class="carousel-caption bg-dark bg-opacity-75">
                    <h3>New books</h3>
                    <p>
                        The newest books on TGbookstore
                    </p>
                </div>
            </div>
            <div class="carousel-item text-center">
                <a href="{{route('book.index')}}"><img src="{{asset('img/thirdimg.jpg')}}" alt="New York" class="img-fluid" ></a>
                <div class="carousel-caption bg-dark bg-opacity-75">
                    <h3>Best books</h3>
                    <p>
                        Best Books for Book Lovers </p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>