$(document).ready(function() {
    let products = @json($products);
    let i = 1;
    $('.odd').hide();
    $.each(products, function(key, item) {
        $("#product-list").append(`
            <tr>
                <td class="text-center align-middle" style="width: 10vh">`+i+`</td>
                <td class="d-inline-flex text-center align-middle">
                    <img src="{{ asset("`+item.image+`") }}" alt="`+item.name+`" width="150px">
                </td>
                <td class="text-center align-middle">`+item.name+`</td>
                <td class="text-center align-middle">$ `+item.price+`</td>
                <p id="price_`+item.id+`" hidden>`+ item.price +`</p>
                <td class="text-center align-middle">`+item.stock+`</td>
                <td class="text-center align-middle">
                    <button class="btn" style="padding: 0px 10px 0px 10px; cursor: pointer;" id="minus_`+item.id+`"><b>-</b></button>
                    <button class="btn" style="padding: 0px 10px 0px 10px; cursor: default" id="quantity_`+item.id+`">0</button>
                    <button class="btn" style="padding: 0px 10px 0px 10px; cursor: pointer;" id="plus_`+item.id+`"><b>+</b></button>
                </td>
                <td class="text-center align-middle"><b><span id="total_`+item.id+`">$ 0</span></b></td>
            </tr>
        `);
        i++;

        $('#plus_'+item.id).click(function (e) {
            const elem=$(this).prev();
            const getId=elem.attr("id").split("_")[1]; // To find the price id
            const price=item.price // price amount
            let qty = parseInt(elem.html())+1;
            elem.html(qty);
            let total = price*qty;
            $("#total_"+item.id).html("$ "+price*qty); // set total, assume total is qty * price
            if (qty > 0) {
                let shop = ``+item.id+`;`+item.name+`;`+item.price+`;`+qty+`;`+total+`;`;
                $('#shop').append(`
                    <input name="shop[`+item.id+`]" value="`+shop+`" type="text" hidden />
                `)
            }
        });
        $('#minus_'+item.id).click(function (e) {
            const elem=$(this).next();
            const getId=elem.attr("id").split("_")[1]; // To find the price id
            const price=item.price; // price amount
            let qty = parseInt(elem.html());
            if(qty>0){
                qty--;
            }
            elem.html(qty);
            let total = price*qty;
            $("#total_"+item.id).html("$ "+price*qty); // set total, assume total is qty * price
            if (qty >= 0) {
                let shop = ``+item.id+`;`+item.name+`;`+item.price+`;`+qty+`;`+total+`;`;
                $('#shop').append(`
                    <input name="shop[`+item.id+`]" value="`+shop+`" type="text" hidden />
                `)
            }
        });
    })
})
