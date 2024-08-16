<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oficial Docs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <ol class="list-group list-group-flush">
        <li class="d-flex justify-content-between align-items-start bg-primary p-3 text-light">
            <div class="ms-2 me-auto">
                Endpoints - docs.elvismacas.site/api/{endpoint}
            </div>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">
            <div class="ms-2 me-auto">
                login
            </div>
            <span class="badge text-bg-success rounded-pill text-light">POST</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">
            <div class="ms-2 me-auto">
                logout
            </div>
            <span class="badge text-bg-primary rounded-pill">GET</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">
            <div class="ms-2 me-auto">
                categories
            </div>
            <span class="badge text-bg-primary rounded-pill">GET</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">

            <div class="ms-2 me-auto">
                categories/create
            </div>
            <span class="badge text-bg-success rounded-pill text-light">POST</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">

            <div class="ms-2 me-auto">
                categories/edit
            </div>
            <span class="badge text-bg-warning rounded-pill text-light">PUT</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">

            <div class="ms-2 me-auto">
                categories/destroy/{id}
            </div>
            <span class="badge text-bg-primary rounded-pill">GET</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">

            <div class="ms-2 me-auto">
                categories/articles
            </div>
            <span class="badge text-bg-primary rounded-pill">GET</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">

            <div class="ms-2 me-auto">
                categories/articles/create
            </div>
            <span class="badge text-bg-success rounded-pill text-light">POST</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">

            <div class="ms-2 me-auto">
                categories/articles/edit
            </div>
            <span class="badge text-bg-warning rounded-pill text-light">PUT</span>
        </li>
        <li class="d-flex justify-content-between align-items-start p-3">

            <div class="ms-2 me-auto">
                categories/articles/destroy/{id}
            </div>
            <span class="badge text-bg-primary rounded-pill">GET</span>
        </li>
    </ol>

</body>

</html>
