let btnAdds = document.getElementsByClassName('btn-add');
let btnRemoves = document.getElementsByClassName('btn-remove');
let productsAmount = document.getElementById('productsAmount');
let productsPrice = document.getElementById('productsPrice');

for (const btn of btnAdds) {
    btn.addEventListener('click', function () {
        let productPrice = parseFloat(this
            .previousElementSibling
            .firstElementChild
            .innerText);

        let amount = this.nextElementSibling.innerText;

        productsAmount.innerText = parseInt(productsAmount.innerText) + 1;
        productsPrice.innerText = (parseFloat(productsPrice.innerText) + productPrice).toFixed(2);

        amount++;
        if (amount === 1) {
            // add btn teksti uytgetdik
            this.innerText = 'Added to cart';
            // add btn-danger ayyryp btn-success gosdyk
            this.classList.remove('btn-danger');
            this.classList.add('btn-success');
            // remove btn acdyk
            let removeBtn = this.nextElementSibling.nextElementSibling;
            removeBtn.classList.remove('disabled');
        }

        this.nextElementSibling.innerText = amount;
    });
}

for (const btn of btnRemoves) {
    btn.addEventListener('click', function () {
        let productPrice = parseFloat(this
            .previousElementSibling
            .previousElementSibling
            .previousElementSibling
            .firstElementChild
            .innerText);

        let amount = this.previousElementSibling.innerText;

        productsAmount.innerText = parseInt(productsAmount.innerText) - 1;
        productsPrice.innerText = (parseFloat(productsPrice.innerText) - productPrice).toFixed(2);

        amount--;
        if (amount === 0) {
            let btnAdd = this.previousElementSibling.previousElementSibling;
            // add btn teksti uytgetdik
            btnAdd.innerText = 'Add to cart';
            // add btn-success ayyryp btn-danger gosdyk
            btnAdd.classList.remove('btn-success');
            btnAdd.classList.add('btn-danger');
            // remove btn yapdyk
            this.classList.add('disabled');
        }

        this.previousElementSibling.innerText = amount;
    });
}