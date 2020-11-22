<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout con Stripe</title>
    <style>
    html{
        box-sizing: border-box;
        font-family: sans-serif;
        font-size: 16px;
    }
    *,*::before,*::after{
        box-sizing: inherit;
    }
    .taco{
        display: flex;
        flex-wrap: wrap;
    }
    .taco>*{
        flex: 14 14 200px;
        margin:1rem;
    }
    .taco{
        background-color: crimson;
        color: chartreuse;
        font-size: 125%;
        text-align: center;
        cursor:pointer;
        transition: all 0.3s ease-out;
    }
    .taco:hover{
        opacity: .9;
        transform: scale(.9);
    }
    .taco img{
        max-width: 100%;
        height: auto;
    }
    .taco figcaption{
        padding: 1rem;
    }
    </style>
</head>
<body>
    <h1>Checkout con Stripe</h1>
    <section id="tacos" class="tacos"></section>
    <template id="taco-template">
        <figure class="taco">
            <img src="" alt="">
            <figcaption></figcaption>
        </figure>
    </template>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="../../public/assets/js/ejercicio_apis/stripe-checkout.js" type="module"></script>
</body>
</html>