<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>El Rapido - API dei Pizzaioli</title>

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
                    <ul id="tocify-header-autenticazione" class="tocify-header">
                <li class="tocify-item level-1" data-unique="autenticazione">
                    <a href="#autenticazione">Autenticazione</a>
                </li>
                                    <ul id="tocify-subheader-autenticazione" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="autenticazione-POSTapi-login">
                                <a href="#autenticazione-POSTapi-login">Login amministratore</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="autenticazione-POSTapi-logout">
                                <a href="#autenticazione-POSTapi-logout">Logout</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-debug-hash">
                                <a href="#endpoints-GETapi-debug-hash">GET api/debug-hash</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-ingredienti" class="tocify-header">
                <li class="tocify-item level-1" data-unique="ingredienti">
                    <a href="#ingredienti">Ingredienti</a>
                </li>
                                    <ul id="tocify-subheader-ingredienti" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="ingredienti-GETapi-ingredients">
                                <a href="#ingredienti-GETapi-ingredients">Elenco ingredienti</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="ingredienti-POSTapi-ingredients">
                                <a href="#ingredienti-POSTapi-ingredients">Crea ingrediente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="ingredienti-PUTapi-ingredients--ingredient_id-">
                                <a href="#ingredienti-PUTapi-ingredients--ingredient_id-">Aggiorna ingrediente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="ingredienti-DELETEapi-ingredients--ingredient_id-">
                                <a href="#ingredienti-DELETEapi-ingredients--ingredient_id-">Elimina ingrediente</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-menu-pizze" class="tocify-header">
                <li class="tocify-item level-1" data-unique="menu-pizze">
                    <a href="#menu-pizze">Menu & Pizze</a>
                </li>
                                    <ul id="tocify-subheader-menu-pizze" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="menu-pizze-GETapi-pizze">
                                <a href="#menu-pizze-GETapi-pizze">Elenco pizze</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="menu-pizze-POSTapi-pizze">
                                <a href="#menu-pizze-POSTapi-pizze">Crea nuova pizza</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="menu-pizze-PUTapi-pizze--pizza_id-">
                                <a href="#menu-pizze-PUTapi-pizze--pizza_id-">Aggiorna pizza</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="menu-pizze-DELETEapi-pizze--pizza_id-">
                                <a href="#menu-pizze-DELETEapi-pizze--pizza_id-">Elimina pizza</a>
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
<p>Documentazione ufficiale del backend di El Rapido. Gestione menu, pizze, ingredienti e ordini.</p>
<aside>
    <strong>Base URL</strong>: <code>https://elrapido-backend-production.up.railway.app</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Ottieni il tuo token tramite l'endpoint <code>/api/login</code>. Inseriscilo nel campo Authorization come <code>Bearer {token}</code>.</p>

        <h1 id="autenticazione">Autenticazione</h1>

    <p>Endpoint per gestire l'accesso e l'uscita degli utenti amministrativi.</p>

                                <h2 id="autenticazione-POSTapi-login">Login amministratore</h2>

<p>
</p>

<p>Invia le credenziali per ottenere un token di accesso (Personal Access Token).
Il token ottenuto dovrà essere incluso nell'header <code>Authorization</code> come <code>Bearer {token}</code> per tutte le successive richieste protette.</p>

<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://elrapido-backend-production.up.railway.app/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"admin@elrapido.it\",
    \"password\": \"password\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "admin@elrapido.it",
    "password": "password"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token&quot;: &quot;1|nLx9...yS7A&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Credenziali non valide&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The email field is required.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
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
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="admin@elrapido.it"
               data-component="body">
    <br>
<p>L'indirizzo email dell'utente amministratore. Example: <code>admin@elrapido.it</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="password"
               data-component="body">
    <br>
<p>La password dell'utente. Example: <code>password</code></p>
        </div>
        </form>

                    <h2 id="autenticazione-POSTapi-logout">Logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Revoca il token corrente utilizzato per l'autenticazione, invalidandolo per le chiamate future.</p>

<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://elrapido-backend-production.up.railway.app/api/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Logout effettuato&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
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
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-debug-hash">GET api/debug-hash</h2>

<p>
</p>



<span id="example-requests-GETapi-debug-hash">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://elrapido-backend-production.up.railway.app/api/debug-hash" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/debug-hash"
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

<span id="example-responses-GETapi-debug-hash">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;generated_hash&quot;: &quot;$2y$12$0gwrEotyhcZ7ngSl8uNPFu1EWuAwvTTboeQQmeOvJn0x.nDSNyzke&quot;,
    &quot;hash_works&quot;: true,
    &quot;user_hash_in_db&quot;: null,
    &quot;password_matches_db&quot;: false
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-debug-hash" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-debug-hash"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-debug-hash"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-debug-hash" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-debug-hash">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-debug-hash" data-method="GET"
      data-path="api/debug-hash"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-debug-hash', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-debug-hash"
                    onclick="tryItOut('GETapi-debug-hash');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-debug-hash"
                    onclick="cancelTryOut('GETapi-debug-hash');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-debug-hash"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/debug-hash</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-debug-hash"
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
                              name="Accept"                data-endpoint="GETapi-debug-hash"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="ingredienti">Ingredienti</h1>

    <p>API per la gestione degli ingredienti disponibili nel database.</p>

                                <h2 id="ingredienti-GETapi-ingredients">Elenco ingredienti</h2>

<p>
</p>

<p>Recupera la lista completa di tutti gli ingredienti censiti nel sistema, ordinati alfabeticamente.</p>

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
                <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Pomodoro&quot;,
        &quot;created_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Mozzarella&quot;,
        &quot;created_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;
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

                    <h2 id="ingredienti-POSTapi-ingredients">Crea ingrediente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Aggiunge un nuovo ingrediente utilizzabile nelle pizze.</p>

<span id="example-requests-POSTapi-ingredients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://elrapido-backend-production.up.railway.app/api/ingredients" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Mozzarella di Bufala\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/ingredients"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Mozzarella di Bufala"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-ingredients">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 10,
    &quot;name&quot;: &quot;Mozzarella di Bufala&quot;,
    &quot;created_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;
}</code>
 </pre>
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
      data-authed="1"
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
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-ingredients"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
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
               value="Mozzarella di Bufala"
               data-component="body">
    <br>
<p>Il nome dell'ingrediente. Deve essere unico. Example: <code>Mozzarella di Bufala</code></p>
        </div>
        </form>

                    <h2 id="ingredienti-PUTapi-ingredients--ingredient_id-">Aggiorna ingrediente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Modifica il nome di un ingrediente esistente.</p>

<span id="example-requests-PUTapi-ingredients--ingredient_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://elrapido-backend-production.up.railway.app/api/ingredients/01KNQB9WM40GZF2QVV3RQJFZ00" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Gorgonzola DOP\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/ingredients/01KNQB9WM40GZF2QVV3RQJFZ00"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Gorgonzola DOP"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-ingredients--ingredient_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 10,
    &quot;name&quot;: &quot;Gorgonzola DOP&quot;,
    &quot;created_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2024-04-01T12:00:00.000000Z&quot;
}</code>
 </pre>
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
      data-authed="1"
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
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-ingredients--ingredient_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
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
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ingredient_id"                data-endpoint="PUTapi-ingredients--ingredient_id-"
               value="01KNQB9WM40GZF2QVV3RQJFZ00"
               data-component="url">
    <br>
<p>The ID of the ingredient. Example: <code>01KNQB9WM40GZF2QVV3RQJFZ00</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-ingredients--ingredient_id-"
               value="Gorgonzola DOP"
               data-component="body">
    <br>
<p>Il nuovo nome dell'ingrediente. Example: <code>Gorgonzola DOP</code></p>
        </div>
        </form>

                    <h2 id="ingredienti-DELETEapi-ingredients--ingredient_id-">Elimina ingrediente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Rimuove un ingrediente. L'operazione fallisce se l'ingrediente è attualmente associato ad almeno una pizza.</p>

<span id="example-requests-DELETEapi-ingredients--ingredient_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://elrapido-backend-production.up.railway.app/api/ingredients/01KNQB9WM40GZF2QVV3RQJFZ00" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/ingredients/01KNQB9WM40GZF2QVV3RQJFZ00"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-ingredients--ingredient_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Ingrediente &#039;...&#039; rimosso con successo.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (409):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;error&quot;,
    &quot;code&quot;: &quot;INGREDIENT_IN_USE&quot;,
    &quot;message&quot;: &quot;Impossibile eliminare: ingrediente in uso.&quot;,
    &quot;data&quot;: {
        &quot;affected_pizzas&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Margherita&quot;
            }
        ]
    }
}</code>
 </pre>
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
      data-authed="1"
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
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-ingredients--ingredient_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
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
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ingredient_id"                data-endpoint="DELETEapi-ingredients--ingredient_id-"
               value="01KNQB9WM40GZF2QVV3RQJFZ00"
               data-component="url">
    <br>
<p>The ID of the ingredient. Example: <code>01KNQB9WM40GZF2QVV3RQJFZ00</code></p>
            </div>
                    </form>

                <h1 id="menu-pizze">Menu & Pizze</h1>

    <p>API per la gestione del menu delle pizze.</p>

                                <h2 id="menu-pizze-GETapi-pizze">Elenco pizze</h2>

<p>
</p>

<p>Recupera la lista di tutte le pizze disponibili. Per impostazione predefinita, restituisce solo le pizze visibili nel menu.</p>

<span id="example-requests-GETapi-pizze">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://elrapido-backend-production.up.railway.app/api/pizze?all=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze"
);

const params = {
    "all": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;01KNQB9WJVQSBVTEFKJHEJJMNV&quot;,
            &quot;nome&quot;: &quot;Marinara&quot;,
            &quot;position&quot;: 10,
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
            &quot;id&quot;: &quot;01KNQB9WJVQSBVTEFKJHEJJMNV&quot;,
            &quot;nome&quot;: &quot;Marinara&quot;,
            &quot;position&quot;: 10,
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
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>all</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-pizze" style="display: none">
            <input type="radio" name="all"
                   value="1"
                   data-endpoint="GETapi-pizze"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-pizze" style="display: none">
            <input type="radio" name="all"
                   value="0"
                   data-endpoint="GETapi-pizze"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Mostra tutte le pizze (anche quelle nascoste). Solo per amministratori. Example: <code>true</code></p>
            </div>
                </form>

                    <h2 id="menu-pizze-POSTapi-pizze">Crea nuova pizza</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Aggiunge una nuova pizza al menu con i relativi ingredienti.</p>

<span id="example-requests-POSTapi-pizze">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://elrapido-backend-production.up.railway.app/api/pizze" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Capricciosa\",
    \"description\": \"Pomodoro, mozzarella, carciofini, olive e funghi.\",
    \"price_normale\": 8.5,
    \"price_media\": 12,
    \"price_maxi\": 16.5,
    \"is_visible\": true,
    \"position\": 10
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Capricciosa",
    "description": "Pomodoro, mozzarella, carciofini, olive e funghi.",
    "price_normale": 8.5,
    "price_media": 12,
    "price_maxi": 16.5,
    "is_visible": true,
    "position": 10
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-pizze">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;01KNQB9WJVQSBVTEFKJHEJJMNV&quot;,
        &quot;nome&quot;: &quot;Marinara&quot;,
        &quot;position&quot;: 10,
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
    }
}</code>
 </pre>
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
      data-authed="1"
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
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-pizze"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
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
               value="Capricciosa"
               data-component="body">
    <br>
<p>Il nome della pizza. Must not be greater than 255 characters. Example: <code>Capricciosa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-pizze"
               value="Pomodoro, mozzarella, carciofini, olive e funghi."
               data-component="body">
    <br>
<p>Descrizione facoltativa della pizza. Example: <code>Pomodoro, mozzarella, carciofini, olive e funghi.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_normale</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_normale"                data-endpoint="POSTapi-pizze"
               value="8.5"
               data-component="body">
    <br>
<p>Prezzo per la dimensione standard. Must be at least 0. Example: <code>8.5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_media</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_media"                data-endpoint="POSTapi-pizze"
               value="12"
               data-component="body">
    <br>
<p>Prezzo per la dimensione media (opzionale). Must be at least 0. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_maxi</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_maxi"                data-endpoint="POSTapi-pizze"
               value="16.5"
               data-component="body">
    <br>
<p>Prezzo per la dimensione maxi (opzionale). Must be at least 0. Example: <code>16.5</code></p>
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
<p>Indica se la pizza deve apparire nel menu. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="position"                data-endpoint="POSTapi-pizze"
               value="10"
               data-component="body">
    <br>
<p>Ordine di apparizione nel menu. Se omesso, viene messa in coda. Example: <code>10</code></p>
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

                    <h2 id="menu-pizze-PUTapi-pizze--pizza_id-">Aggiorna pizza</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Modifica i dettagli di una pizza esistente e aggiorna i suoi ingredienti.</p>

<span id="example-requests-PUTapi-pizze--pizza_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://elrapido-backend-production.up.railway.app/api/pizze/01KNQB9WJVQSBVTEFKJHEJJMNV" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Capricciosa\",
    \"description\": \"Pomodoro, mozzarella, carciofini, olive e funghi.\",
    \"price_normale\": 8.5,
    \"price_media\": 12,
    \"price_maxi\": 16.5,
    \"is_visible\": true,
    \"position\": 10
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze/01KNQB9WJVQSBVTEFKJHEJJMNV"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Capricciosa",
    "description": "Pomodoro, mozzarella, carciofini, olive e funghi.",
    "price_normale": 8.5,
    "price_media": 12,
    "price_maxi": 16.5,
    "is_visible": true,
    "position": 10
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-pizze--pizza_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;01KNQB9WJVQSBVTEFKJHEJJMNV&quot;,
        &quot;nome&quot;: &quot;Marinara&quot;,
        &quot;position&quot;: 10,
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
    }
}</code>
 </pre>
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
      data-authed="1"
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
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-pizze--pizza_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
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
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pizza_id"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="01KNQB9WJVQSBVTEFKJHEJJMNV"
               data-component="url">
    <br>
<p>The ID of the pizza. Example: <code>01KNQB9WJVQSBVTEFKJHEJJMNV</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="Capricciosa"
               data-component="body">
    <br>
<p>Il nome della pizza. Must not be greater than 255 characters. Example: <code>Capricciosa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="Pomodoro, mozzarella, carciofini, olive e funghi."
               data-component="body">
    <br>
<p>Descrizione facoltativa della pizza. Example: <code>Pomodoro, mozzarella, carciofini, olive e funghi.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_normale</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_normale"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="8.5"
               data-component="body">
    <br>
<p>Prezzo per la dimensione standard. Must be at least 0. Example: <code>8.5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_media</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_media"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="12"
               data-component="body">
    <br>
<p>Prezzo per la dimensione media (opzionale). Must be at least 0. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_maxi</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_maxi"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="16.5"
               data-component="body">
    <br>
<p>Prezzo per la dimensione maxi (opzionale). Must be at least 0. Example: <code>16.5</code></p>
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
<p>Indica se la pizza deve apparire nel menu. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="position"                data-endpoint="PUTapi-pizze--pizza_id-"
               value="10"
               data-component="body">
    <br>
<p>Ordine di apparizione nel menu. Se omesso, viene messa in coda. Example: <code>10</code></p>
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

                    <h2 id="menu-pizze-DELETEapi-pizze--pizza_id-">Elimina pizza</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Rimuove definitivamente una pizza dal menu.</p>

<span id="example-requests-DELETEapi-pizze--pizza_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://elrapido-backend-production.up.railway.app/api/pizze/01KNQB9WJVQSBVTEFKJHEJJMNV" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://elrapido-backend-production.up.railway.app/api/pizze/01KNQB9WJVQSBVTEFKJHEJJMNV"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pizze--pizza_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Pizza &#039;Margherita&#039; eliminata con successo dal menu.&quot;
}</code>
 </pre>
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
      data-authed="1"
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
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-pizze--pizza_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
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
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pizza_id"                data-endpoint="DELETEapi-pizze--pizza_id-"
               value="01KNQB9WJVQSBVTEFKJHEJJMNV"
               data-component="url">
    <br>
<p>The ID of the pizza. Example: <code>01KNQB9WJVQSBVTEFKJHEJJMNV</code></p>
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
