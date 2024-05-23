// jQuery(function () {
//     function moveSlide() {
//         const firstSlide = jQuery('.slide:first');
//         const slideWidth = firstSlide.outerWidth(true);

//         jQuery('.slider').animate({ 'left': -slideWidth }, 1500, function () {
//             jQuery('.slider').append(firstSlide);
//             jQuery('.slider').css('left', '');
//         });
//     }

//     setInterval(moveSlide, 1000);
// });


jQuery(function () {
    const $slider = jQuery('.slider');
    const slideWidth = jQuery('.slide').outerWidth(true);

    function moveSlide() {
        // 左にスライド
        $slider.css('transition', 'transform 0.5s ease-in-out');
        $slider.css('transform', `translateX(-${slideWidth}px)`);

        setTimeout(function () {
            // 最初のスライドを末尾に移動し、位置をリセット
            const $firstSlide = jQuery('.slide:first');
            $slider.append($firstSlide);
            $slider.css('transition', 'none');
            $slider.css('transform', 'translateX(0)');
        }, 500); // アニメーションの時間と一致させる
    }

    setInterval(moveSlide, 3000); // スライド間隔を設定
});

