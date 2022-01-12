<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu phone</title>
    <link rel="stylesheet" href="menuPhone.css" />
    <!-- awasome-->
    <script src="https://kit.fontawesome.com/fd6f692e37.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- *********************
    galery image movie
    *********************-->
    <div class="gallery-image-movie">
        <div class="gallery-image-container">
            <div class="gallery-image-grid">
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-1.svg');"></div>
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-2.svg');"></div>
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-3.svg');"></div>
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-4.svg');"></div>
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-5.svg');"></div>
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-6.svg');"></div>
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-7.svg');"></div>
                <div class="gallery-image-caja" style="--gImgCaja: url('./assets/gallery-movie/img-8.svg');"></div>
            </div>
        </div>
    </div>

    <!-- 
            lower-menu
         -->
    <div class="lower-menu">
        <div id="searchIconMenu" class="search-icon-menu center pBetween">
            <div class="icon-menu-col center">
                <!-- <i class="fas fa-arrow-left"></i> -->
                <input class="custom" id="btnSearch" type="text" name="search" placeholder="Search.." />
            </div>
        </div>
        <div class="icons-menu pBetween">
            <div class="icons-menu-container">
                <div class="left-icon-menu center">
                    <div class="icon-menu-col">
                        <label class="btnBuscarClick" for="search" id="btnBuscarClick">
                            <i class="fas fa-search"></i>
                        </label>
                    </div>
                </div>
                <div class="right-icon-menu center">
                    <div class="icon-menu-col">
                        <i class="fas fa-history"></i>
                    </div>
                    <div class="icon-menu-col">
                        <i class="fas fa-comment-alt"></i>
                    </div>
                    <div class="icon-menu-col">
                        <i class="fas fa-phone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>