<?php include 'header.php'; ?>
<main>
    <section class="relative overflow-hidden rounded-[0_0_24px_24px] md:rounded-[0_0_40px_40px] text-white">
        <img src="assets/images/bn-blog.jpg" class="w-full object-cover min-h-[420px] md:min-h-[480px] lg:min-h-[600px]" alt="">
        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center pt-[60px] pb-4 md:pb-0">
            <div class="container">
                <div class="max-w-[890px] leading-[1.2]">
                    <h1 class="font-semibold md:font-bold text-24 md:text-36 lg:text-48 xl:text-52 2xl:text-60">Khoảng Lặng Cuộc Sống - Những Chia Sẻ Chân Thành Dành Cho Bạn.</h1>
                    <div class="desc playfair text-18 md:text-24 lg:text-28 xl:text-32 2xl:text-40 italic mt-4 md:mt-5 lg:mt-8">
                        Hãy dừng ở đây một chút và lắng nghe bản thân qua những góc nhìn sâu sắc!
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 md:py-[60px] 2xl:py-[80px]">
        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5 md:gap-y-10">
                <?php
                for ($x=1;$x<=9;$x++) { ?>
                    <div class="item">
                        <div class="avarta overflow-hidden rounded-5 mb-3 md:mb-6">
                            <img src="assets/images/blog-2.png" class="w-full object-cover aspect-[104/67]" alt="">
                        </div>
                        <div class="info">
                            <div class="date mb-1 md:mb-2 text-12 md:text-16">21/12/2025</div>
                            <h3 class="line-clamp-[2]">
                                <a href="" class="block text-14 md:text-20 xl:text-24 font-semibold">Ra mắt thương hiệu giao hàng cho đơn trên 20 kg  hàng cho đơn trên 20 kg</a>
                            </h3>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <div class="text-center mt-5 md:mt-[60px]">
                <a href="" class="btn-main loadmore text-green border border-solid border-green hover:bg-green hover:text-white">
                    <span>Xem thêm</span>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 12L15 18L8 12" stroke="#008750" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <?php include 'bottom-2.php'; ?>
</main>
<?php include 'footer.php'; ?>
