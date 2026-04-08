<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "https://elrapido-backend-production.up.railway.app";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.9.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.9.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-pizze">
                                <a href="#endpoints-GETapi-pizze">GET api/pizze</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-ingredients">
                                <a href="#endpoints-GETapi-ingredients">GET api/ingredients</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-pizze">
                                <a href="#endpoints-POSTapi-pizze">POST api/pizze</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-pizze--pizza_id-">
                                <a href="#endpoints-PUTapi-pizze--pizza_id-">PUT api/pizze/{pizza_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-pizze--pizza_id-">
                                <a href="#endpoints-DELETEapi-pizze--pizza_id-">DELETE api/pizze/{pizza_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-ingredients">
                                <a href="#endpoints-POSTapi-ingredients">POST api/ingredients</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-ingredients--ingredient_id-">
                                <a href="#endpoints-PUTapi-ingredients--ingredient_id-">PUT api/ingredients/{ingredient_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-ingredients--ingredient_id-">
                                <a href="#endpoints-DELETEapi-ingredients--ingredient_id-">DELETE api/ingredients/{ingredient_id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 8, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>https://elrapido-backend-production.up.railway.app</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-pizze">GET api/pizze</h2>

<p>
</p>



<span id="example-requests-GETapi-pizze">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://elrapido-backend-production.up.railway.app/api/pizze" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pizze">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nome&quot;: &quot;Marinara&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;4.50&quot;,
                &quot;media&quot;: &quot;7.00&quot;,
                &quot;maxi&quot;: &quot;11.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Aglio&quot;,
                &quot;Olio&quot;,
                &quot;Origano&quot;
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;nome&quot;: &quot;Margherita&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;5.00&quot;,
                &quot;media&quot;: &quot;9.00&quot;,
                &quot;maxi&quot;: &quot;13.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Origano&quot;,
                &quot;Mozzarella&quot;
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;nome&quot;: &quot;Romana&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;15.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Acciughe&quot;
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;nome&quot;: &quot;Siciliana&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Acciughe&quot;,
                &quot;Capperi&quot;,
                &quot;Olive&quot;
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;nome&quot;: &quot;Pugliese&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.00&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;14.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Cipolla&quot;
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;nome&quot;: &quot;Prosciutto&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;15.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Prosciutto Cotto&quot;
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;nome&quot;: &quot;Funghi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.00&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;14.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Funghi&quot;
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;nome&quot;: &quot;Tris di Funghi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Chiodini&quot;,
                &quot;Porcini&quot;,
                &quot;Trifolati&quot;
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;nome&quot;: &quot;Asparagi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.00&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;14.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Asparagi&quot;
            ]
        },
        {
            &quot;id&quot;: 10,
            &quot;nome&quot;: &quot;Prosciutto e Funghi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Prosciutto Cotto&quot;,
                &quot;Funghi&quot;
            ]
        },
        {
            &quot;id&quot;: 11,
            &quot;nome&quot;: &quot;Capricciosa&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Prosciutto Cotto&quot;,
                &quot;Funghi&quot;,
                &quot;Carciofi&quot;
            ]
        },
        {
            &quot;id&quot;: 12,
            &quot;nome&quot;: &quot;4 Stagioni&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Olive&quot;,
                &quot;Prosciutto Cotto&quot;,
                &quot;Funghi&quot;,
                &quot;Carciofi&quot;
            ]
        },
        {
            &quot;id&quot;: 13,
            &quot;nome&quot;: &quot;Viennese&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;W&uuml;rstel&quot;
            ]
        },
        {
            &quot;id&quot;: 14,
            &quot;nome&quot;: &quot;Diavola&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Salamino Piccante&quot;
            ]
        },
        {
            &quot;id&quot;: 15,
            &quot;nome&quot;: &quot;Chiodini&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.00&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;15.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Chiodini&quot;
            ]
        },
        {
            &quot;id&quot;: 16,
            &quot;nome&quot;: &quot;Porcini&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Porcini&quot;
            ]
        },
        {
            &quot;id&quot;: 17,
            &quot;nome&quot;: &quot;4 Formaggi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Gorgonzola&quot;,
                &quot;Brie&quot;,
                &quot;Provola&quot;,
                &quot;Grana&quot;
            ]
        },
        {
            &quot;id&quot;: 18,
            &quot;nome&quot;: &quot;Calzone&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;6.50&quot;,
                &quot;maxi&quot;: &quot;6.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Cipolla&quot;,
                &quot;Salame&quot;,
                &quot;Bacon&quot;,
                &quot;Peperoni&quot;
            ]
        },
        {
            &quot;id&quot;: 19,
            &quot;nome&quot;: &quot;Calzone Vegetale&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;7.00&quot;,
                &quot;maxi&quot;: &quot;7.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Peperoni&quot;,
                &quot;Zucchine&quot;,
                &quot;Melanzane&quot;
            ]
        },
        {
            &quot;id&quot;: 20,
            &quot;nome&quot;: &quot;Tonno&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;15.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Tonno&quot;
            ]
        },
        {
            &quot;id&quot;: 21,
            &quot;nome&quot;: &quot;Tonno e Cipolla&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Cipolla&quot;,
                &quot;Tonno&quot;
            ]
        },
        {
            &quot;id&quot;: 22,
            &quot;nome&quot;: &quot;Delicata&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Stracchino&quot;,
                &quot;Arrosto di Tacchino&quot;
            ]
        },
        {
            &quot;id&quot;: 23,
            &quot;nome&quot;: &quot;Tartufo e Speck&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Tartufo&quot;,
                &quot;Speck&quot;
            ]
        },
        {
            &quot;id&quot;: 24,
            &quot;nome&quot;: &quot;Tartufo e Culatello&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Tartufo&quot;,
                &quot;Culatello&quot;
            ]
        },
        {
            &quot;id&quot;: 25,
            &quot;nome&quot;: &quot;Tartufo e Pancetta&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Tartufo&quot;,
                &quot;Pancetta&quot;
            ]
        },
        {
            &quot;id&quot;: 26,
            &quot;nome&quot;: &quot;Tartufo e Arrosto di Tacchino&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Arrosto di Tacchino&quot;,
                &quot;Tartufo&quot;
            ]
        },
        {
            &quot;id&quot;: 27,
            &quot;nome&quot;: &quot;Piccante&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.50&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Salamino Piccante&quot;,
                &quot;Pancetta&quot;,
                &quot;Salsiccia&quot;
            ]
        },
        {
            &quot;id&quot;: 28,
            &quot;nome&quot;: &quot;Carciofona&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.50&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Carciofi&quot;,
                &quot;Tartufo&quot;,
                &quot;Culatello&quot;,
                &quot;Crema di Carciofi&quot;
            ]
        },
        {
            &quot;id&quot;: 29,
            &quot;nome&quot;: &quot;Asparagiona&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.50&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Asparagi&quot;,
                &quot;Tartufo&quot;,
                &quot;Crema di Asparagi&quot;,
                &quot;Speck Cotto al Forno&quot;
            ]
        },
        {
            &quot;id&quot;: 30,
            &quot;nome&quot;: &quot;Montanara&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.50&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Porcini&quot;,
                &quot;Tartufo&quot;,
                &quot;Pancetta&quot;
            ]
        },
        {
            &quot;id&quot;: 31,
            &quot;nome&quot;: &quot;Treviso&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;9.50&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Arrosto di Tacchino&quot;,
                &quot;Tartufo&quot;,
                &quot;Crema di Radicchio&quot;,
                &quot;Radicchio di Treviso&quot;
            ]
        },
        {
            &quot;id&quot;: 32,
            &quot;nome&quot;: &quot;Crema di Asparagi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Asparagi&quot;,
                &quot;Crema di Asparagi&quot;
            ]
        },
        {
            &quot;id&quot;: 33,
            &quot;nome&quot;: &quot;Crema di Carciofi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Carciofi&quot;,
                &quot;Crema di Carciofi&quot;
            ]
        },
        {
            &quot;id&quot;: 34,
            &quot;nome&quot;: &quot;Crema di Porcini&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Porcini&quot;,
                &quot;Crema di Porcini&quot;
            ]
        },
        {
            &quot;id&quot;: 35,
            &quot;nome&quot;: &quot;Crema di Radicchio&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Crema di Radicchio&quot;,
                &quot;Radicchio&quot;
            ]
        },
        {
            &quot;id&quot;: 36,
            &quot;nome&quot;: &quot;Rustica&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Porcini&quot;,
                &quot;Salamino&quot;
            ]
        },
        {
            &quot;id&quot;: 37,
            &quot;nome&quot;: &quot;Sfiziosa&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Speck&quot;,
                &quot;Panna&quot;
            ]
        },
        {
            &quot;id&quot;: 38,
            &quot;nome&quot;: &quot;Amatriciana&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Cipolla&quot;,
                &quot;Pancetta&quot;,
                &quot;Peperoncino&quot;
            ]
        },
        {
            &quot;id&quot;: 39,
            &quot;nome&quot;: &quot;Fresca&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;11.50&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Bresaola&quot;,
                &quot;Rucola&quot;,
                &quot;Grana a Scaglie&quot;
            ]
        },
        {
            &quot;id&quot;: 40,
            &quot;nome&quot;: &quot;Gustosa&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Rucola&quot;,
                &quot;Sfilacci di Cavallo&quot;,
                &quot;Pomodorini&quot;
            ]
        },
        {
            &quot;id&quot;: 41,
            &quot;nome&quot;: &quot;Patapizza&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Patate Fritte&quot;
            ]
        },
        {
            &quot;id&quot;: 42,
            &quot;nome&quot;: &quot;Caprese&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Pomodorini&quot;,
                &quot;Mozzarella di Bufala&quot;
            ]
        },
        {
            &quot;id&quot;: 43,
            &quot;nome&quot;: &quot;Girasole&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;6.50&quot;,
                &quot;media&quot;: &quot;9.50&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Peperoni&quot;,
                &quot;Zucchine&quot;,
                &quot;Mais&quot;
            ]
        },
        {
            &quot;id&quot;: 44,
            &quot;nome&quot;: &quot;Norvegese&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Spinaci&quot;,
                &quot;Salmone Affumicato&quot;
            ]
        },
        {
            &quot;id&quot;: 45,
            &quot;nome&quot;: &quot;Trevigiana&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Radicchio&quot;,
                &quot;Salame Dolce&quot;
            ]
        },
        {
            &quot;id&quot;: 46,
            &quot;nome&quot;: &quot;Verdure&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Peperoni&quot;,
                &quot;Zucchine&quot;,
                &quot;Melanzane&quot;
            ]
        },
        {
            &quot;id&quot;: 47,
            &quot;nome&quot;: &quot;El Rapido&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Peperoni&quot;,
                &quot;Salsiccia&quot;,
                &quot;Ricotta&quot;
            ]
        },
        {
            &quot;id&quot;: 48,
            &quot;nome&quot;: &quot;Hawaii&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;10.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Prosciutto Cotto&quot;,
                &quot;Ananas&quot;
            ]
        },
        {
            &quot;id&quot;: 49,
            &quot;nome&quot;: &quot;Mari e Monti&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Porcini&quot;,
                &quot;Gamberetti&quot;
            ]
        },
        {
            &quot;id&quot;: 50,
            &quot;nome&quot;: &quot;Frutti di Mare&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.50&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Aglio&quot;,
                &quot;Mozzarella&quot;,
                &quot;Gamberetti&quot;,
                &quot;Granchio&quot;,
                &quot;Salmone&quot;,
                &quot;Frutti di Mare&quot;
            ]
        },
        {
            &quot;id&quot;: 51,
            &quot;nome&quot;: &quot;Contadina&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Chiodini&quot;,
                &quot;Sopressa&quot;
            ]
        },
        {
            &quot;id&quot;: 52,
            &quot;nome&quot;: &quot;Re Sole&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Asparagi&quot;,
                &quot;Salamino Piccante&quot;,
                &quot;Uova&quot;
            ]
        },
        {
            &quot;id&quot;: 53,
            &quot;nome&quot;: &quot;Fiera&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Cipolla&quot;,
                &quot;Peperoni&quot;,
                &quot;Salsiccia&quot;
            ]
        },
        {
            &quot;id&quot;: 54,
            &quot;nome&quot;: &quot;W&uuml;rstel e Patate&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;W&uuml;rstel&quot;,
                &quot;Patate&quot;
            ]
        },
        {
            &quot;id&quot;: 55,
            &quot;nome&quot;: &quot;Mexico&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Patate Mexico&quot;
            ]
        },
        {
            &quot;id&quot;: 56,
            &quot;nome&quot;: &quot;Porkis&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Patate Fritte&quot;,
                &quot;Porchetta&quot;
            ]
        },
        {
            &quot;id&quot;: 57,
            &quot;nome&quot;: &quot;Jesolana&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;10.50&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Zucchine&quot;,
                &quot;Mais&quot;,
                &quot;Gamberetti&quot;
            ]
        },
        {
            &quot;id&quot;: 58,
            &quot;nome&quot;: &quot;Heidi&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;9.00&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Chiodini&quot;,
                &quot;Trifolati&quot;,
                &quot;Mozzarella di Bufala&quot;
            ]
        },
        {
            &quot;id&quot;: 59,
            &quot;nome&quot;: &quot;Tirolese&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Porcini&quot;,
                &quot;Speck&quot;,
                &quot;Panna&quot;
            ]
        },
        {
            &quot;id&quot;: 60,
            &quot;nome&quot;: &quot;Viziosa&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;9.00&quot;,
                &quot;media&quot;: &quot;13.00&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Acciughe&quot;,
                &quot;Capperi&quot;,
                &quot;Olive&quot;,
                &quot;Mozzarella di Bufala&quot;,
                &quot;Pomodori Secchi&quot;
            ]
        },
        {
            &quot;id&quot;: 61,
            &quot;nome&quot;: &quot;Blanca&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Mozzarella&quot;,
                &quot;Melanzane&quot;,
                &quot;Stracchino&quot;,
                &quot;Noci&quot;
            ]
        },
        {
            &quot;id&quot;: 62,
            &quot;nome&quot;: &quot;Italia&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;7.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;16.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Pomodorini&quot;,
                &quot;Spinaci&quot;,
                &quot;Ricotta&quot;
            ]
        },
        {
            &quot;id&quot;: 63,
            &quot;nome&quot;: &quot;Golosona&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.50&quot;,
                &quot;media&quot;: &quot;12.00&quot;,
                &quot;maxi&quot;: &quot;18.00&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Gorgonzola&quot;,
                &quot;Salsiccia&quot;,
                &quot;Rucola&quot;,
                &quot;Pomodorini&quot;
            ]
        },
        {
            &quot;id&quot;: 64,
            &quot;nome&quot;: &quot;G.P.&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;9.00&quot;,
                &quot;media&quot;: &quot;12.50&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Mozzarella di Bufala&quot;,
                &quot;Prosciutto Crudo&quot;,
                &quot;Ricotta Affumicata&quot;
            ]
        },
        {
            &quot;id&quot;: 65,
            &quot;nome&quot;: &quot;Roger&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;9.00&quot;,
                &quot;media&quot;: &quot;12.50&quot;,
                &quot;maxi&quot;: &quot;18.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Tartufo&quot;,
                &quot;Salsiccia&quot;,
                &quot;Radicchio di Treviso&quot;
            ]
        },
        {
            &quot;id&quot;: 66,
            &quot;nome&quot;: &quot;Carbonara&quot;,
            &quot;prezzi&quot;: {
                &quot;normale&quot;: &quot;8.00&quot;,
                &quot;media&quot;: &quot;11.00&quot;,
                &quot;maxi&quot;: &quot;17.50&quot;
            },
            &quot;is_visible&quot;: true,
            &quot;ingredienti&quot;: [
                &quot;Pomodoro&quot;,
                &quot;Mozzarella&quot;,
                &quot;Grana&quot;,
                &quot;Pancetta&quot;,
                &quot;Uovo&quot;
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pizze" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pizze"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pizze"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pizze" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pizze">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pizze" data-method="GET"
      data-path="api/pizze"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pizze', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pizze"
                    onclick="tryItOut('GETapi-pizze');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pizze"
                    onclick="cancelTryOut('GETapi-pizze');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pizze"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pizze</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-pizze"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-pizze"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-ingredients">GET api/ingredients</h2>

<p>
</p>



<span id="example-requests-GETapi-ingredients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://elrapido-backend-production.up.railway.app/api/ingredients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/ingredients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-ingredients">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Pomodoro&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Aglio&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Olio&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Origano&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Mozzarella&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Acciughe&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Capperi&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Olive&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Cipolla&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Prosciutto Cotto&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Funghi&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Chiodini&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Porcini&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Trifolati&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Asparagi&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Carciofi&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;W&uuml;rstel&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Salamino Piccante&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Gorgonzola&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Brie&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Provola&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Grana&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Salame&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Bacon&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Peperoni&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;Zucchine&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Melanzane&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;Tonno&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Stracchino&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Arrosto di Tacchino&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;Tartufo&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;name&quot;: &quot;Speck&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;Culatello&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;name&quot;: &quot;Pancetta&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;name&quot;: &quot;Salsiccia&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;name&quot;: &quot;Crema di Carciofi&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;name&quot;: &quot;Crema di Asparagi&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;name&quot;: &quot;Speck Cotto al Forno&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;name&quot;: &quot;Crema di Radicchio&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;name&quot;: &quot;Radicchio di Treviso&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;name&quot;: &quot;Crema di Porcini&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;name&quot;: &quot;Radicchio&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;name&quot;: &quot;Salamino&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Panna&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;name&quot;: &quot;Peperoncino&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;name&quot;: &quot;Bresaola&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;name&quot;: &quot;Rucola&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;Grana a Scaglie&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;Sfilacci di Cavallo&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;Pomodorini&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;Patate Fritte&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;name&quot;: &quot;Mozzarella di Bufala&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;name&quot;: &quot;Mais&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;name&quot;: &quot;Spinaci&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;name&quot;: &quot;Salmone Affumicato&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;name&quot;: &quot;Salame Dolce&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;name&quot;: &quot;Ricotta&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;name&quot;: &quot;Ananas&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;name&quot;: &quot;Gamberetti&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;name&quot;: &quot;Granchio&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;name&quot;: &quot;Salmone&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;name&quot;: &quot;Frutti di Mare&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;name&quot;: &quot;Sopressa&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;name&quot;: &quot;Uova&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;name&quot;: &quot;Patate&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;name&quot;: &quot;Patate Mexico&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;name&quot;: &quot;Porchetta&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;name&quot;: &quot;Pomodori Secchi&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;name&quot;: &quot;Noci&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;name&quot;: &quot;Prosciutto Crudo&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;name&quot;: &quot;Ricotta Affumicata&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;name&quot;: &quot;Uovo&quot;,
        &quot;is_allergen&quot;: false,
        &quot;created_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-07T16:54:19.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-ingredients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-ingredients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ingredients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-ingredients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ingredients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-ingredients" data-method="GET"
      data-path="api/ingredients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-ingredients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-ingredients"
                    onclick="tryItOut('GETapi-ingredients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-ingredients"
                    onclick="cancelTryOut('GETapi-ingredients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-ingredients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/ingredients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-ingredients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-ingredients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-pizze">POST api/pizze</h2>

<p>
</p>



<span id="example-requests-POSTapi-pizze">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://elrapido-backend-production.up.railway.app/api/pizze" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\",
    \"price_normale\": 60,
    \"price_media\": 42,
    \"price_maxi\": 37,
    \"is_visible\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "description": "Eius et animi quos velit et.",
    "price_normale": 60,
    "price_media": 42,
    "price_maxi": 37,
    "is_visible": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-pizze">
</span>
<span id="execution-results-POSTapi-pizze" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pizze"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pizze"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-pizze" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pizze">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-pizze" data-method="POST"
      data-path="api/pizze"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pizze', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pizze"
                    onclick="tryItOut('POSTapi-pizze');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pizze"
                    onclick="cancelTryOut('POSTapi-pizze');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pizze"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pizze</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-pizze"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-pizze"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-pizze"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-pizze"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_normale</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_normale"                data-endpoint="POSTapi-pizze"
               value="60"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_media</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_media"                data-endpoint="POSTapi-pizze"
               value="42"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>42</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_maxi</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_maxi"                data-endpoint="POSTapi-pizze"
               value="37"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>37</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_visible</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-pizze" style="display: none">
            <input type="radio" name="is_visible"
                   value="true"
                   data-endpoint="POSTapi-pizze"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-pizze" style="display: none">
            <input type="radio" name="is_visible"
                   value="false"
                   data-endpoint="POSTapi-pizze"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ingredients</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ingredients[0]"                data-endpoint="POSTapi-pizze"
               data-component="body">
        <input type="text" style="display: none"
               name="ingredients[1]"                data-endpoint="POSTapi-pizze"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the ingredients table.</p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-pizze--pizza_id-">PUT api/pizze/{pizza_id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-pizze--pizza_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://elrapido-backend-production.up.railway.app/api/pizze/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\",
    \"price_normale\": 60,
    \"price_media\": 42,
    \"price_maxi\": 37,
    \"is_visible\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "description": "Eius et animi quos velit et.",
    "price_normale": 60,
    "price_media": 42,
    "price_maxi": 37,
    "is_visible": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-pizze--pizza_id-">
</span>
<span id="execution-results-PUTapi-pizze--pizza_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-pizze--pizza_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-pizze--pizza_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-pizze--pizza_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-pizze--pizza_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-pizze--pizza_id-" data-method="PUT"
      data-path="api/pizze/{pizza_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-pizze--pizza_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-pizze--pizza_id-"
                    onclick="tryItOut('PUTapi-pizze--pizza_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-pizze--pizza_id-"
                    onclick="cancelTryOut('PUTapi-pizze--pizza_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-pizze--pizza_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/pizze/{pizza_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>pizza_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="pizza_id"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the pizza. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_normale</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_normale"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="60"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_media</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_media"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="42"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>42</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_maxi</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_maxi"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="37"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>37</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_visible</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-pizze--pizza_id-" style="display: none">
            <input type="radio" name="is_visible"
                   value="true"
                   data-endpoint="PUTapi-pizze--pizza_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-pizze--pizza_id-" style="display: none">
            <input type="radio" name="is_visible"
                   value="false"
                   data-endpoint="PUTapi-pizze--pizza_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ingredients</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ingredients[0]"                data-endpoint="PUTapi-pizze--pizza_id-"
               data-component="body">
        <input type="text" style="display: none"
               name="ingredients[1]"                data-endpoint="PUTapi-pizze--pizza_id-"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the ingredients table.</p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-pizze--pizza_id-">DELETE api/pizze/{pizza_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-pizze--pizza_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://elrapido-backend-production.up.railway.app/api/pizze/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pizze--pizza_id-">
</span>
<span id="execution-results-DELETEapi-pizze--pizza_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-pizze--pizza_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pizze--pizza_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-pizze--pizza_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pizze--pizza_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-pizze--pizza_id-" data-method="DELETE"
      data-path="api/pizze/{pizza_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pizze--pizza_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-pizze--pizza_id-"
                    onclick="tryItOut('DELETEapi-pizze--pizza_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-pizze--pizza_id-"
                    onclick="cancelTryOut('DELETEapi-pizze--pizza_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-pizze--pizza_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/pizze/{pizza_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-pizze--pizza_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-pizze--pizza_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>pizza_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="pizza_id"                data-endpoint="DELETEapi-pizze--pizza_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the pizza. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-ingredients">POST api/ingredients</h2>

<p>
</p>



<span id="example-requests-POSTapi-ingredients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://elrapido-backend-production.up.railway.app/api/ingredients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/ingredients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-ingredients">
</span>
<span id="execution-results-POSTapi-ingredients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-ingredients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ingredients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-ingredients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ingredients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-ingredients" data-method="POST"
      data-path="api/ingredients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-ingredients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-ingredients"
                    onclick="tryItOut('POSTapi-ingredients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-ingredients"
                    onclick="cancelTryOut('POSTapi-ingredients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-ingredients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/ingredients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-ingredients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-ingredients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-ingredients"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>b</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-ingredients--ingredient_id-">PUT api/ingredients/{ingredient_id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-ingredients--ingredient_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://elrapido-backend-production.up.railway.app/api/ingredients/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/ingredients/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-ingredients--ingredient_id-">
</span>
<span id="execution-results-PUTapi-ingredients--ingredient_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-ingredients--ingredient_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-ingredients--ingredient_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-ingredients--ingredient_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-ingredients--ingredient_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-ingredients--ingredient_id-" data-method="PUT"
      data-path="api/ingredients/{ingredient_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-ingredients--ingredient_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-ingredients--ingredient_id-"
                    onclick="tryItOut('PUTapi-ingredients--ingredient_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-ingredients--ingredient_id-"
                    onclick="cancelTryOut('PUTapi-ingredients--ingredient_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-ingredients--ingredient_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/ingredients/{ingredient_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-ingredients--ingredient_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-ingredients--ingredient_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ingredient_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ingredient_id"                data-endpoint="PUTapi-ingredients--ingredient_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ingredient. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-ingredients--ingredient_id-"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-ingredients--ingredient_id-">DELETE api/ingredients/{ingredient_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-ingredients--ingredient_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://elrapido-backend-production.up.railway.app/api/ingredients/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/ingredients/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-ingredients--ingredient_id-">
</span>
<span id="execution-results-DELETEapi-ingredients--ingredient_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-ingredients--ingredient_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-ingredients--ingredient_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-ingredients--ingredient_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-ingredients--ingredient_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-ingredients--ingredient_id-" data-method="DELETE"
      data-path="api/ingredients/{ingredient_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-ingredients--ingredient_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-ingredients--ingredient_id-"
                    onclick="tryItOut('DELETEapi-ingredients--ingredient_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-ingredients--ingredient_id-"
                    onclick="cancelTryOut('DELETEapi-ingredients--ingredient_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-ingredients--ingredient_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/ingredients/{ingredient_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-ingredients--ingredient_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-ingredients--ingredient_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ingredient_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ingredient_id"                data-endpoint="DELETEapi-ingredients--ingredient_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ingredient. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
