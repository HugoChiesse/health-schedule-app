function calc_percent() {
    var price = document.getElementById('price').value
    var discount_percentage = document.getElementById('discount_percentage').value
    
    var discount = 0
    var total = 0
    price = parseFloat(price).toFixed(2)
    discount_percentage = parseFloat(discount_percentage).toFixed(2)

    if (discount_percentage != '') {
        discount = price * (discount_percentage / 100)
        total = (price-discount) + ((price-discount)*(40/100))
        document.getElementById('discount_price').value = discount.toFixed(2)
        document.getElementById('total_price').value = total.toFixed(2)
    } else {
        document.getElementById('discount_price').value = 0
    }

}
