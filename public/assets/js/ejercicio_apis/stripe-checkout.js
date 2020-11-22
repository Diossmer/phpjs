import STRIPE_KEYS from "./_stripe-key.js"
const d = document,
$tacos = d.getElementById("tacos"),
$template = d.getElementById("taco-template").content,
$fragment = d.createDocumentFragment(),
fetchOptions ={
    headers:{
        Authorization:`Bearer ${STRIPE_KEYS.secret}`,
    },
}
let products, prices;
const moneyFormat = (num) => `$${num.slice(0,-2)},${num.slice(-2)}`;
Promise.all([fetch("https://api.stripe.com/v1/products",fetchOptions),fetch("https://api.stripe.com/v1/prices",fetchOptions)
])
.then((responses)=>Promise.all(responses.map((res)=>res.json())))
.then((json)=>{
    console.log(json)
    products=json[0].data;
    prices=json[1].data;
    console.log(products, prices)
    prices.forEach(el => {
        let productData = products.filter((product)=>product.id===el.product)
        console.log(productData);
        $template.querySelector(".taco").setAttribute("data-price",el.id)
        $template.querySelector("img").src=productData[0].images[0];
        $template.querySelector("img").alt=productData[0].name;
        $template.querySelector("figcaption").innerHTML=`
        ${productData[0].name}
        </br>
        <b>${moneyFormat(el.unit_amount_decimal)} ${el.currency}</b>
        `
        let $clone = d.importNode($template,true)
        $fragment.appendChild($clone)
    });
    $tacos.appendChild($fragment);
})
.catch((err)=>{
    console.error(err)
    let message = xhr.statusText || "Ocurrió un error al conectarse con la API de Stripe"
    $response.innerHTML = `<p>Error ${xhr.status}: ${message}</p>`;
})
d.addEventListener("click",(e)=>{
    if(e.target.matches(".taco *")){
        let price =e.target.parentElement.getAttribute("data-price");
        Stripe(STRIPE_KEYS.public).redirectToCheckout({//checkout es externo no tiene acceso a vzla. not found
            lineItems:[{price,quantity:1}],
            mode:"Subscription",
            successUrl:"http://127.0.0.1/phpjs/pages/exercises/stripe-success.html",
            CancelUrl:"http://127.0.0.1/phpjs/pages/exercises/stripe-cancel.html",
        }).then((res)=>{
            console.log(res)
            if(res.error){
                $tacos.insertAdjacentHTML("afterend",res.error.message)
            }
        })
    }
});