'use strict';

// all initial elements
const payAmountBtn = document.querySelector('#payAmount');
const decrementBtn = document.querySelectorAll('#decrement');
const quantityElem = document.querySelectorAll('#quantity');
const incrementBtn = document.querySelectorAll('#increment');
const priceElem = document.querySelectorAll('#price');
const subtotalElem = document.querySelector('#subtotal');
const taxElem = document.querySelector('#tax');
const totalElem = document.querySelector('#total');


// loop: for add event on multiple `increment` & `decrement` button
for (let i = 0; i < incrementBtn.length; i++) {

    incrementBtn[i].addEventListener('click', function () {

        // collect the value of `quantity` textContent,
        // based on clicked `increment` button sibling.
        let increment = Number(this.previousElementSibling.textContent);

        // plus `increment` variable value by 1
        increment++;

        // show the `increment` variable value on `quantity` element
        // based on clicked `increment` button sibling.
        this.previousElementSibling.textContent = increment;

        totalCalc();

    });


    decrementBtn[i].addEventListener('click', function () {

        // collect the value of `quantity` textContent,
        // based on clicked `decrement` button sibling.
        let decrement = Number(this.nextElementSibling.textContent);

        // minus `decrement` variable value by 1 based on condition
        decrement <= 1 ? 1 : decrement--;

        // show the `decrement` variable value on `quantity` element
        // based on clicked `decrement` button sibling.
        this.nextElementSibling.textContent = decrement;

        totalCalc();

    });

}



// function: for calculating total amount of product price
const totalCalc = function () {

    // declare all initial variable
    const tax = 0.05;
    let subtotal = 0;
    let totalTax = 0;
    let total = 0;

    // loop: for calculating `subtotal` value from every single product
    for (let i = 0; i < quantityElem.length; i++) {

        subtotal += Number(quantityElem[i].textContent) * Number(priceElem[i].textContent);

    }

    // show the `subtotal` variable value on `subtotalElem` element
    subtotalElem.textContent = subtotal.toFixed(2);

    // calculating the `totalTax`
    totalTax = subtotal * tax;

    // show the `totalTax` on `taxElem` element
    taxElem.textContent = totalTax.toFixed(2);

    // calcualting the `total`
    total = subtotal + totalTax;

    // show the `total` variable value on `totalElem` & `payAmountBtn` element
    totalElem.textContent = total.toFixed(2);
    payAmountBtn.textContent = total.toFixed(2);

}


let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () => {
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".product-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1020: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".review-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1020: {
            slidesPerView: 3,
        },
    },
});