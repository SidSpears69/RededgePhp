
                <h2 class="news-section__title">Новости</h2>
                <div class="news-section__slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($data as $news): ?>
                            <div class="news swiper-slide">
                                <div class="news__wrapper">
                                    <span class="news__date">
                                    <?=date('d.m.Y', $news['create_ts']); ?>
                                    </span>
                                    <h3 class="news__title"><?=$news['name']; ?></h3>
                                    <a href="../news.php?id=<?=$news['id'] ?>" class="news__link">Подробнее</a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            