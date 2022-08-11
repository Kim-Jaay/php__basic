<? include 'head.sub.php'; ?>


<main class="Main">
    <section class="MainVisual">
        <div class="MainSlider">
            <figure class="itm01"></figure>
            <figure class="itm02"></figure>
            <figure class="itm03"></figure>
        </div>
        <div class="slogan">
            <h2><?=$c_slogan?></h2>
            <p><?=$e_slogan?></p>
        </div>
    </section>


    <section class="Customer">
        <ul class="container">
            <li>
                <div class="list">
                    <h3>news &amp; notice
                        <small><a href=""><i class="xi-angle-right-thin"></i></small></a>
                    </h3>
                    <ul>
                        <li>
                            <a href="">헤파필터 자동 냉온풍기
                                <span>2022.12.25</span>
                            </a>
                        </li>
                        <li>
                            <a href="">헤파필터 음이온 공기청정기
                                <span>2022.12.25</span>
                            </a>
                        </li>
                        <li>
                            <a href="">스마트 인디케이터
                                <span>2022.12.25</span>
                            </a>
                        </li>
                        <li>
                            <a href="">항바이러스 핸드레일
                                <span>2022.12.25</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <div class="slider">
                    <div class="ProductSlider">
                        <figure>
                            <img src="./img/product01.jpg" alt="">
                        </figure>
                        <figure>
                            <img src="./img/product02.jpg" alt="">
                        </figure>
                        <figure>
                            <img src="./img/product03.jpg" alt="">
                        </figure>
                    </div>
                    <div class="product_arrows">
                        <i class="xi-arrow-left"></i>
                        <i class="xi-arrow-right"></i>
                    </div>
                </div>

            </li>
            <li>
                <? include 'customer.php'?>
            </li>
        </ul>
    </section>


</main>


<? include 'tail.sub.php' ?>