<?php include 'header.php'; ?>
<main>
    <section class="relative overflow-hidden rounded-[0_0_24px_24px] md:rounded-[0_0_40px_40px] lg:rounded-[0_0_100px_100px] text-white">
        <img src="assets/images/bn-canhan.jpg" class="w-full object-cover min-h-[420px] md:min-h-[480px] lg:min-h-[600px]" alt="">
        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center pt-[60px] pb-4 md:pb-0">
            <div class="container">
                <div class="max-w-[890px] leading-[1.2]">
                    <h1 class="font-semibold md:font-bold text-24 md:text-36 lg:text-48 xl:text-52 2xl:text-60">
                        Nhân sự vững, <br>
                        Doanh nghiệp bền.
                    </h1>
                    <div class="desc playfair text-18 md:text-24 lg:text-28 xl:text-32 2xl:text-40 italic mt-4 md:mt-5 lg:mt-8">
                        <p>
                            Thành công trường tồn được xây từ những nội lực âm thầm bền bỉ.
                        </p>
                        <p>Mỗi nhân sự là một viên gạch tạo nên nền móng vững chắc cho doanh nghiệp vươn xa.</p>
                    </div>
                    <div class="flex items-center gap-2 md:gap-4 lg:gap-8 mt-6 md:mt-10">
                        <a href="" class="btn-main text-green bg-white hover:text-white hover:bg-green">
                            Đặt lịch tư vấn
                            <span class="hidden md:block">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 21L21 9M21 9H12M21 9V18" stroke="#008750" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </a>
                        <a href="" class="btn-main text-white hover:text-white hover:bg-green">
                            Xem ưu đãi
                            <span class="hidden md:block">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 21L21 9M21 9H12M21 9V18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padd-main">
        <div class="container">
            <div class="text-center playfair italic text-20 md:text-32 xl:text-40 text-gradient font-medium pb-4 md:pb-[60px] 2xl:pb-[80px]">
                <p>Hít thở thật sâu,... và cảm nhận</p>
                <p>Bạn có thấy mình ở đâu đó trong những vấn đề này?</p>
            </div>
            <div class="overflow-hidden rounded-0 md:rounded-[40px] lg:rounded-[60px] xl:rounded-[100px] gap-3 md:gap-6 grid grid-cols-1 md:grid-cols-2">
                <?php
                for ($x=1;$x<=4;$x++) { ?>
                    <div class="item item-how relative overflow-hidden rounded-5 md:rounded-0">
                        <img src="assets/images/cn-<?php echo $x ?>.png" class="w-full" alt="">
                        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center text-white px-6 xl:px-10 px-3 xl:py-6">
                            <div class="text-center">
                                <div class="text-20 md:text-22 xl:text-28 font-semibold">
                                    Mất phương hướng, <br>
                                    nghi ngờ giá trị bản thân
                                </div>
                                <div class="mt-2 xl:mt-6 grid grid-cols-2 gap-4 desc-item-how">
                                    <div class="flex gap-3">
                                        <div class="icon w-full max-w-5">
                                            <img src="assets/images/check.png" alt="">
                                        </div>
                                        <div class="desc text-left">
                                            Khó xác định mục tiêu ngắn hạn và dài hạn.
                                        </div>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="icon w-full max-w-5">
                                            <img src="assets/images/check.png" alt="">
                                        </div>
                                        <div class="desc text-left">
                                            Luôn cảm thấy “chưa đủ giỏi” dù đã rất nỗ lực.
                                        </div>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="icon w-full max-w-5">
                                            <img src="assets/images/check.png" alt="">
                                        </div>
                                        <div class="desc text-left">
                                            Dễ dao động trước ý kiến người khác, mất niềm tin vào lựa chọn của chính mình.
                                        </div>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="icon w-full max-w-5">
                                            <img src="assets/images/check.png" alt="">
                                        </div>
                                        <div class="desc text-left">
                                            Hay so sánh bản thân và luôn thấy mình thua kém.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <div class="text-center mt-6 md:mt-10">
                <a href="" class="btn-main text-white border !border-green bg-green">
                    Đặt lịch tư vấn
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 21L21 9M21 9H12M21 9V18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="relative bg-[#FFF5DF] rounded-4 md:rounded-[40px] lg:rounded-[100px] padd-main">
        <div class="container">
            <div class="text-center playfair italic text-20 md:text-32 xl:text-40 text-gradient font-medium pb-6 md:pb-10">
                <p>Bạn có nghĩ, mình cần một ...</p>
                <p>Không gian an toàn để nhìn lại bản thân một cách chân thật?</p>
            </div>
            <div class="grid gap-6 grid-cols-12">
                <div class="item col-span-12 lg:col-span-7">
                    <div class="img overflow-hidden rounded-4 lg:rounded-[80px_40px_40px_40px] xl:rounded-[200px_40px_40px_40px]">
                        <img src="assets/images/canhan-2.png" class="w-full" alt="">
                    </div>
                </div>
                <div class="item col-span-12 lg:col-span-5 pl-0 xl:pl-10">
                    <div class="txt text-14 md:text-18">
                        <p>
                            Coaching cá nhân tạo không gian an toàn để bạn nhìn lại bản thân một cách chân thực. Đây không chỉ là việc tìm ra giải pháp mà là hành trình khám phá chính con người bạn.
                        </p>
                        <p>
                            Tôi tin rằng mỗi người đều đã có sẵn câu trả lời bên trong. Vai trò của tôi là giúp bạn tiếp cận với sự thông thái ấy, với sự hiện diện, chuyên môn và sự thấu hiểu.
                        </p>
                        <p>
                            Có thể bạn từng đọc những cuốn sách hay, tham dự hội thảo truyền cảm hứng, nhưng chiều sâu thực sự chỉ mở ra khi có người đồng hành 1:1.
                        </p>
                    </div>
                    <div class="text-14 md:text-18 italic text-gradient mt-8">
                        <strong>Bởi vì:</strong> Ai trong chúng ta cũng có những "điểm mù". Chỉ khi được phản chiếu một cách chân thành, ta mới có thể nhận ra và từ đó, giải phóng.
                    </div>
                    <div class="mt-6 md:mt-10">
                        <a href="" class="btn-main text-white border !border-green bg-green w-full md:w-auto">
                            Đặt lịch tư vấn
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 21L21 9M21 9H12M21 9V18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="line py-10 lg:py-[80px]">
            <img src="assets/images/line.png" class="w-full" alt="">
        </div>

        <div class="container">
            <div class="title text-center">
                <h2 class="text-gradient">
                    Buổi coaching sẽ diễn ra như thế nào?
                </h2>
                <div class="mt-3 font-semibold italic text-14 md:text-18">
                    Mỗi chúng ta là một cá thể duy nhất và hành trình tìm lại sự cân bằng cũng cần được cá nhân hóa
                </div>
            </div>
        </div>

        <div class="container">
            <div class="block">
                <?php
                for ($x=1;$x<=2;$x++) { ?>
                    <div class="bg-[#FFF0CF] overflow-hidden rounded-4 lg:rounded-[40px] grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-6 item-coaching-how mb-8 last:mb-0">
                        <div class="item avarta relative">
                            <img src="assets/images/canhan-3-1.png" class="w-full rounded-[16px]" alt="">
                        </div>
                        <div class="item item-desc">
                            <div class="h-full flex items-center py-6 md:py-10 lg:py-4 px-4 md:px-10 lg:px-[60px]">
                                <div class="txt">
                                    <div class="text-16 md:text-24 font-semibold mb-4">
                                        20 phút miễn phí đầu tiên để hiểu hơn về nhau
                                    </div>
                                    <ul class="pl-6 md:pl-0">
                                        <li class="mb-3 last:mb-0 relative">
                                            <div class="icon absolute top-1 left-[-22px]">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.8419 4.72311C14.7843 4.36131 14.4675 4.09131 14.1021 4.09131H14.0949C11.8233 4.11471 9.63271 4.92471 7.89211 6.37551C7.83811 5.73831 7.65632 5.11731 7.35572 4.54851C6.94532 3.77271 6.32792 3.12471 5.57372 2.67471C5.26952 2.49291 4.88971 2.54331 4.65211 2.79711C3.52171 4.00131 2.91331 5.57451 2.94031 7.22691C2.96551 8.81811 3.57751 10.3157 4.66831 11.4659C4.56571 11.8583 4.48831 12.2579 4.43611 12.6647C4.41451 12.8321 4.53152 12.9851 4.70072 13.0085C4.71332 13.0103 4.72771 13.0103 4.74031 13.0103C4.89151 13.0103 5.02292 12.8987 5.04272 12.7439C5.09852 12.3209 5.18132 11.9069 5.29292 11.5055C5.30552 11.4785 5.31271 11.4515 5.31631 11.4227C6.41971 7.55451 9.98732 4.74651 14.1057 4.70331H14.1075C14.1723 4.70331 14.2335 4.75551 14.2443 4.81851C14.4711 6.24951 14.4783 7.70031 14.2659 9.13311C14.2623 9.14391 14.2587 9.15471 14.2569 9.16551C13.8339 10.9817 12.6531 12.5333 11.0133 13.4207C9.56792 14.2055 7.88491 14.4107 6.30631 14.0129C6.83911 13.6619 7.35031 13.2767 7.83811 12.8573C9.12511 11.7503 10.2069 10.4417 11.0529 8.97111C11.1375 8.82531 11.0871 8.63811 10.9395 8.55351C10.7937 8.46891 10.6065 8.51931 10.5219 8.66691C9.28711 10.7999 7.52132 12.5819 5.42251 13.8383C5.41351 13.8419 5.40631 13.8473 5.39731 13.8527C4.72411 14.2541 4.01851 14.5997 3.28411 14.8877C3.12751 14.9489 3.04831 15.1271 3.11131 15.2837C3.15811 15.4043 3.27331 15.4781 3.39571 15.4781C3.43351 15.4781 3.47131 15.4709 3.50731 15.4565C4.23451 15.1721 4.93291 14.8337 5.60251 14.4431C6.34771 14.6951 7.12172 14.8211 7.89392 14.8211C9.07112 14.8211 10.2429 14.5313 11.2977 13.9571C13.0725 12.9959 14.3577 11.3219 14.8311 9.36171C14.8419 9.33651 14.8509 9.30951 14.8545 9.28071C15.0867 7.76871 15.0813 6.23511 14.8419 4.72311ZM6.01292 8.45991C6.00932 8.13231 5.99492 7.82811 5.96972 7.53651C5.91392 6.91371 5.80772 6.25851 5.64572 5.52951C5.60972 5.36391 5.44591 5.26131 5.28031 5.29731C5.11471 5.33331 5.01212 5.49711 5.04812 5.66271C5.20472 6.36471 5.30731 6.99471 5.35951 7.59051C5.40991 8.16111 5.41532 8.78931 5.37392 9.56151C5.17952 9.95391 5.01032 10.3589 4.86992 10.7765C3.02671 8.57691 3.08971 5.34951 5.09492 3.21471C5.13452 3.17151 5.20292 3.16611 5.25872 3.19851C6.57092 3.97971 7.34311 5.39451 7.29451 6.91371C6.81547 7.38384 6.38601 7.90196 6.01292 8.45991Z" fill="black"/>
                                                </svg>
                                            </div>
                                            Dù bạn đang ở bất kỳ nơi đâu trên thế giới, bạn vẫn có thể bắt đầu hành trình thay đổi của mình một cách linh hoạt và chủ động.
                                        </li>
                                        <li class="mb-3 last:mb-0 relative">
                                            <div class="icon absolute top-1 left-[-22px]">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.8419 4.72311C14.7843 4.36131 14.4675 4.09131 14.1021 4.09131H14.0949C11.8233 4.11471 9.63271 4.92471 7.89211 6.37551C7.83811 5.73831 7.65632 5.11731 7.35572 4.54851C6.94532 3.77271 6.32792 3.12471 5.57372 2.67471C5.26952 2.49291 4.88971 2.54331 4.65211 2.79711C3.52171 4.00131 2.91331 5.57451 2.94031 7.22691C2.96551 8.81811 3.57751 10.3157 4.66831 11.4659C4.56571 11.8583 4.48831 12.2579 4.43611 12.6647C4.41451 12.8321 4.53152 12.9851 4.70072 13.0085C4.71332 13.0103 4.72771 13.0103 4.74031 13.0103C4.89151 13.0103 5.02292 12.8987 5.04272 12.7439C5.09852 12.3209 5.18132 11.9069 5.29292 11.5055C5.30552 11.4785 5.31271 11.4515 5.31631 11.4227C6.41971 7.55451 9.98732 4.74651 14.1057 4.70331H14.1075C14.1723 4.70331 14.2335 4.75551 14.2443 4.81851C14.4711 6.24951 14.4783 7.70031 14.2659 9.13311C14.2623 9.14391 14.2587 9.15471 14.2569 9.16551C13.8339 10.9817 12.6531 12.5333 11.0133 13.4207C9.56792 14.2055 7.88491 14.4107 6.30631 14.0129C6.83911 13.6619 7.35031 13.2767 7.83811 12.8573C9.12511 11.7503 10.2069 10.4417 11.0529 8.97111C11.1375 8.82531 11.0871 8.63811 10.9395 8.55351C10.7937 8.46891 10.6065 8.51931 10.5219 8.66691C9.28711 10.7999 7.52132 12.5819 5.42251 13.8383C5.41351 13.8419 5.40631 13.8473 5.39731 13.8527C4.72411 14.2541 4.01851 14.5997 3.28411 14.8877C3.12751 14.9489 3.04831 15.1271 3.11131 15.2837C3.15811 15.4043 3.27331 15.4781 3.39571 15.4781C3.43351 15.4781 3.47131 15.4709 3.50731 15.4565C4.23451 15.1721 4.93291 14.8337 5.60251 14.4431C6.34771 14.6951 7.12172 14.8211 7.89392 14.8211C9.07112 14.8211 10.2429 14.5313 11.2977 13.9571C13.0725 12.9959 14.3577 11.3219 14.8311 9.36171C14.8419 9.33651 14.8509 9.30951 14.8545 9.28071C15.0867 7.76871 15.0813 6.23511 14.8419 4.72311ZM6.01292 8.45991C6.00932 8.13231 5.99492 7.82811 5.96972 7.53651C5.91392 6.91371 5.80772 6.25851 5.64572 5.52951C5.60972 5.36391 5.44591 5.26131 5.28031 5.29731C5.11471 5.33331 5.01212 5.49711 5.04812 5.66271C5.20472 6.36471 5.30731 6.99471 5.35951 7.59051C5.40991 8.16111 5.41532 8.78931 5.37392 9.56151C5.17952 9.95391 5.01032 10.3589 4.86992 10.7765C3.02671 8.57691 3.08971 5.34951 5.09492 3.21471C5.13452 3.17151 5.20292 3.16611 5.25872 3.19851C6.57092 3.97971 7.34311 5.39451 7.29451 6.91371C6.81547 7.38384 6.38601 7.90196 6.01292 8.45991Z" fill="black"/>
                                                </svg>
                                            </div>
                                            Tôi thực hiện các buổi khai vấn qua cuộc gọi video đơn giản, thuận tiện và hiệu quả.
                                        </li>
                                        <li class="mb-3 last:mb-0 relative">
                                            <div class="icon absolute top-1 left-[-22px]">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.8419 4.72311C14.7843 4.36131 14.4675 4.09131 14.1021 4.09131H14.0949C11.8233 4.11471 9.63271 4.92471 7.89211 6.37551C7.83811 5.73831 7.65632 5.11731 7.35572 4.54851C6.94532 3.77271 6.32792 3.12471 5.57372 2.67471C5.26952 2.49291 4.88971 2.54331 4.65211 2.79711C3.52171 4.00131 2.91331 5.57451 2.94031 7.22691C2.96551 8.81811 3.57751 10.3157 4.66831 11.4659C4.56571 11.8583 4.48831 12.2579 4.43611 12.6647C4.41451 12.8321 4.53152 12.9851 4.70072 13.0085C4.71332 13.0103 4.72771 13.0103 4.74031 13.0103C4.89151 13.0103 5.02292 12.8987 5.04272 12.7439C5.09852 12.3209 5.18132 11.9069 5.29292 11.5055C5.30552 11.4785 5.31271 11.4515 5.31631 11.4227C6.41971 7.55451 9.98732 4.74651 14.1057 4.70331H14.1075C14.1723 4.70331 14.2335 4.75551 14.2443 4.81851C14.4711 6.24951 14.4783 7.70031 14.2659 9.13311C14.2623 9.14391 14.2587 9.15471 14.2569 9.16551C13.8339 10.9817 12.6531 12.5333 11.0133 13.4207C9.56792 14.2055 7.88491 14.4107 6.30631 14.0129C6.83911 13.6619 7.35031 13.2767 7.83811 12.8573C9.12511 11.7503 10.2069 10.4417 11.0529 8.97111C11.1375 8.82531 11.0871 8.63811 10.9395 8.55351C10.7937 8.46891 10.6065 8.51931 10.5219 8.66691C9.28711 10.7999 7.52132 12.5819 5.42251 13.8383C5.41351 13.8419 5.40631 13.8473 5.39731 13.8527C4.72411 14.2541 4.01851 14.5997 3.28411 14.8877C3.12751 14.9489 3.04831 15.1271 3.11131 15.2837C3.15811 15.4043 3.27331 15.4781 3.39571 15.4781C3.43351 15.4781 3.47131 15.4709 3.50731 15.4565C4.23451 15.1721 4.93291 14.8337 5.60251 14.4431C6.34771 14.6951 7.12172 14.8211 7.89392 14.8211C9.07112 14.8211 10.2429 14.5313 11.2977 13.9571C13.0725 12.9959 14.3577 11.3219 14.8311 9.36171C14.8419 9.33651 14.8509 9.30951 14.8545 9.28071C15.0867 7.76871 15.0813 6.23511 14.8419 4.72311ZM6.01292 8.45991C6.00932 8.13231 5.99492 7.82811 5.96972 7.53651C5.91392 6.91371 5.80772 6.25851 5.64572 5.52951C5.60972 5.36391 5.44591 5.26131 5.28031 5.29731C5.11471 5.33331 5.01212 5.49711 5.04812 5.66271C5.20472 6.36471 5.30731 6.99471 5.35951 7.59051C5.40991 8.16111 5.41532 8.78931 5.37392 9.56151C5.17952 9.95391 5.01032 10.3589 4.86992 10.7765C3.02671 8.57691 3.08971 5.34951 5.09492 3.21471C5.13452 3.17151 5.20292 3.16611 5.25872 3.19851C6.57092 3.97971 7.34311 5.39451 7.29451 6.91371C6.81547 7.38384 6.38601 7.90196 6.01292 8.45991Z" fill="black"/>
                                                </svg>
                                            </div>
                                            Để buổi làm việc đạt kết quả cao nhất, bạn hãy chuẩn bị:
                                            <ul>
                                                <li>+ Một không gian yên tĩnh</li>
                                                <li>+ Không bị gián đoạn bởi công việc riêng</li>
                                                <li>+ Có thể tập trung hoàn toàn vào chính mình</li>
                                            </ul>
                                        </li>
                                        <li class="mb-3 last:mb-0 relative text-gradient font-semibold">
                                            Chỉ cần như vậy, chúng ta sẽ tận dụng trọn vẹn từng phút giây quý giá cho hành trình chuyển hoá của bạn.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>

            <div class="text-center mt-6 md:mt-10">
                <a href="" class="btn-main text-white border !border-green bg-green w-full md:w-auto">
                    Đặt lịch tư vấn
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 21L21 9M21 9H12M21 9V18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="padd-main">
        <div class="container">
            <div class="title text-center">
                <h2 class="text-gradient">Bạn sẽ nhận được gì?</h2>
                <div class="mt-3 md:mt-4 font-medium md:font-semibold text-14 md:text-18 italic">
                    Khách hàng của tôi thường chia sẻ rằng sau mỗi buổi làm việc, họ cảm thấy thanh thản, <br>
                    tự tin và gần gũi hơn với chính mình – đôi khi, những “nút thắt” tưởng chừng vô hình cũng dần được tháo gỡ.
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="item mb-6 lg:mb-0">
                    <img src="assets/images/canhan4.png" class="w-full rounded-4 md:rounded-[40px]" alt="">
                </div>
                <div class="item pl-0 lg:pl-[55px] text-14 md:text-16 lg:text-18">
                    <ul>
                        <?php
                        for ($x=1;$x<=7;$x++) { ?>
                            <li class="relative flex items-center gap-3 border-b border-dashed border-[#F9D683] pb-4 md:pb-5 mb-4 md:mb-5 last:mb-0">
                                <div class="w-full max-w-10">
                                    <div class="flex items-center justify-center rounded-full font-semibold text-20 aspect-square text-white" style="background: linear-gradient(86.3deg, #986300 0%, #EBBB6D 68.75%);">
                                        0<?php echo $x ?>
                                    </div>
                                </div>
                                <span>
                                    Hiểu và chuyển hóa những tiêu cực: sự sợ hãi, bất lực, cô đơn, tổn thương ... thành sức mạnh nội tâm.
                                </span>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <?php include 'bottom-2.php'; ?>
</main>
<?php include 'footer.php'; ?>
