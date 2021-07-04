// 選中所有商品
var product = document.querySelectorAll('.product')
// 計算區域
var minus = document.querySelectorAll('.minus');
var plus = document.querySelectorAll('.plus');
var input = document.querySelectorAll('input');
// 顯示區域
var showProductQty = document.querySelector('.amount');
var showSubtotal = document.querySelector('.subtotal');
var shipping = document.querySelector('.shipping');
var totalCost = document.querySelector('.totalcost');
// 商品單價
var productPrice = document.querySelectorAll('.price');
// 歸零計算
var productQty = 0;
var subtotal = 0;
// 運費及門檻
var shipping_free = 1000;
var shippingPrice = 60;

// function qqq() {
//  return 123;
// }


// 顯示計算後所有項目更新
function updateData() {
    // 數量、小計歸零
    productQty = 0;
    subtotal = 0;
    // 每一個商品資訊更新
    for (let i = 0; i < product.length; i++) {
        let subtotalNumber = (parseInt(input[i].value) * parseFloat(productPrice[i].dataset.price))
        productPrice[i].innerHTML = '$' + subtotalNumber.toLocaleString();
        //商品總數更新
        productQty += parseInt(input[i].value);
        //小計更新
        subtotal += subtotalNumber
    }
    // 商品總數顯示
    showProductQty.innerHTML = productQty
    // 小計顯示，顯示千位數逗號
    showSubtotal.innerHTML = '$' + subtotal.toLocaleString();
    //運費更新、顯示
    calcShipping()
    // 總計顯示
    totalCost.innerHTML = '$' + (subtotal + shippingPrice).toLocaleString();
}

updateData()
// 按下加號的event
plus.forEach(function (ele, i) {
    ele.addEventListener('click', function () {
        input[i].value = parseInt(input[i].value) + 1;
        updateData();
        // 呼叫 step-1 的更新數量 function
        updateQty(this);
    })
});
// 按下減號的event
minus.forEach(function (ele, i) {
    ele.addEventListener('click', function () {
        if (input[i].value > 1) {
            input[i].value = parseInt(input[i].value) - 1;
            updateData();
            // 呼叫 step-1 的更新數量 function
            updateQty(this);
        }
    })
});
// input onchange事件及條件限制
input.forEach(function (ele) {
    ele.addEventListener('change', function () {
        if (ele.value == '' || ele.value == 0) {
            ele.value = 1;
        }
        updateData();
    })

    ele.addEventListener('keyup', function () {
        ele.value = ele.value.replace(/\D+/g,'');
    })

});
// 運費計算及免運費條件
function calcShipping() {
    if (subtotal >= shipping_free) {
        shippingPrice = 0;
        shipping.innerHTML = '$' + shippingPrice.toLocaleString();;
    } else if (subtotal <= shipping_free) {
        shippingPrice = 60;
        shipping.innerHTML = '$' + shippingPrice.toLocaleString();;
    }
}

window.addEventListener('load', function(){
    updateData();
})




