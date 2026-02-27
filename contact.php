<?php include 'header.php'; ?>
<main>
    <section class="relative overflow-hidden rounded-[0_0_24px_24px] md:rounded-[0_0_40px_40px] text-white">
        <img src="assets/images/bn-blog.jpg" class="w-full object-cover min-h-[420px] md:min-h-[480px] lg:min-h-[600px]" alt="">
        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center pt-[60px] pb-4 md:pb-0">
            <div class="container">
                <div class="max-w-[890px] leading-[1.2]">
                    <h1 class="font-semibold md:font-bold text-24 md:text-36 lg:text-48 xl:text-52 2xl:text-60">Một tin nhắn nhỏ có thể mở ra một thay đổi lớn.</h1>
                    <div class="desc playfair text-18 md:text-24 lg:text-28 xl:text-32 2xl:text-40 italic mt-4 md:mt-5 lg:mt-8">
                        Không gian an toàn để bạn chia sẻ và được lắng nghe!
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 md:py-[60px] 2xl:py-[80px]">
        <div class="container">
            <div class="block lg:flex flex-wrap">
                <div class="w-full flex-[0_0_42%] max-w-full lg:max-w-[42%] mb-10 lg:mb-0">
                    <div class="title !mb-6">
                        <h2 class="text-gradient">Liên hệ</h2>
                        <div class="desc playfair italic font-medium text-14 md:text-20 xl:text-24 mt-3">Hãy cho bạn cơ hội để hiểu rõ bản thân mình hơn.</div>
                    </div>
                    <div class="form-contact">
                        <div class="item-field relative">
                            <label class="block mb-2">Họ & tên *</label>
                            <input type="text" class="txt_field w-full px-4 rounded-2">
                        </div>
                        <div class="item-field relative">
                            <label class="block mb-2">Email *</label>
                            <input type="text" class="txt_field w-full px-4 rounded-2">
                        </div>
                        <div class="item-field relative">
                            <label class="block mb-2">Số điện thoại *</label>
                            <input type="text" class="txt_field w-full px-4 rounded-2">
                        </div>
                        <div class="item-field relative">
                            <label class="block mb-2">Nội dung chia sẻ *</label>
                            <textarea class="w-full p-4 rounded-2"></textarea>
                        </div>
                        <div class="item-field relative">
                            <div class="relative max-content">
                                <input type="submit" value="Liên hệ ngay" class="btn_field text-white font-semibold text-18 bg-green">
                                <div class="absolute top-0 right-5 h-full flex items-center pointer-events-none">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 21L21 9M21 9H12M21 9V18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex-[0_0_58%] max-w-full lg:max-w-[58%] pl-0 lg:pl-10">
                    <img src="assets/images/contact.png" class="w-full rounded-4 lg:rounded-[32px]" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>
