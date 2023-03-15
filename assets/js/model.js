    var paymentBtn = document.querySelector('#paymentBtn');
    var cashBtn = document.querySelector('#cashBtn');

    var modal_bg = document.querySelector('.modal_bg');
    var modal_bg_cash = document.querySelector('.modal_bg_cash');

    var modal_close = document.querySelector('.modal_close');
    var modal_close_cash = document.querySelector('.modal_close_cash');

    paymentBtn.addEventListener('click', function(){
        modal_bg.classList.add('modal-active');
    });
    cashBtn.addEventListener('click', function(){
        modal_bg_cash.classList.add('modal-active-cash');
    });
    
    modal_close.addEventListener('click', function(){
        modal_bg.classList.remove('modal-active');
    });
    modal_close_cash.addEventListener('click', function(){
        modal_bg_cash.classList.remove('modal-active-cash');
    });