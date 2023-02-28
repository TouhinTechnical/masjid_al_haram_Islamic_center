(function($){
    $(document).ready(function($) {
        function animateElements() {
            $('.supportProgessBar').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.supportProgessBarCircle').attr('data-percent');
                var percentage = parseInt(percent, 10) / parseInt(100, 10);
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.supportProgessBarCircle').circleProgress({
                        startAngle: -Math.PI / 2,
                        value: percent / 100,
                        size: 160,
                        thickness: 30,
                        emptyFill: "rgba(182,228,254, .2)",
                        fill: {
                            color: '#0dc2f8'
                        }
                    }).on('circle-animation-progress', function(event, progress, stepValue) {
                        $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
                    }).stop();
                }
            });
        }

        // Show animated elements
        animateElements();
        $(window).scroll(animateElements);

    });
    $(document).ready(function($) {
        function animateElements() {
            $('.supportProgessBar2').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.supportProgessBarCircle').attr('data-percent');
                var percentage = parseInt(percent, 10) / parseInt(100, 10);
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.supportProgessBarCircle').circleProgress({
                        startAngle: -Math.PI / 2,
                        value: percent / 100,
                        size: 160,
                        thickness: 30,
                        emptyFill: "#ffdadc",
                        fill: {
                            color: '#ff8f84'
                        }
                    }).on('circle-animation-progress', function(event, progress, stepValue) {
                        $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
                    }).stop();
                }
            });
        }

        // Show animated elements
        animateElements();
        $(window).scroll(animateElements);

    });
    $(document).ready(function($) {
        function animateElements() {
            $('.supportProgessBar3').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.supportProgessBarCircle').attr('data-percent');
                var percentage = parseInt(percent, 10) / parseInt(100, 10);
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.supportProgessBarCircle').circleProgress({
                        startAngle: -Math.PI / 2,
                        value: percent / 100,
                        size: 160,
                        thickness: 30,
                        emptyFill: "#d6d3ff",
                        fill: {
                            color: '#8379fe'
                        }
                    }).on('circle-animation-progress', function(event, progress, stepValue) {
                        $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
                    }).stop();
                }
            });
        }

        // Show animated elements
        animateElements();
        $(window).scroll(animateElements);

    });
})(window.jQuery);